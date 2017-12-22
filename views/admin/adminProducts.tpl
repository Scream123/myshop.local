
<div id="blockAddEditProduct">
    {*<div>{include file= 'adminleftcolumn.tpl'}</div>*}

    <h2>Товар</h2>


    <div class="container">


        <input class="btn btn-primary btn-md" type="button" onclick="createXML();" value="Сохранить в XML">
        <div id="xml-place"></div>

        <hr/>
        Импорт

        <form action="/admin/loadfromxml/" method="POST" enctype="multipart/form-data">
            <input type="file" " class="btn btn-file" name="filename"><br/>
            <input type="submit" class="btn btn-success btn-md" value="Загрузить"><br/>
        </form>


        <hr/>
        <div class="table table-responsive">
            <caption>Добавить продукт</caption>
            <table id="addTblProduct" class="table table-bordered  table-condensed" border="1" cellpadding="1"
                   cellspacing="1">
                <thead>
                <tr class="info">
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Категория</th>
                    <th>Описание</th>
                    <th>Сохранить</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <input class="form-control" type="edit" id="newItemName" value=""/>
                    </td>
                    <td>
                        <input class="form-control" type="edit" id="newItemPrice" value=""/>
                    </td>
                    <td>
                        <select class="form-control" id="newItemCatId">
                            <option value="0" disabled selected> Главная категория</option>
                            {foreach $rsCategories as $itemCat}

                            {if $itemCat['parent_id']}
                            <option value="{$itemCat['id']}">{$itemCat['name']}
                                {/if}
                                {/foreach}
                        </select>
                    </td>
                    <td>
                        <textarea class="form-control" id="newItemDesc"></textarea>
                    </td>
                    <td>
                        <input class="btn btn-primary btn-md" type="button" value="Добавить" onclick="addProduct();"/>
                    </td>
                </tr>
                </tbody>
            </table>

            <caption>Редактировать</caption>
            <table id="editTblProduct" class="table table-bordered table-condensed" border="1" cellpadding="1"
                   cellspacing="1">
                <thead>
                <tr class="info">
                    <th>№</th>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Категория</th>
                    <th>Описание</th>
                    <th>Скрыть</th>
                    <th>Изображение</th>
                    <th>Сохранить</th>
                    <th>Удалить</th>
                </tr>
                </thead>

                {foreach $rsProducts as $item name = products}
                <tbody class="tBody2">
                <tr id="tr2">
                    <td class="tdIter">{$smarty.foreach.products.iteration}</td>
                    <td id="itemId">{$item['id']}</td>
                    <td>

                        <input type="edit" class="form-control" id="itemName_{$item['id']}" value="{$item['name']}"/>

                    </td>
                    <td>
                        <input type="edit" class="form-control" id="itemPrice_{$item['id']}" value="{$item['price']}"/>
                    </td>

                    <td>

                        <select class="form-control" id="itemCatId_{$item['id']}" style="width:200px;">
                            <option value="0">Главная Категория</option>
                            {foreach $rsCategories as $itemCat}
                                <option value="{$itemCat['id']}"
                                        {if $item['category_id'] == $itemCat['id']}selected{/if}>
                                    {$itemCat['name']}
                                </option>
                            {/foreach}
                        </select>


                    </td>

                    <td>
                    <textarea class="form-control" rows="5" id="itemDesc_{$item['id']}">
                        {$item['description']}
                    </textarea>
                    </td>
                    <td>
                        <input type="checkbox" id="itemStatus_{$item['id']}"
                               {if $item['status'] == 0}checked="checked"{/if}/>
                    </td>
                    <td class="itemImg">
                        {if $item['image']}
                            <img src="/images/products/{$item['image']}" class="img-responsive " alt="Responsive image"
                                 width="100"/>
                        {/if}
                        <form action="/admin/upload/" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="custom-file" for="filename"></label>

                                <input type="file" class="btn btn-file" name="filename"
                                       accept="image/jpeg,image/png,image">

                                <input type="hidden" class="form-control" name="itemId" value="{$item['id']}">
                            </div>
                            <input type="submit" class="btn btn-success btn-md" value="Загрузить">
                        </form>
                    </td>
                    <td class="saveButton">
                        <input type="button" class="btn btn-primary btn-md" value="Сохранить"
                               onclick="updateProduct({$item['id']});"/>
                    </td class="delButton">
                    <td>
                        <input type="button" class="btn btn-danger btn-md" value="Удалить"
                               onclick="deleteProduct({$item['id']});"/>

                    </td>
                    {/foreach}
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>