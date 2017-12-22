{* Страница категории *}
<h1>Товары категории {$rsCategory['name']}</h1>

<div id="mainBody">
    <div class="container">
        <div class="row">
            {include file="leftcolumn.tpl"}
            <div class="span9">
                <div class="well well-small">
                    <h4>{$rsCategory['name']}</h4>
                </div>

                <ul class="thumbnails">

                    {if $rsProducts or $rsChildCats}


                    {foreach $rsProducts as $item name = products}
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="/product/{$item['id']}/">
                                <img src="/images/products/{$item['image']}" width="100"/>
                            </a>
                            <div class="caption">
                                <a href="/product/{$item['id']}/">{$item['name']}</a>
                                <h5>{$item['name']}</h5>

                                <h4 style="text-align:center"><a class="btn" href="/product/{$item['id']}/"><i class="icon-zoom-in" title="подробнее о товаре"></i></a>

                                    <a class="btn btn-primary" href="#">${$item['price']}</a></h4>
                            </div>
                        </div>
                    </li>

                    {if $smarty.foreach.products.iteration mod 3 == 0}
                    <div class="thumbnails_clr"></div>
                <ul class="thumbnails">
                    {/if}
                    {/foreach}
                    {else}
                    <h2 style="color:red">
                        <ins> Товаров нет!</ins>
                    </h2>
                    {/if}

                    {foreach $rsChildCats as $item name = childCats}
                        <h2><a href="/category/{$item['id']}/">{$item['name']}</a></h2>
                    {/foreach}
                </ul>





            </div>
        </div>
    </div>
</div>



