<?php
/**
 * AdminController.php
 *
 * Контроллер бэкенда сайта(/admin/)
 */

//подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';
include_once '../models/UsersModel.php';


$smarty->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('teplateWebPath', TemplateAdminWebPath);

function indexAction($smarty) {

    //получить все главные категории
    $rsCategories = getAllMainCategories();

    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('pageTitle', 'Управление сайтом');
    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'admin');
    loadTemplate($smarty, 'adminFooter');

}

/**
 *Добавление новой категории
 */
function addNewCatAction() {

    $catName = $_POST['newCategoryName'];
    $catParentId = $_POST['generalCatId'];

    //Если поле $catName пустое, в БД не пишем
    if(!empty($catName))

    $res = insertCat($catName, $catParentId);
//d($res);

    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Категория добавлена';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка добавления категории';
    }
    //d($resData);
    echo json_encode($resData);
    return;
}

/**
 * Страница управления категориями
 *
 * @param type $smarty
 */
function categoryAction($smarty) {
    $rsCategory = getAllCategories();
    $rsMainCategories = getAllMainCategories();

    $smarty->assign('pageTitle','Управление сайтом');
    $smarty->assign('rsCategories', $rsCategory);
    $smarty->assign('rsMainCategories', $rsMainCategories);

    loadTemplate($smarty,'adminHeader');
    loadTemplate($smarty, 'adminCategory');
    loadTemplate($smarty, 'adminFooter');
}


function updateCategoryAction() {
    $itemId = $_POST['itemId'];
    $parentId = $_POST['parentId'];
    $newName = $_POST['newName'];

    $res = updateCategoryData($itemId, $parentId, $newName);

    if($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Категория обновлена';

    }else{
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных категории';
    }

    echo json_encode($resData);
    return;
}

/**
 * Страница управления товарами
 *
 * @param type $smarty
 */
function productsAction($smarty) {

    $rsCategories = getAllCategories();
   
    //$rsCategories = getChildCategory();
    $rsProducts = getProducts();
    
    $smarty->assign('pageTitle', 'Управление сайтом');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);


    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminProducts');
    loadTemplate($smarty, 'adminFooter');
}

/**
 *Добавление нового продутка
 */
function addProductAction() {
    $itemName  = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    $itemDesc  = $_POST['itemDesc'];
    $itemCat   = $_POST['itemCatId'];

    $res = insertProduct($itemName, $itemPrice, $itemDesc, $itemCat);
    $products = getProducts();
    if ($res) {
        //$resData['html'] = getHtml('../views/admin/products.tpl', $products);

        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены';
     
    }else{
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }

    echo  json_encode($resData);
    return;
}
function getHtml($path, $params) {

    $itemName  = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    $itemDesc  = $_POST['itemDesc'];
    $itemCat   = $_POST['itemCatId'];

    $html = include('../views/admin/products.tpl');


    return $html;
}

function deleteProductAction() {
    $itemId = isset($_GET['id']) ?  intval($_GET['id']) : null;

    if (!$itemId) exit();

    $res = deleteProduct($itemId);
    if ($res) {
        
        $resData['success'] = 1;
        $resData['message'] = 'товар удалён';
    }else {
        $resData['success'] = 0;
        $resData['message'] = 'ошибка при удалении';

    }
    echo json_encode($resData);
}



/**
 *Обновление данных о продуктах
 */
function updateProductAction() {
    $itemId = $_POST['itemId'];
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    $itemStatus = $_POST['itemStatus'];
    $itemDesc = $_POST['itemDesc'];
    $itemCat = $_POST['itemCatId'];

    $res = updateProduct($itemId, $itemName, $itemPrice, $itemStatus, $itemDesc, $itemCat);

    if($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены';
    }else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }

    echo  json_encode($resData);
    return;
}

/**
 * Загрузка изображения
 *
 */
function uploadAction() {

//    $maxSize = 2 * 1024 * 1024;
//
//    $itemId = $_POST['itemId'];
//
//    //получаем расширение загружаемого файла
//    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
//
//    //создаём имя файла
//    $newFileName = $itemId . '.' . $ext;
//
//    if($_FILES['filename']['size'] > $maxSize) {
//        echo ("Размер файла превышает два мегабайта");
//        return;
//    }
//
//    //Загружен ли файл
//    if(is_uploaded_file($_FILES['filename']['tmp_name'])) {
//        //Если файл загружен  то перемещаем его из временной директории в конечную
//        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $newFileName);
//
//        if ($res) {
//            $res = updateProductImage($itemId, $newFileName);
//            if ($res) {
//                redirect('/admin/products/');
//            }
//        }
//    }else{
//            echo ('Ошибка загрузки файла');
//        }

    //>Оптимизированный вариант
    $itemId = $_POST['itemId'];
    $successUploadFileName = uploadFile($_FILES['filename']['name'], '/images/products/');

    if (! $successUploadFileName) {
        echo 'Ошибка загрузки файла!';
        return;
    }
    $res = $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $successUploadFileName;

    if ($res) {
        $res = updateProductImage($itemId, $successUploadFileName);
        if ($res) {
            redirect('/admin/products/');
        }
    }else{
        echo ('Ошибка загрузки файла');
    }
    //<
}

