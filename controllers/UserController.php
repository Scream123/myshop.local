<?php
/**
 *Контроллер функции пользователя
 */

include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';

/**
 * AJAX решистрация пользователя.
 * Инициализация сессионной переменной ($_SESSION['user'])
 *
 * @return json  массив данных нового пользователя
 */
function registerAction() {
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);

    $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
    $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;

    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
    $address = isset($_REQUEST['address']) ? $_REQUEST['address'] : null;
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
    $name =trim($name);

    //результат промежуточных данных об успехе\ошибках
    $resData = null;
    $resData = checkRegisterParams($email, $pwd1, $pwd2);

    //если пришли все данные, то проверяем наличие Эмейла в БД
    if(!$resData && checkUserEmail($email)) {
        $resData['success'] = false;
        $resData['message'] = "Пользователь с таким email ('{$email}') уже зарегистрирован";
    }

    if(!$resData) {
        $pwdMD5 = md5($pwd1);
        
        $userData = registerNewUser($email, $pwdMD5, $name, $phone, $address);

        if ($userData['success']) {

            $resData['message'] = 'Пользователь успешно зарегистрирован';
            $resData['success'] = 1;

            $userData = $userData[0];
            //Проверка логина при регистрации,если true - выводим Имя,иначе - email
            $resData['userName'] = $userData['name'] ? $userData['name'] : $userData['email'];
            $resData['userEmail'] = $email;

            $_SESSION['user'] = $userData;
            $_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];
            //$_SESSION['user']['displayName'] = $userData['userName'];

        }else{
            $resData['success'] = 0;
            $resData['message'] = 'Ошибка регистрации';
        }
    }

    echo json_encode($resData);
}

/**
 * Разлогинивание пользователя
 */

function logoutAction() {
    if(isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        unset($_SESSION['cart']);
    }

    redirect('/');
}

/**
 * AJAX авторизация пользователя
 *
 * @return json массив данных пользователя
 */
function loginAction() {
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);

    $pwd = isset($_REQUEST['pwd']) ? $_REQUEST['pwd'] : null;
    $pwd = trim($pwd);


    $userData = loginUser($email, $pwd);
    $role = isAdmin($email);




    if($userData['success']) {
        $userData = $userData[0];

        $_SESSION['user'] = $userData;
        $_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];

        $resData = $_SESSION['user'];
        $resData['success'] = 1;

        //$resData = $resData['name'] ? $resData['name'] : $resData['email'];
        //$resData = $email;
    }else{
        $resData['success'] = 0;
        $resData['message'] = 'Неверный логин или пароль!';
    }

    echo json_encode($resData);
}

/**
 * Формирование главной страницы пользователя
 *
 * @link '/user/'
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty) {

    //если полльзователь не залогинен, то редирект на главную страницу
    if (!isset($_SESSION['user'])) {
        redirect('/');
    }

    //получаем список категорий для меню
    $rsCategories = getAllMainCatsWithChildren();

    // Получаем список заказов пользователя
    $rsUserOrders = getCurUserOrders();
  
    $smarty->assign('pageTitle', 'Страница пользователя');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsUserOrders', $rsUserOrders);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'user');
    loadTemplate($smarty, 'footer');
}

/**
 * Обновление данных пользователя
 *
 * @return json результаты выполнения функции
 */
function updateAction() {
    //> если порльзователь не залогинен, то выходим
    if(!isset($_SESSION['user'])) {
        redirect('/');
    }//<

    //>инициализация переменных
    $resData = array();
    $phone   = isset($_REQUEST['phone'])   ? $_REQUEST['phone']   : null;
    $address = isset($_REQUEST['address']) ? $_REQUEST['address'] : null;
    $name    = isset($_REQUEST['name'])    ? $_REQUEST['name']    : null;
    $pwd1    = isset($_REQUEST['pwd1'])    ? $_REQUEST['pwd1']    : null;
    $pwd2    = isset($_REQUEST['pwd2'])    ? $_REQUEST['pwd2']    : null;
    $curPwd  = isset($_REQUEST['curPwd'])  ? $_REQUEST['curPwd']  : null;
    //<


    $curPwdMD5 = md5($curPwd);
    // проверка правильности пароля (введённый и тот под котороым залогинились)
    if(!$curPwd || ($_SESSION['user']['pwd']) != $curPwdMD5) {
        $resData['success'] = 0;
        $resData['message'] = 'Текущий пароль не верный';

        echo json_encode($resData);

        return false;
    }

    // обновление данных пользователя
    $res = updateUserData($name, $phone, $address, $pwd1, $pwd2, $curPwdMD5);

    if($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Данные сохранены';
        $resData['userName'] = $name;

        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['phone'] = $phone;
        $_SESSION['user']['address'] = $address;

        //> если повтор пароля прошел,то записываем Новый пароль
        $newPwd = $_SESSION['user']['pwd'];
        if($pwd1 && ($pwd1 == $pwd2)){
            $newPwd = md5(trim($pwd1));
        }
        $_SESSION['user']['pwd'] = $newPwd;
        //<
        $_SESSION['user']['displayName'] = $name ? $name : $_SESSION['user']['email'];
    }else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка сохранения данных';
    }

    echo json_encode($resData);
}
