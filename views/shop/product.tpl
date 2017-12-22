{* Страница продукта *}


<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->


{include file="leftcolumn.tpl"}

            <!-- Sidebar end=============================================== -->

            {*<!-- MainBody ============================= -->*}
            <div class="span9">
                <ul class="breadcrumb">

                    <li><a href="/">Домой</a> <span class="divider">/</span></li>
                    <li class="active">Информация о товаре</li>

                </ul>

                <div class="row">
                    <div id="gallery" class="span3" style="width: 150px">
                        <a href="/images/products/{$rsProduct['image']}" title="{$rsProduct['name']}">
                            <img  id="img" src="/images/products/{$rsProduct['image']}" style="width:100%" alt="{$rsProduct['name']}" />
                            <i class="icon-zoom-in"></i>
                        </a>
                        <small>Клик чтобы увеличить</small>

                    </div>
                    <div class="span6">
                        <h3>{$rsProduct['name']}</h3>

                        <hr class="soft"/>
                        <form class="form-horizontal qtyFrm">
                            <div class="control-group">
                                <label class="control-label"><span>Стоимость: {$rsProduct['price']}</span></label>
                                <div class="controls">
                                    <input type="number" class="span1" placeholder="Кол."/>

                            <span  id="addCart_{$rsProduct['id']}" {if $itemInCart}class="hideme"  {/if} href="#" onclick="addToCart({$rsProduct['id']}); return false;" >
                                <button type="submit" class="btn btn-large btn-primary pull-right">  Добавить в корзину <i class=" icon-shopping-cart"></i></button>
                            </span>
                            <span id="removeCart_{$rsProduct['id']}" href="#" {if !$itemInCart}class="hideme"{/if} onclick="removeFromCart({$rsProduct['id']});return false;">
                                <button type="submit"   class="btn btn-large btn-primary pull-right">Удалить из корзины<i class=" icon-shopping-cart"></i></button>
                            </span>

                                </div>




                            </div>
                        </form>

                        <hr class="soft clr"/>

                        <a class="btn btn-small pull-right" href="#detail">Подробности</a>
                        <br class="clr"/>
                        <a href="#" name="detail"></a>
                        <hr class="soft"/>
                    </div>

                    <div class="span9">
                        <ul id="productDetail" class="nav nav-tabs">
                            <li id="detail" class="active"><a href="#home" data-toggle="tab">
                                    информация о товаре</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <h4>Описание</h4>
                                <p>
                                    {$rsProduct['description']}
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> </div>
</div>
<!-- MainBody End ============================= -->
