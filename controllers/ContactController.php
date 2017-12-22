<?php
/**
 * Контакты
 */


function indexAction($smarty) {

    $smarty->assign('pageTitle', 'Контакты');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'contact');
    loadTemplate($smarty, 'footer');
}

function sendAction() {

    $name = trim(htmlspecialchars($_REQUEST['name']));
    $email = trim(htmlspecialchars($_REQUEST['email']));
    $subject = trim(htmlspecialchars($_REQUEST['subject']));
    $msg = trim(htmlspecialchars($_REQUEST['msg']));
    $headers = '';

    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Отправитель < $email >\r\n"; //Наименование и почта

    if ( (!empty($name)) && ( !empty($email)) && ( !empty($subject)) && ( !empty($msg))) {

        $to = 'fly_life@mail.ru';
        $message = "Имя: $name \nПочта: $email \nТема: $subject \nТекст: $msg";

        mail($to, $subject, $message, $headers);

    }
}
