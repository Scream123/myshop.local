<?php
/**
 * Основные функции
 */

/**
 * Формирование запрашиваемой страницы
 *
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 */

function loadPage($smarty, $controllerName, $actionName = 'index') {

    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * Загрузка шаблона
 *
 * @param object $smarty объект шаблонизатора
 * @param string $templateName название файла шаблонизатора
 */
function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName .TemplatePostFix);
}

/**
 * Функция отладки. Останавливает работу программы выводя значение переменной
 * $value
 *
 * @param variant $value переменная для вывода ее на страницу
 */

function d($value = null, $die = 1) {
    //    echo 'Debug: <br/><pre>';
    //    print_r($value);
    //    echo '</pre>';
    //    if($die) die;
    function debugOut($a){
        echo '<br/><b>'. basename($a['file']). '</b>'
            ."&nbsp;<font color='red'>({$a['line']})</font>"
            ."&nbsp;<font color='green'>({$a['function']})()</font>"
            ."&nbsp; -- ". dirname($a['file']);

    }
    echo '<pre>';
    $trace = debug_backtrace();
    array_walk($trace , 'debugOut');
    echo "\n\n";
    var_dump($value);
    echo '</pre>';
    if($die) die;
}

/**
 * Преобразование результата работы функции выборки в ассоциативный массив
 *
 * @param  recordset $rs набор строк - результат работы $SELECT
 * @return array
 */
function createSmartyRsArray($rs) {

    if (!$rs) return false;
        $smartyRs = array();
    while($row = mysqli_fetch_assoc($rs))

        $smartyRs[] = $row;

    return $smartyRs;
}

/**
 * Редирект
 *
 * @param string $url адрес для перенаправления
 */
function redirect($url) {

    if(!$url) $url = '/';
    header("Location: {$url}");
    exit;
}