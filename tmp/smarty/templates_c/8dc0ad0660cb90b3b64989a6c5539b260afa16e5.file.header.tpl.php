<?php /* Smarty version Smarty-3.1.6, created on 2017-11-14 21:18:04
         compiled from "../views/shop\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:331759f5df82802c86-71679426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dc0ad0660cb90b3b64989a6c5539b260afa16e5' => 
    array (
      0 => '../views/shop\\header.tpl',
      1 => 1510683477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '331759f5df82802c86-71679426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f5df82a2d78',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
    'arUser' => 0,
    'hideLoginBox' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f5df82a2d78')) {function content_59f5df82a2d78($_smarty_tpl) {?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--<script src="../bower_components/html5shiv/dist/html5shiv.js"></script>-->
    <!--<script src="../bower_components/respond/dest/respond.min.js"></script>-->
    <![endif]-->








<!DOCTYPE html>
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
            <div class="span6">Добро пожаловать,<strong  id="headerName"><?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?> <?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
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
                <a class="brand" href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/logo.png" alt="Bootsshop"/></a>
                <ul id="topMenu" class="nav pull-right">
                    <li class=""><a href="special_offer.html">
                            Специальные предложения</a></li>
                    <li class=""><a href="normal.html">Доставка</a></li>
                    <li class=""><a href="/contact/">Контакты</a></li>
                    <?php if (!isset($_smarty_tpl->tpl_vars['hideLoginBox']->value)&&!isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
                    <li id="loginBox" class="">
                        <a  id="loginBox" href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Войти на сайт</span></a>
                        <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3>Авторизация</h3>
                            </div>
                            <div id="loginBox" class="modal-body">
                                <form class="form-horizontal loginFrm">
                                    <div class="control-group">
                                        <input type="text" id="loginEmail" name="loginEmail" value="" placeholder="Email">
                                    </div>
                                    <div class="control-group">
                                        <input type="password" id="loginPwd" name="loginPwd" value="" placeholder="Password">
                                    </div>
                                    <div class="control-group">
                                        <label class="checkbox">
                                            <input type="checkbox"> Запомнить
                                        </label>
                                    </div>
                                </form>
                                <input type="submit"  data-dismiss="modal" class="btn btn-success " aria-hidden="true"  onclick="login();"   value="Войти" >
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
                            </div>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- Header End====================================================================== -->

<?php }} ?>