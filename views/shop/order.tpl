{* Страница заказа*}

<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            {include file="leftcolumn.tpl"}
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <ul class="breadcrumb">

                    <li><a href="/">Домой</a> <span class="divider">/</span></li>
                    <li class="active">Заказ</li>

                </ul>


            <h2>Данные заказа</h2>
            <form id="frmOrder" action="/cart/saveorder/" method="POST">
                <table class="table table-bordered ">
                    <tr>
                        <th>№</th>
                        <th>Наименование</th>
                        <th>Количество</th>
                        <th>Цена за единицу</th>
                        <th>Стоимость</th>
                    </tr>
                    {foreach $rsProducts as $item  name=products}
                        <tr>
                            <td>{$smarty.foreach.products.iteration}</td>
                            <td><a href="/product/{$item['id']}/">{$item['name']}</a></td>
                            <td><span id="itemCnt_{$item['id']}">
                        <input type="hidden" name="itemCnt_{$item['id']}" value="{$item['cnt']}"/>
                                    {$item['cnt']}
                    </span>
                            </td>
                            <td>
                    <span id="itemPrice_{$item['id']}">
                        <input type="hidden" name="itemPrice_{$item['id']}" value="{$item['price']}"/>
                        {$item['price']}
                    </span>
                            </td>
                            <td>
                    <span id="itemRealPrice_{$item['id']}">
                        <input type="hidden" name="itemRealPrice_{$item['id']}" value="{$item['realPrice']}"/>
                        {$item['realPrice']}
                    </span>
                            </td>
                        </tr>
                    {/foreach}
                </table class="table table-bordered ">

                {if isset($arUser)}

                    {$buttonClass= ""}
                    <h2>Данные заказчика</h2>
                    <div id="orderUserInfoBox" {$buttonClass}>

                        {$name = $arUser['name']}
                        {$phone = $arUser['phone']}
                        {$address = $arUser['address']}

                        <table class="table table-bordered">
                            <tr>
                                <td>Имя*</td>
                                <td><input type="text" id="name" name="name" value="{$name}"/></td>
                            </tr>
                            <tr>
                                <td>Тел*</td>
                                <td><input type="text" id="phone" name="phone" value="{$phone}"/></td>
                            </tr>
                            <tr>
                                <td>Адрес*</td>
                                <td><textarea id="address" name="address">{$address}</textarea></td>
                            </tr>
                        </table>
                    </div>
                {else}
                    <div id="loginBox">
                        <div class="menuCaption">Авторизация</div>
                        <table>
                            <tr>
                                <td>Логин</td>
                                <td><input type="text" id="loginEmail" name="loginEmail" value=""/></td>
                            </tr>
                            <tr>
                                <td>Пароль</td>
                                <td><input type="password" id="loginPwd" name="loginPwd" value=""/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="btn btn-primary btn-md" type="button" onclick="login();" value="Войти"/></td>
                            </tr>
                        </table>
                    </div>
                    <div id="registerBox">или<br/>
                        <div class="menuCaption">Регистрация нового пользователя:</div>
                        email* :<br/>
                        <input type="text" id="email" name="email" value=""/><br/>
                        пароль* :<br/>
                        <input type="password" id="pwd1" name="pwd1" value=""/><br/>
                        повторить пароль* :<br/>
                        <input type="password" id="pwd2" name="pwd2" value=""/><br/>

                        Имя* : <input type="text" id="name" name="name" value=""/><br/>
                        Тел* : <input type="text" id="phone" name="phone" value=""/><br/>
                        Адрес* : <textarea id="address" name="address"></textarea><br/>

                        <input type="button" class="btn btn-primary btn-md" onclick="registerNewUser();" value="Зарегистрироваться"/>
                    </div>
                    {$buttonClass = "class='hideme'"}
                {/if}

                <input {$buttonClass} id="btnSaveOrder" type="submit" class="btn btn-primary btn-md" value="Оформить заказ" onclick="saveOrder();"/>
            </form>
        </div>
        </div>

</div>
</div>