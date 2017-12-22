<!-- Sidebar ================================================== -->

<div id="sidebar" class="span3">
    <div class="well well-small menuCaption"><a id="myCart" href="/cart/"><img src="{$teplateWebPath}themes/images/ico-cart.png" alt="cart" title="Перейти в корзину">
            В корзине<span id="cartCntItems">
            {if $cartCntItems > 0} {$cartCntItems}{else}пусто{/if}
            </span></a>
    </div>
    <ul id="sideManu" class="nav nav-tabs nav-stacked">
        <li class="subMenu open"><a>Меню</a>
            <ul>
                <li id="admin-panel" class="hideme">
                    <a class="active" href="/admin/" style="color: green;">Админ-панель</a>
                </li>
                {if $arUser['admin'] == 1}
                    <li class="active"><a href="/admin/" id="admin-panel" style="color: green;"><i class=" icon-heart"></i>Админ-панель</a></li>
                {/if}
                <li class="active"><a href="/"><i class="icon-home icon-white" ></i> Домой</a></li>

                {foreach $rsCategories as $item}
                <li><a class="active" href="/category/{$item['id']}/"><i class="icon-chevron-right"></i>{$item['name']}</a></li>
                    {if isset($item['children'])}
                        {foreach $item['children'] as $itemChild}
                <li><a href="/category/{$itemChild['id']}/"><i class="icon-chevron-right"></i>{$itemChild['name']}</a></li>
                        {/foreach}
                    {/if}
                {/foreach}
            </ul>
        </li>


    </ul>
    <br/>
    <!-- Проверка, залогинен ли -->
    {if isset($arUser)}
        <ul class="nav nav-tabs nav-stacked" id="userBox">

            <li class="badge badge-info"><a href="/user/" id="userLink"> <i class="icon-user"></i>{$arUser['displayName']}</a></li>
            <li class="badge badge-inverse"><a href="/user/logout/" onclick="logout();"><i class="icon-off"></i>Выход</a></li>

        </ul>

    {else}

        <ul id="userBox" class="nav nav-tabs nav-stacked hideme">
            <li class="badge badge-info"><a href="#" id="userLink"></a></li>
            <li class="badge badge-inverse"><a  id="redirect" href="/user/logout/" onclick="logout();" ><i class="icon-off"></i>Выход</a></li>
        </ul>
    {/if}<br/>

    <div class="thumbnail" >
        <img src="{$teplateWebPath}images/products/rek.jpg" alt="Реклама" />

    </div>
    <div class="thumbnail" >
        <img src="{$teplateWebPath}images/products/rek2.jpg" alt="Реклама" />

    </div>

    {*<div class="thumbnail">*}
        {*<img src="{$teplateWebPath}themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">*}
        {*<div class="caption">*}
            {*<h5>Payment Methods</h5>*}
        {*</div>*}
    {*</div>*}
</div>

<!-- Sidebar end=============================================== -->