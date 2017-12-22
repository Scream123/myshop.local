


{*<!DOCTYPE html>*}
{*<html lang="en">*}
{*<head>*}
    {*<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*}
    {*<title>{$pageTitle}</title>*}


    {*<meta name="viewport" content="width=device-width, initial-scale=1">*}
    {*<meta http-equiv="X-UA-Compatible" content="IE=edge">*}

    {*<link rel="stylesheet" href="{$teplateWebPath}css/main.css"  media="screen" type="text/css"/>*}
    {*<link rel="stylesheet" href="{$teplateWebPath}css/bootstrap.css" type="text/css"/>*}
    {*<link rel="stylesheet" href="{$teplateWebPath}css/bootstrap.css.map" type="text/css"/>*}
    {*<link rel="stylesheet" href="{$teplateWebPath}css/bootstrap-theme.css" type="text/css"/>*}

    {*<!-- Свои файлы -->*}
    {*<script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>*}
    {*<script type="text/javascript" src="/js/main.js"></script>*}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--<script src="../bower_components/html5shiv/dist/html5shiv.js"></script>-->
    <!--<script src="../bower_components/respond/dest/respond.min.js"></script>-->
    <![endif]-->
{*</head>*}








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{$pageTitle}</title>
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
    <link id="callCss" rel="stylesheet" href="{$teplateWebPath}themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="{$teplateWebPath}themes/css/base.css" rel="stylesheet" media="screen"/>

    <!-- Bootstrap style responsive -->
    <link href="{$teplateWebPath}themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="{$teplateWebPath}themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="{$teplateWebPath}themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>




    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="{$teplateWebPath}themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{$teplateWebPath}themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{$teplateWebPath}themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{$teplateWebPath}themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{$teplateWebPath}themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>
    {*<script src="http://code.jquery.com/jquery-latest.min.js"></script>*}

    <!-- Свои файлы -->
    {*<link rel="stylesheet" href="{$teplateWebPath}css/main.css"  media="screen" type="text/css"/>*}
    <script type="text/javascript" src="{$teplateWebPath}js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="{$teplateWebPath}js/main.js"></script>
</head>

<body>
<div id="header">
    <div class="container">
        <div id="welcomeLine" class="row">
            <div class="span6">Добро пожаловать,<strong  id="headerName">{if   isset($arUser)} {$arUser['displayName']}! {else} пользователь!{/if}</strong></div>
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
                <a class="brand" href="/"><img src="{$teplateWebPath}themes/images/logo.png" alt="Bootsshop"/></a>
                {*<form class="form-inline navbar-search" method="post" action="products.html" >*}
                    {*<input id="srchFld" class="srchTxt" type="text" />*}
                    {*<select class="srchTxt">*}
                        {*<option>All</option>*}
                        {*<option>CLOTHES </option>*}
                        {*<option>FOOD AND BEVERAGES </option>*}
                        {*<option>HEALTH & BEAUTY </option>*}
                        {*<option>SPORTS & LEISURE </option>*}
                        {*<option>BOOKS & ENTERTAINMENTS </option>*}
                    {*</select>*}
                    {*<button type="submit" id="submitButton" class="btn btn-primary">Go</button>*}
                {*</form>*}
                <ul id="topMenu" class="nav pull-right">
                    <li class=""><a href="special_offer.html">
                            Специальные предложения</a></li>
                    <li class=""><a href="normal.html">Доставка</a></li>
                    <li class=""><a href="/contact/">Контакты</a></li>
                    {if !isset($hideLoginBox) &&   !isset($arUser)}
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
                    {/if}
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- Header End====================================================================== -->