/**
 * Управление заказами
 * @param $smarty
 */
function ordersAction($smarty) {
    $rsOrders = getOrders();

    $smarty->assign('rsOrders', $rsOrders);
    $smarty->assign('pageTitle', 'Заказы');

    loadTemplate($smarty,'adminHeader');
    loadTemplate($smarty, 'adminOrders');
    loadTemplate($smarty, 'adminFooter');
}


/**
 * Установление нового статуса заказа
 */
function setOrderStatusAction() {

    $itemId = $_POST['itemId'];
    
    $status = $_POST['status'];

    $res = updateOrderStatus($itemId,$status);

    if($res) {
        $resData['success'] = 1;
    }else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка установки статуса';
    }

    echo json_encode($resData);
    return;
}

function setOrderDatePaymentAction() {

    $itemId = $_POST['itemId'];
    $datePayment = $_POST['datePayment'];

    $res = updateOrderDatePayment($itemId, $datePayment);

    if($res) {
        $resData['success'] = 1;

    }else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка установки статуса';
    }
    json_encode($resData);
   
    return;
}

/**
 * AJAX авторизация админов
 *
 * @return json массив данных админа
 */
function loginForAdminAction() {
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);

    $pwd = isset($_REQUEST['pwd']) ? $_REQUEST['pwd'] : null;
    $pwd = trim($pwd);

    $userData = loginUser($email, $pwd);

    if($userData['success']) {
        $userData = $userData[0];

        $_SESSION['user'] = $userData;
        $_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];

        $resData = $_SESSION['user'];

        $resData['success'] = ($resData['admin'] == 1) ? 1 : null;
        //$resData['success'] = 1;

        //$resData = $resData['name'] ? $resData['name'] : $resData['email'];
        //$resData = $email;
    }else{
        $resData['success'] = 0;

        $resData['message'] = 'Неверный логин или пароль!';
    }


    echo json_encode($resData);
}

/**
 * Разлогинивание пользователя
 */

function logoutForAdminAction() {
    if(isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        unset($_SESSION['cart']);
    }

    redirect('/');
}

/**
 * Создание структуры XML файла
 */
function createXMLAction() {

    $rsProducts = getProducts();
    $xml = new DomDocument('1.0', 'utf-8');

    $xmpProducts = $xml->appendChild($xml->createElement('products'));

    foreach ($rsProducts as $product) {

        $xmpProduct = $xmpProducts->appendChild($xml->createElement('product'));

        foreach ($product as $key=>$val) {
            $xmlName = $xmpProduct->appendChild($xml->createElement($key));
            $xmlName->appendChild($xml->createTextNode($val));

        }
    }
    $xml->save($_SERVER['DOCUMENT_ROOT'] . '/xml/products.xml');
    echo 'ok';
}

function uploadFile($localFilename, $localPath = '/upload/') {

    $maxSize = 2 * 1024 * 1024;

    //получаем расширение загружаемого файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);

    $pathInfo = pathinfo($localFilename);

    if($ext != $pathInfo['extension']) return false;
    $newFileName = $pathInfo['filename'] . '_' . time() . '.' . $pathInfo['extension'];

    if($_FILES["filename"]["size"] > $maxSize) {
        return false;
    }

    $path = $_SERVER['DOCUMENT_ROOT'] . $localPath;

    if(!file_exists($path)){
        mkdir($path);
    }

    if(is_uploaded_file($_FILES['filename']['tmp_name'])){
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $path . $newFileName);
        return ($res == true) ? $newFileName : false;

    }else {
        return false;
    }
}


function loadFromXmlAction() {

    $successUploadFileName = uploadFile('import_products.xml', '/xml/import/');
    if (! $successUploadFileName) {
        echo 'Ошибка загрузки файла!';
        return;
    }

    $xmlFile = $_SERVER['DOCUMENT_ROOT']. '/xml/import/' . $successUploadFileName;
    $xmlProducts = simplexml_load_file($xmlFile);

    $products = array(); $i = 0;

    foreach($xmlProducts as $product) {
        $products[$i]['name'] = htmlentities($product->name);
        $products[$i]['category_id'] = intval($product->category_id);
        $products[$i]['description'] = htmlspecialchars_decode($product->description);
        $products[$i]['price'] = intval($product->price);
        $products[$i]['status'] = intval(($product->status));
        $i++;
    }

    $res = insertImportProducts($products);

    if($res){
        redirect('/admin/products/');
    }
}