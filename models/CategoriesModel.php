<?php
/**
Модель для таблицы категорий(categories)
 */

/**
 * Получить главные категории с привязками дочерних
 *
 * @return array иассив категорий
 */
function getAllMainCatsWithChildren() {

    $sql = 'SELECT * FROM categories WHERE `parent_id` = 0';

    $rs = db()->query($sql);

    $smartyRs = array();
    while($row = mysqli_fetch_assoc($rs)) {

        $rsChildren = getChildrenForCat($row['id']);
        if ($rsChildren) {
            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
    }

    return $smartyRs;
}

/**
 *  Получить дочернии категории для категории $catId
 *
 * @param integer $catId ID категории
 *
 * @return array массив дочерних категорий
 */
function getChildrenForCat($catId) {
    $sql ="SELECT * FROM categories WHERE  parent_id = '{$catId}'";

    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Получить данные категории по id
 *
 * @param integer $catId ID категории
 * @return array массив - строка категории
 */
function getCatById($catId) {

    $catId = intval($catId);

    $sql = "SELECT * FROM `categories` WHERE `id` = '{$catId}'";

    $rs = db()->query($sql);

    return mysqli_fetch_assoc($rs);
}

/**
 * Получить все главные категории (категорий, которые не являются дочерними)
 * @return  array массив категорий
 */
function getAllMainCategories() {

    $sql = "SELECT * FROM categories WHERE parent_id = 0";

    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Добавление новой категории
 *
 * @param string $catName название категории
 * @param int $catParentId родительской категории
 * @return integer id новой категории
 */
function insertCat($catName, $catParentId = 0) {

    //готовим запрос
    $sql = "INSERT INTO categories (`parent_id`, `name`)
            VALUES ('{$catParentId}', '{$catName}')";
    db()->query($sql);
    $sql = "SELECT LAST_INSERT_ID()";

    //выполняем запрос
     $id = db()->query($sql);

    // получаем id добавленной записи
   // $id = db()->insert_id;
    //$id = mysqli_insert_id();
//d($id);die;
     return $id;
}

/**
 * Получить все категории
 *
 * @return array массив категорий
 */
function getAllCategories() {
    $sql = "SELECT * FROM categories ORDER BY parent_id ASC";

    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Обновление категории
 *
 * @param integer $itemId ID категории
 * @param integer $parentId ID главной категории
 * @param string $newName новое имя категории
 * @return type
 */
function updateCategoryData($itemId, $parentId = -1, $newName = '') {

    $set = array();

    if($newName) {
        $set[] = "`name` = '{$newName}'";
    }

    if($parentId > -1) {
        $set[] = "`parent_id` = '{$parentId}'";
    }

    $setStr = implode($set, ', ');
    $sql = "UPDATE categories SET {$setStr} WHERE  id = '{$itemId}'";

    $rs = db()->query($sql);

    return $rs;
}

/**
 * Выборка дочерних категорий для селекта со страницы /admin/products
 * @return array массив подкатегорий
 */
function getChildCategory(){
    $sql = "SELECT * FROM `categories` WHERE `parent_id` > 0";

    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}
