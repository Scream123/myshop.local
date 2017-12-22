<div id="tblCat" class="container responsive">
<h2>Категории</h2>

    <table  class="table table-bordered table-hover" border="1"  cellpadding="1" cellspacing="1">
        <thead>
        <tr class="active">
            <th>№</th>
            <th>ID</th>
            <th>Название</th>
            <th>Родительская категория</th>
            <th>Действие</th>
        </tr>
        </thead>
        {foreach $rsCategories as $item name = categories}
            <tbody>
            <tr>
                <td>{$smarty.foreach.categories.iteration}</td>
                <td>{$item['id']}</td>
                <td>
                    <input type="edit" class="form-control" id="itemName_{$item['id']}" value="{$item['name']}"/>
                </td>
                <td>
                    <select class="form-control" id="parentId_{$item['id']}">
                        <option value="0">Главная категория</option>
                        {foreach $rsMainCategories as $mainItem}
                            <option value="{$mainItem['id']}" {if $item['parent_id'] == $mainItem['id']} selected{/if}>
                                {$mainItem['name']}
                            </option>
                        {/foreach}
                    </select>
                </td>
                <td>
                    <input type="button" class="btn btn-primary btn-sm" value="Сохранить" onclick="updateCat({$item['id']});"/>
                </td>
            </tr>
            </tbody>
        {/foreach}
    </table>
</div>