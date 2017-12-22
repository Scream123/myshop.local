<?php /* Smarty version Smarty-3.1.6, created on 2017-12-03 22:19:10
         compiled from "../views/shop\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2521559f7393c488280-42102480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '888e50cea467ea9cea7162e809f70b1ff36d920d' => 
    array (
      0 => '../views/shop\\footer.tpl',
      1 => 1512328748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2521559f7393c488280-42102480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f7393c683f8',
  'variables' => 
  array (
    'arUser' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f7393c683f8')) {function content_59f7393c683f8($_smarty_tpl) {?>

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
                <?php if (($_smarty_tpl->tpl_vars['arUser']->value['admin']==1)){?>
                <div id="orderHistory"><a href="/admin/orders/" id="orderHistory">ИСТОРИЯ ЗАКАЗОВ</a></div>

                <?php }?>



            </div>
            <div class="span3">
                <h5>ИНФОРМАЦИЯ</h5>
                <a href="/contact/">КОНТАКТЫ</a>
                <?php if (!isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
                    <div id="registerFooter"><a href="/register/">РЕГИСТРАЦИЯ</a></div>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
                    <div id="registerFooter"  class="hideme"><a href="/register/">РЕГИСТРАЦИЯ</a></div>
                <?php }?>

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
                <a href="http://www.facebook.com/sharer.php?p[url]=http://myshop.local/" target="_blank"><img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="http://twitter.com/share?url=http://myshop.local/" target="_blank""><img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/twitter.png" title="twitter" alt="twitter"/></a>
                <a href="http://www.youtube.com/embed/share.php?url=http://myshop.local/" target="_blank""><img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/youtube.png" title="youtube" alt="vk"/></a>
            </div>
        </div>
        <p class="pull-right">&copy; Bootshop</p>
    </div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/js/jquery.js" type="text/javascript"></script>ми43ии4
<script src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/js/google-code-prettify/prettify.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/js/bootshop.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/js/jquery.lightbox-0.5.js"></script>

<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/themeswitch.css" type="text/css" media="screen" />

    <script src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
    <div id="themeContainer">
        <div id="hideme" class="themeTitle">Style Selector</div>
        <div class="themeName">Oregional Skin</div>
        <div class="images style">
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="bootshop"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="businessltd"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
        </div>
        <div class="themeName">Bootswatch Skins (11)</div>
        <div class="images style">
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="amelia" title="Amelia"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="spruce" title="Spruce"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="superhero" title="Superhero"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="cyborg"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="cerulean"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="journal"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="readable"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="simplex"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="slate"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="spacelab"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="united"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
            <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
        </div>
        <div class="themeName">Background Patterns </div>
        <div class="images patterns">
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern1"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern2"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern3"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern4"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern5"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern6"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern7"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern8"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern9"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern10"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>

            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern11"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern12"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern13"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern14"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern15"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>

            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern16"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern17"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern18"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern19"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/#" name="pattern20"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>

        </div>
    </div>
</div>
</body>
</html><?php }} ?>