

<!-- Footer ================================================================== -->
<div  id="footerSection">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h5>АККАУНТ</h5>
                <a href="/user/">ВАШ АККАУКНТ</a>
                <a href="/user/">ЛИЧНАЯ ИНФОРМАЦИЯ</a>
                <a href="/contact/">АДРЕС</a>
                <a href="login.html">СКИДКА</a>
               <div  id="orderHistory" class="hideme"><a href="/admin/orders/">ИСТОРИЯ ЗАКАЗОВ</a></div>
                {if ($arUser['admin']==1)}
                <div id="orderHistory"><a href="/admin/orders/" id="orderHistory">ИСТОРИЯ ЗАКАЗОВ</a></div>

                {/if}



            </div>
            <div class="span3">
                <h5>ИНФОРМАЦИЯ</h5>
                <a href="/contact/">КОНТАКТЫ</a>
                {if !isset($arUser)}
                    <div id="registerFooter"><a href="/register/">РЕГИСТРАЦИЯ</a></div>
                {/if}
                {if isset($arUser)}
                    <div id="registerFooter"  class="hideme"><a href="/register/">РЕГИСТРАЦИЯ</a></div>
                {/if}

                <a href="legal_notice.html">ПРАВОВАЯ ИНФОРМАЦИЯ</a>
                <a href="tac.html">ПОЛОЖЕНИЯ И УСЛОВИЯ</a>
                <a href="/support/kb/">FAQ</a>
            </div>
            <div class="span3">
                <h5>НАШИ ПРЕДЛОЖЕНИЯ</h5>
                <a href="#">НОВЫЕ ПРОДУКТЫ</a>
                <a href="#">ЛУЧШИЕ ПРОДАВЦЫ</a>
                <a href="special_offer.html">СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ</a>
                <a href="#">ПРОИЗВОДИТЕЛИ</a>
                <a href="#">ПОСТАВЩИКИ</a>
            </div>
            <div id="socialMedia" class="span3 pull-right">
                <h5>СОЦИАЛЬНЫЕ СЕТИ </h5>
                <a href="http://www.facebook.com/sharer.php?p[url]=http://myshop.local/" target="_blank"><img width="60" height="60" src="{$teplateWebPath}themes/images/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="http://twitter.com/share?url=http://myshop.local/" target="_blank""><img width="60" height="60" src="{$teplateWebPath}themes/images/twitter.png" title="twitter" alt="twitter"/></a>
                <a href="http://www.youtube.com/embed/share.php?url=http://myshop.local/" target="_blank""><img width="60" height="60" src="{$teplateWebPath}themes/images/youtube.png" title="youtube" alt="vk"/></a>
                {*<a href="https://vk.com/share.php?url=http://myshop.local/"><img width="60" height="60" src="{$teplateWebPath}themes/images/vk.png" title="Vk" alt="Vk"/></a>*}
            </div>
        </div>
        <p class="pull-right">&copy; Bootshop</p>
    </div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="{$teplateWebPath}themes/js/jquery.js" type="text/javascript"></script>ми43ии4
<script src="{$teplateWebPath}themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{$teplateWebPath}themes/js/google-code-prettify/prettify.js"></script>

<script src="{$teplateWebPath}themes/js/bootshop.js"></script>
<script src="{$teplateWebPath}themes/js/jquery.lightbox-0.5.js"></script>

<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
    <link rel="stylesheet" href="{$teplateWebPath}themes/switch/themeswitch.css" type="text/css" media="screen" />

    <script src="{$teplateWebPath}themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
    <div id="themeContainer">
        <div id="hideme" class="themeTitle">Style Selector</div>
        <div class="themeName">Oregional Skin</div>
        <div class="images style">
            <a href="{$teplateWebPath}themes/css/#" name="bootshop"><img src="{$teplateWebPath}themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
            <a href="{$teplateWebPath}themes/css/#" name="businessltd"><img src="{$teplateWebPath}themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
        </div>
        <div class="themeName">Bootswatch Skins (11)</div>
        <div class="images style">
            <a href="{$teplateWebPath}themes/css/#" name="amelia" title="Amelia"><img src="{$teplateWebPath}themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="spruce" title="Spruce"><img src="{$teplateWebPath}themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
            <a href="{$teplateWebPath}themes/css/#" name="superhero" title="Superhero"><img src="{$teplateWebPath}themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="cyborg"><img src="{$teplateWebPath}themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="cerulean"><img src="{$teplateWebPath}themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="journal"><img src="{$teplateWebPath}themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="readable"><img src="{$teplateWebPath}themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="simplex"><img src="{$teplateWebPath}themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="slate"><img src="{$teplateWebPath}themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="spacelab"><img src="{$teplateWebPath}themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="united"><img src="{$teplateWebPath}themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
            <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
        </div>
        <div class="themeName">Background Patterns </div>
        <div class="images patterns">
            <a href="{$teplateWebPath}themes/css/#" name="pattern1"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern2"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern3"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern4"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern5"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern6"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern7"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern8"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern9"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern10"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>

            <a href="{$teplateWebPath}themes/css/#" name="pattern11"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern12"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern13"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern14"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern15"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>

            <a href="{$teplateWebPath}themes/css/#" name="pattern16"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern17"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern18"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern19"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
            <a href="{$teplateWebPath}themes/css/#" name="pattern20"><img src="{$teplateWebPath}themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>

        </div>
    </div>
</div>
{*<span id="themesBtn"></span>*}
</body>
</html>