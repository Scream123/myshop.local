<?php
/**
 * Модель для таблицы продукции (products)
 *
 */

/**
 * Получаем последние добавленные товары(показ товаров на главной странице)
 * (__) - сделан бэкап
 *
 * @param integer $limit Лимит товаров
 * @return array массив товаров
 */

function getLastProducts__($limit = null) {
    $sql = "SELECT * FROM `products`   WHERE `status` = 1  ORDER BY `id` DESC";
    if ($limit) {
        $sql .= " LIMIT {$limit}";
    }
    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}

//Получаем последние добавленные товары с пагинатором(показ товаров на главной странице)
function getLastProducts($offset = 1, $limit = 9) {

    $sqlCnt = "SELECT count(id) as cnt FROM `products` ";
    $rs = db()->query($sqlCnt);
    $cnt = createSmartyRsArray($rs);

    $sql = "SELECT * FROM `products` WHERE `status` = 1 ORDER BY id DESC";
    $sql .=  " LIMIT {$offset}, {$limit}";

    $rs = db()->query($sql);
    $rows = createSmartyRsArray($rs);

    return array($rows, $cnt[0]['cnt']);

}

/**
 * Получить продукты для категории $itemId
 *
 * @param integer $itemId ID категории
 * @return array массив продуктов
 */

function getProductsByCat($itemId) {

    $itemId = intval($itemId);
    $sql = "SELECT * FROM products WHERE  `category_id` = '{$itemId}' AND `status` = 1 ";

    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Получить данные продукта по ID
 *
 * @param integer $itemId ID продукта
 * @return array массив данных продукта
 */
function getProductById($itemId) {

    $itemId = intval($itemId);
    $sql = "SELECT * FROM `products` WHERE `id` = '{$itemId}'";
    $rs = db()->query($sql);

    return mysqli_fetch_assoc($rs);

}

/**
 * Получить список продуктов из массива идентификаторов (ID's)
 * 
 * @param array $itemsIds массив идентификаторов продукта
 * @return array массив данных продуктов
 */
function getProductsFromArray($itemsIds) {

    $strIds = implode($itemsIds, ', ');

    $sql = "SELECT * FROM `products` WHERE `id` in ({$strIds})";

    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}


function getProducts() {

    $sql = "SELECT * FROM `products` ORDER BY category_id";

    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Добавление нового товара
 * 
 * @param string $itemName Название продукта
 * @param integer $itemPrice Цена
 * @param string $itemDesc Описание
 * @param integer $itemCat ID категории
 * @return type
 */
function insertProduct($itemName, $itemPrice, $itemDesc, $itemCat) {
    $sql ="INSERT INTO products SET 
                                   `name`       = '{$itemName}',
                                   `price`       = '{$itemPrice}',
                                   `description` = '{$itemDesc}',
                                   `category_id` = '{$itemCat}'";

    $rs = db()->query($sql);
    return $rs;
}

/**
 * Удаление продукта
 *
 * @param $itemId ID продукта
 * @return bool|mysqli_result
 */
function deleteProduct($itemId) {
    $sql = "DELETE FROM `products` WHERE `id` = '{$itemId}'";

    $rs = db()->query($sql);
    return $rs;
}


/**
 *Обновление данных о продуктах
 */
function updateProduct($itemId, $itemName, $itemPrice, $itemStatus, $itemDesc, $itemCat, $newFileName = null) {
    $set = array();

    if($itemName) {
        $set[] = "`name` = '{$itemName}'";
    }

    if($itemPrice>0) {
        $set[] = "`price` = '{$itemPrice}'";
    }

    if ($itemStatus !== null) {
        $set[] = "`status` = '{$itemStatus}'";
    }

    if ($itemDesc) {
        $set[] = "`description` = '{$itemDesc}'";
    }
    if ($itemCat) {
        $set[] = "`category_id` = '{$itemCat}'";
    }
    if ($newFileName) {
        $set[] = "`image` = '{$newFileName}'";
    }

    $setStr = implode($set, ', ');
    $sql = "UPDATE products SET {$setStr}
            WHERE `id` = '{$itemId}'";

    $rs = db()->query($sql);

    return $rs;
}

function updateProductImage($itemId, $newFileName) {

    $rs = updateProduct($itemId, null, null, null, null, null, $newFileName);

    return $rs;
}


/**
 * Импорт XML файла
 * @param $aProducts
 * @return bool|string
 */
function insertImportProducts($aProducts) {
    if(! is_array($aProducts)) return false;

    $sql = "INSERT INTO products (`name`, `category_id`, `description`, `price`, `status`)
    VALUES ";

    $cnt = count($aProducts);
    for($i = 0; $i<$cnt; $i++) {
        if($i>0) $sql.= ', ';
        $sql.= "('" . implode("', '", $aProducts[$i]) . "')";

        $rs = db()->query($sql);
        return $sql;
    }
}

