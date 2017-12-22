{* Шаблон корзины *}


<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            {include file="leftcolumn.tpl"}
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="/">Домой</a> <span class="divider">/</span></li>
                    <li class="active">Корзина</li>
                </ul>
                <h3> Корзина[ <small>{$cartCntItems} товар(а/ов) </small>]<a href="/" class="btn btn-md btn-warning pull-right"><i class="icon-arrow-left"></i>Продолжить покупку  </a></h3>
                <hr class="soft"/>
                {if !$rsProducts}
                В корзине пусто.
                {else}
                <form action="/cart/order/" method="POST">
                    <caption>Данные заказа</caption>
                    <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Наименование</th>
                        <th>Количество</th>
                        <th>Цена за единицу</th>
                        <th>Цена</th>
                        <th>Действие</th>

                    </tr>
                    </thead>
                    <tbody>
                    {foreach $rsProducts as $item name=products}
                    <tr>
                        <td>
                            {$smarty.foreach.products.iteration}
                        </td>
                        <td>
                            <a href="/product/{$item['id']}/">{$item['name']}</a>
                        </td>
                        <td>
                            <div id="inputBlock" class="input-append">
                                <button id="minus" class="btn btn-md" type="button" ><i class="icon-minus"></i></button>

                                <input name="itemCnt_{$item['id']}" class="span1"  style="max-width:34px" id="itemCnt_{$item['id']}" type="text" value="1" onchange="conversionPrice({$item['id']});"/>

                                <button id="plus"  class="btn btn-md" type="button" ><i class="icon-plus"></i></button>

                            </div>
                        </td>
                        <td>
                              <span id="itemPrice_{$item['id']}" value="{$item['price']}">
                                {$item['price']}
                            </span>
                        </td>
                        <td>
                                <span id="itemRealPrice_{$item['id']}">
                                    {$item['price']}
                                 </span>
                        </td>
                        <td>
                           <span id="addCart_{$item['id']}" class="hideme" href="#" onclick="addToCart({$item['id']}); return false;" title="Восстановить элемент"><button class="btn btn-md" type="button"><i class="icon-plus"></i></button></span>

                            <button id="removeCart_{$item['id']}" href="#" onclick="removeFromCart({$item['id']});return false;" title="Удалить из корзины"   class="btn btn-danger btn-md" type="button"><i class="icon-remove icon-white"></i>Удалить</button>

                        </td>

                    </tr>




                    </tbody>
                        {/foreach}
                </table>
                    <input type="submit" class="btn btn-primary btn-md" value="Оформить заказ"/>
                </form>

                {/if}





                <a href="/" class="btn btn-md btn-warning"><i class="icon-arrow-left"></i>Продолжить покупку </a>


            </div>
        </div>
    </div>
</div>