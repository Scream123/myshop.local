{*левый столбец*}
<div id="leftColumn">
    <div id="leftMenu">

        <div class="menuCaption">Меню:</div>
        <div id="admin-panel" class="hideme">
            <a href="/admin/">Админ-панель</a><br/>
        </div>
        {if $arUser['admin'] == 1}
        <a href="/admin/" id="admin-panel">Админ-панель</a><br/>
        {/if}

        <a href="/">Главная</a><br/>
       {foreach $rsCategories as $item}
           <!--<a href="/?controller=category&id={*$item['id']*}">{*$item['name']*}</a><br/>-->
           <a href="/category/{$item['id']}/">{$item['name']}</a><br/>

           {if isset($item['children'])}
                {foreach $item['children'] as $itemChild}
                    <!-- --<a href="/?controller=category&id={*$itemChild['id']*}">{*$itemChild['name']*}</a><br/>-->
                    --<a href="/category/{$itemChild['id']}/">{$itemChild['name']}</a><br/>

                {/foreach}
           {/if}
       {/foreach}
    </div>

    <!-- Проверка, залогинен ли -->
    {if isset($arUser)}
        <div id="userBox">
            <a href="/user/" id="userLink">{$arUser['displayName']}</a><br/>
            <a href="/user/logout/" onclick="logout();">Выход</a>
        </div>

    {else}

        <div id="userBox" class="hideme">
            <a href="#" id="userLink"></a><br/>
            <a  id="redirect" href="/user/logout/" onclick="logout();" >Выход</a>
        </div>
        {if !isset($hideLoginBox)}
            <div id="loginBox">
                <div class="menuCaption">Авторизация</div>
                    email:<br/>
                    <input type="text " id="loginEmail" name="loginEmail" value=""/><br/>
                    пароль:<br/>
                    <input type="password" id="loginPwd" name="loginPwd" value=""/><br/>
                    <input type="button" onclick="login();" value="Войти"/>
             </div>

            <div id="registerBox">
                <div class="menuCaption showHidden" onclick="showRegisterBox()">Регистрация</div>
                <div id="registerBoxHidden">
                    email:<br/>
                    <input type="text" id="email" name="email" value=""/><br/>
                    пароль:<br/>
                    <input type="password" id="pwd1" name="pwd1" value=""/><br/>
                    повторить пароль:<br/>
                    <input type="password" id="pwd2" name="pwd2" value=""/><br/>
                    <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/><br/>

                </div>
             </div>
        {/if}

    {/if}

        <div lass="menuCaption">Корзина</div>
            <a href="/cart/" title="Перейти в корзину">В корзине</a>
            <span id="cartCntItems">
            {if $cartCntItems > 0} {$cartCntItems}{else}пусто{/if}
            </span>
</div>