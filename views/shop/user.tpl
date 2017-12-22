{* Страница пользователя*}

<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            {include file="leftcolumn.tpl"}
            <!-- Sidebar end=============================================== -->
            <div class="span9">

                <h1>Ваши регистрационные данные:</h1>
                {*<table border="0">*}

                {*<tr>*}
                {*<td>Логин (email)</td>*}
                {*<td>{$arUser['email']}</td>*}
                {*</tr>*}
                {*<tr>*}
                {*<td>Имя</td>*}
                {*<td><input type="text" id="newName" value="{$arUser['name']}"/></td>*}
                {*</tr>*}
                {*<tr>*}
                {*<td>Тел</td>*}
                {*<td><input type="text" id="newPhone" value="{$arUser['phone']}"/></td>*}
                {*</tr>*}
                {*<tr>*}
                {*<td>Адрес</td>*}
                {*<td><textarea id="newAddress">{$arUser['address']}</textarea></td>*}
                {*</tr>*}
                {*<tr>*}
                {*<td>Новый пароль</td>*}
                {*<td><input type="password" id="newPwd1" value=""/></td>*}
                {*</tr>*}
                {*<tr>*}
                {*<td>повтор пароля</td>*}
                {*<td><input type="password" id="newPwd2" value=""/></td>*}
                {*</tr>*}
                {*<tr>*}
                {*<td>Для того чтобы сохранить данные введите текущий пароль</td>*}
                {*<td><input type="password" id="curPwd" value=""/></td>*}
                {*</tr>*}
                {*<tr>*}
                {*<td>&nbsp;</td>*}
                {*<td><input type="button" value="Сохранить изменения" onclick="updateUserData();"/></td>*}
                {*</tr>*}
                {*</table>*}

                <div class="container">
                    <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-md-2" for="defaultLogin">Логин(email)</label>
                            <div class="col-md-4">
                                <input type="text" id="defaultLogin" class="form-control" value="{$arUser['email']}"
                                       disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="newName">Имя</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="newName" value="{$arUser['name']}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="newPhone">Тел</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="newPhone" value="{$arUser['phone']}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="newAddress">Адрес</label>
                            <div class="col-md-4">
                                <textarea class="form-control" id="newAddress">{$arUser['address']}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="newPwd1">Новый пароль</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" id="newPwd1" value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="newPwd2">Повтор пароля</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" id="newPwd2" value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="curPwd">Текущий пароль</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" id="curPwd" value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">&nbsp;</label>
                            <div class="col-md-4">
                                <input type="button" class="btn btn-primary btn-md" value="Сохранить изменения"
                                       onclick="updateUserData();"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table table-responsive">
                <caption>Заказы:</caption>
                {if !$rsUserOrders}
                    Нет заказов
                {else}
                    <table class="table table-bordered table-condensed" cellpadding="1" cellspacing="1">
                        <thead >
                        <tr class="danger">
                            <th>№</th>
                            <th>Действие</th>
                            <th>ID заказа</th>
                            <th>Статус</th>
                            <th>Дата создания</th>
                            <th>Дата оплаты</th>
                            <th>Дополнительная информация</th>
                        </tr>
                        </thead>

                        {foreach $rsUserOrders as $item name= orders}
                            <tbody>
                            <tr>
                                <td>{$smarty.foreach.orders.iteration}</td>
                                <td><a href="#" onclick="showProducts('{$item['id']}'); return false">Показать товар
                                        заказа</a></td>
                                <td>{$item['id']}</td>

                                <td>
                                    {if $item['status'] == 1}
                                        Заказ оплачен
                                    {else}
                                        Заказ не оплачен
                                    {/if}
                                </td>
                                <td>{$item['date_created']}</td>
                                <td>{$item['date_payment']}&nbsp;</td>
                                <td>{$item['comment']}</td>
                            </tr>
                            </tbody>
                            <tr class="hideme" id="purchasesForOrderId_{$item['id']}">
                                <td colspan="7">
                                    {if $item['children']}
                                        <table class="table table-bordered   table-condensed" cellpadding="1"
                                               cellspacing="1" width="100%">
                                            <thead>
                                            <tr>
                                                <th>№</th>
                                                <th>ID</th>
                                                <th>Название</th>
                                                <th>Цена</th>
                                                <th>Количество</th>
                                            </tr>
                                            </thead>
                                            {foreach $item['children'] as $itemChild name = products}
                                                <tbody>
                                                <tr class="success">
                                                    <td>{$smarty.foreach.products.iteration}</td>
                                                    <td>{$itemChild['product_id']}</td>
                                                    <td>
                                                        <a href="/product/{$itemChild['product_id']}/">{$itemChild['name']}</a>
                                                    </td>
                                                    <td>{$itemChild['price']}</td>
                                                    <td>{$itemChild['amount']}</td>
                                                </tr>
                                                </tbody>
                                            {/foreach}
                                        </table>
                                    {/if}
                                </td>

                            </tr>
                        {/foreach}
                    </table>
                    </div>
                {/if}
            </div>
        </div>
    </div>
</div>