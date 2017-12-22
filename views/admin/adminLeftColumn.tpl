{* левый столбец *}

{if $arUser['admin'] == 1}

    <div id="leftColumnAdmin" >


        <div id="leftMenuAdmin">
            <div class="menuCaption">Меню:</div>
            <a href="/admin/">Админ-Панель</a><br/>
            <a href="/"><i class="icon-home icon-white" ></i>Главная</a><br/>
            <a href="/admin/category/">Категории</a><br/>
            <a href="/admin/products/">Товар</a><br/>
            <a href="/admin/orders/">Заказы</a>
        </div>
        <div id="adminBox">
            <a href="/user/" id="adminLink">{$arUser['displayName']}</a><br/>
            <a href="/admin/logoutforadmin/" onclick="logoutForAdmin();">Выход</a>
        </div>
        <div lass="menuCaption">Корзина</div>
        <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            {if $cartCntItems > 0} {$cartCntItems}{else}пусто{/if}
            </span>


    </div>
{/if}
<div id="leftColumnAdmin" class="hideme">


<div id="leftMenuAdmin">
    <div class="menuCaption">Меню:</div>
        <a href="/admin/">Админ-Панель</a><br/>
        <a href="/">Главная</a><br/>
        <a href="/admin/category/">Категории</a><br/>
        <a href="/admin/products/">Товар</a><br/>
        <a href="/admin/orders/">Заказы</a>
</div>
    <div id="adminBox">
        <a href="/user/" id="adminLink">{$arUser['displayName']}</a><br/>
        <a href="/admin/logoutforadmin/" onclick="logoutForAdmin();">Выход</a>
    </div>
        <div lass="menuCaption">Корзина</div>
        <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            {if $cartCntItems > 0} {$cartCntItems}{else}пусто{/if}
            </span>


</div>



    <!-- Проверка, залогинен ли -->
    {*{if ($arUser['admin']==1)}*}
        {*<div id="adminBox">*}
            {*<a href="/admin/" id="adminLink">{$arAdmin['displayName']}</a><br/>*}
            {*<a href="/admin/logoutforadmin/" onclick="logoutForAdmin();">Выход</a>*}
        {*</div>*}

    {*{else}*}

        {*<div id="adminBox" class="hideme">*}
            {*<a href="#" id="adminLink"></a><br/>*}
            {*<a  id="redirect" href="/admin/logoutforadmin/" onclick="logoutForAdmin();" >Выход</a>*}
        {*</div>*}
        {*{if !isset($hideLoginBox)}*}
            {*<div id="loginBox">*}
                {*<div class="menuCaption">Авторизация</div>*}
                {*email:<br/>*}
                {*<input type="text" id="loginEmails" name="loginEmail" value=""/><br/>*}
                {*пароль:<br/>*}
                {*<input type="password" id="loginPwds" name="loginPwd" value=""/><br/>*}
                {*<input type="button" onclick="loginAdmin();" value="Войти"/>*}
            {*</div>*}

            {*<div id="registerBox">*}
                {*<div class="menuCaption showHidden" onclick="showRegisterBoxAdmin()">Регистрация</div>*}
                {*<div id="registerBoxHidden">*}
                    {*email:<br/>*}
                    {*<input type="text" id="email" name="email" value=""/><br/>*}
                    {*пароль:<br/>*}
                    {*<input type="password" id="pwd1" name="pwd1" value=""/><br/>*}
                    {*повторить пароль:<br/>*}
                    {*<input type="password" id="pwd2" name="pwd2" value=""/><br/>*}
                    {*<input type="button" onclick="registerNewAdmin();" value="Зарегистрироваться"/><br/>*}

                {*</div>*}
            {*</div>*}
        {*{/if}*}

    {*{/if}*}







