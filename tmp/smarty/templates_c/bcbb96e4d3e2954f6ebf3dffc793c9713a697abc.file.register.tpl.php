<?php /* Smarty version Smarty-3.1.6, created on 2017-11-03 21:38:27
         compiled from "../views/shop\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:956059f9a49064ed83-90713803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcbb96e4d3e2954f6ebf3dffc793c9713a697abc' => 
    array (
      0 => '../views/shop\\register.tpl',
      1 => 1509734306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '956059f9a49064ed83-90713803',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f9a4907e130',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
    'arUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f9a4907e130')) {function content_59f9a4907e130($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Less styles -->
    <!-- Other Less css file //different less files has different color scheam
     <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
     -->
    <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
    <script src="themes/js/less.js" type="text/javascript"></script> -->



    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/base.css" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->

    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>




    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>

    <!-- Свои файлы -->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
js/main.js"></script>
</head>
<body>
<div id="header">
    <div class="container">
        <div id="welcomeLine" class="row">
            <div class="span6">Добро пожаловать,<strong><?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?> <?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
! <?php }else{ ?> пользователь!<?php }?></strong></div>
            <div class="span6">
                <div class="pull-right">
                    <a href="product_summary.html"><span class="">Fr</span></a>
                    <a href="product_summary.html"><span class="">Es</span></a>
                    <span class="btn btn-mini">En</span>
                    <a href="product_summary.html"><span>&pound;</span></a>
                    <span class="btn btn-mini">$155.00</span>
                    <a href="product_summary.html"><span class="">$</span></a>
                    <a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a>
                </div>
            </div>
        </div>
        <!-- Navbar ================================================== -->
        <div id="logoArea" class="navbar">
            <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-inner">
                <a class="brand" href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/logo.png" alt="Bootsshop"/></a>

            </div>
        </div>
    </div>
</div>
<!-- Header End====================================================================== -->

<div class="container">
<h3 style="text-align: center"> Регистрация</h3>
    <div class="span9">
    <ul class="breadcrumb">

        <li><a href="/"><i class="icon-hand-left icon-large"></i>Вернутся на главную страницу</a> <span class="divider">/</span></li>
        <li class="active">Регистрация</li>

    </ul>

                <div id="registerBox" class="well">

                    <form class="form-horizontal">



                        <div class="control-group">
                            <label class="control-label" for="input_email">Email <sup>*</sup></label>
                            <div class="controls">
                                <input type="text" id="email" name="email" value="" placeholder="Email">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Пароль<sup>*</sup></label>
                            <div class="controls">
                                <input type="password" id="pwd1" name="pwd1" value="" placeholder="Password">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Повторить пароль<sup>*</sup></label>
                            <div class="controls">
                                <input type="password"  id="pwd2" name="pwd2" value="" placeholder="Password">
                            </div>
                        </div>


                        <div  class="alert alert-block alert-error fade out">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Заполните все поля!</strong>
                        </div>

                        <div class="control-group">
                            <div class="controls">

                                <input id="redirect" class="btn btn-large btn-success" type="submit"  onclick="registerNewUserShop();" value="Зарегистрироваться" />
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</div>
<!-- MainBody End ============================= -->



<!-- Footer ================================================================== -->
<div  id="footerSection">
    <div class="container">
        <div class="row">

            <div class="span3">
                <h5>ИНФОРМАЦИЯ</h5>
                <a href="contact.html">КОНТАКТЫ</a>
                <div id="registerFooter"><a href="/register/">РЕГИСТРАЦИЯ</a></div>
                <a href="legal_notice.html">ПРАВОВАЯ ИНФОРМАЦИЯ</a>
                <a href="tac.html">ПОЛОЖЕНИЯ И УСЛОВИЯ</a>
                <a href="faq.html">FAQ</a>
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
                <a href="#"><img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="#"><img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/twitter.png" title="twitter" alt="twitter"/></a>
                <a href="#"><img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/youtube.png" title="youtube" alt="youtube"/></a>
            </div>
        </div>
        <p class="pull-right">&copy; Bootshop</p>
    </div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/js/jquery.js" type="text/javascript"></script>
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

    </div>
</div>
<span id="themesBtn"></span>
</body>
</html>


<?php }} ?>