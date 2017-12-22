

<!--carouselBlk-->
<div id="carouselBlk">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <a href="register.tpl"><img style="width:800px" src="{$teplateWebPath}images/products/akcia1.png" alt="Специальные предложения"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.tpl"><img style="width:800px" src="{$teplateWebPath}images/products/akcia2.jpg" alt="Специальные предложения"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.tpl"><img style="width:800px" src="{$teplateWebPath}images/products/akcia3.png" alt="Специальные предложения"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.tpl"><img style="width:800px"  src="{$teplateWebPath}images/products/akcia4.jpg" alt="Специальные предложения"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>

        </div>          <div class="item">
                <div class="container">
                    <a href="register.tpl"><img style="width:800px"  src="{$teplateWebPath}images/products/akcia5.jpg" alt="Специальные предложения"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>

        </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
<!--carouselBlk End-->



<!--mainBody-->
<div id="mainBody">
    <div class="container">
        <div class="row">

          {include file="leftcolumn.tpl"}



            <div class="span9">
                {*<div class="well well-small">*}
                    {*<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>*}

                    {*<div class="row-fluid">*}


                        {*<div id="featured" class="carousel slide">*}

                            {*<div class="carousel-inner">*}

                                {*<div class="item active">*}
                                    {*<ul class="thumbnails">*}

                                        {*{foreach $rsProducts as $item name=products}*}

                                        {*<li class="span3">*}

                                            {*<div class="thumbnail">*}

                                                {*<i class="tag"></i>*}

                                                {*<a href="/product/{$item['id']}/"><img src="/images/products/{$item['image']}" alt=""></a>*}
                                                {*<div class="caption">*}
                                                    {*<h5>{$item['name']}</h5>*}
                                                    {*<h4><a class="btn" href="/product/{$item['id']}/">VIEW</a> <span class="pull-right">$222.00</span></h4>*}

                                                {*</div>*}

                                                {*</div>*}

                                        {*</li>*}
                                      {**}
                                        {*{/foreach}*}

                                    {*</ul>*}
                              {**}

                                {*</div>*}


                                {*<div class="item">*}
                                    {*<ul class="thumbnails">*}
                                        {*{foreach $rsProducts as $item name=products}*}
                                        {*<li class="span3">*}
                                            {*<div class="thumbnail">*}
                                                {*<a href="/product/{$item['id']}/"><img src="/images/products/{$item['image']}" width="100" alt=""></a>*}
                                                {*<div class="caption">*}
                                                    {*<h5>{$item['name']}</h5>*}
                                                    {*<h4><a class="btn" href="/product/{$item['id']}">VIEW</a> <span class="pull-right">$222.00</span></h4>*}
                                                {*</div>*}


                                            {*</div>*}
                                        {*</li>*}
                                        {*{/foreach}*}
                                    {*</ul>*}

                                {*</div>*}
                                {*</div>*}


                            {*<a class="left carousel-control" href="#featured" data-slide="prev">‹</a>*}
                            {*<a class="right carousel-control" href="#featured" data-slide="next">›</a>*}

                        {*</div>*}

                    {*</div>*}


                {*</div>*}
                <div class="well well-small"> <h4>Последние товары</h4></div>
                <ul class="thumbnails">

                    {foreach $rsProducts as $item name=products}
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="/product/{$item['id']}/"><img src="/images/products/{$item['image']}" width="100" alt=""/></a>
                            <div class="caption">
                                <h5>{$item['name']}</h5>
                                <h4 style="text-align:center"><a class="btn" href="/product/{$item['id']}/"><i class="icon-zoom-in" title="подробнее о товаре"></i></a>
                                <span  id="addCart_{$rsProduct['id']}" {if $itemInCart}class="hideme"  {/if} href="#" onclick="addToCart({$rsProduct['id']}); return false;" >
                                    <button type="submit"  class="btn" href="#">Добавить <i class="icon-shopping-cart"></i></button>
                                </span>
                                 <span id="removeCart_{$rsProduct['id']}" href="#" {if !$itemInCart}class="hideme"{/if} onclick="removeFromCart({$rsProduct['id']});return false;">
                                     <button type="submit"  class="btn" href="#">Удалить <i class="icon-shopping-cart"></i></button>
                                 </span>


                                    <a class="btn btn-primary" href="#">${$item['price']}</a></h4>
                            </div>
                        </div>
                    </li>
                        {if $smarty.foreach.products.iteration mod 3 == 0}
                            <div class="thumbnails_clr"></div>
                        </ul>
                <ul class="thumbnails">
                        {/if}
                    {/foreach}
                </ul>
                <ul class="pagination">

                    <li>
                    {if $paginator['currentPage'] != 1}
                        <a  href="{$paginator['link']}{$paginator['currentPage']-1}">&laquo;</a>
                    {/if}
                    </li>

                        <li class="active"><span>{$paginator['currentPage']}</span></li>

                    {if $paginator['currentPage'] < $paginator['pageCnt']}
                        <li><a href="{$paginator['link']}{$paginator['currentPage']+1}">&raquo;</a></li>
                    {/if}



                </ul>


</div
        </div>
    </div>

</div>

<!--mainBody End-->





