<?php /* Smarty version Smarty-3.1.6, created on 2017-11-01 21:33:49
         compiled from "../views/default\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2523859c289789cef08-04234365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd86026e14cd6d235743b3882c7fc10799a2fe413' => 
    array (
      0 => '../views/default\\leftcolumn.tpl',
      1 => 1509555288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2523859c289789cef08-04234365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59c289789e278',
  'variables' => 
  array (
    'arUser' => 0,
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'hideLoginBox' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c289789e278')) {function content_59c289789e278($_smarty_tpl) {?>
<div id="leftColumn">
    <div id="leftMenu">

        <div class="menuCaption">Меню:</div>
        <div id="admin-panel" class="hideme">
            <a href="/admin/">Админ-панель</a><br/>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['arUser']->value['admin']==1){?>
        <a href="/admin/" id="admin-panel">Админ-панель</a><br/>
        <?php }?>

        <a href="/">Главная</a><br/>
       <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
           <!--<a href="/?controller=category&id="></a><br/>-->
           <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br/>

           <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
                <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                    <!-- --<a href="/?controller=category&id="></a><br/>-->
                    --<a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br/>

                <?php } ?>
           <?php }?>
       <?php } ?>
    </div>

    <!-- Проверка, залогинен ли -->
    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
        <div id="userBox">
            <a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br/>
            <a href="/user/logout/" onclick="logout();">Выход</a>
        </div>

    <?php }else{ ?>

        <div id="userBox" class="hideme">
            <a href="#" id="userLink"></a><br/>
            <a  id="redirect" href="/user/logout/" onclick="logout();" >Выход</a>
        </div>
        <?php if (!isset($_smarty_tpl->tpl_vars['hideLoginBox']->value)){?>
            <div id="loginBox">
                <div class="menuCaption">Авторизация</div>
                    email:<br/>
                    <input type="text " id="loginEmail" name="loginEmail" value=""/><br/>
                    пароль:<br/>
                    <input type="password" id="loginPwd" name="loginPwd" value=""/><br/>
                    <input type="button" onclick="login();" value="Войти"/>
             </div>

            <div id="registerBox">
                <div class="menuCaption showHidden" onclick="showRegisterBox()">Регистрация</div>
                <div id="registerBoxHidden">
                    email:<br/>
                    <input type="text" id="email" name="email" value=""/><br/>
                    пароль:<br/>
                    <input type="password" id="pwd1" name="pwd1" value=""/><br/>
                    повторить пароль:<br/>
                    <input type="password" id="pwd2" name="pwd2" value=""/><br/>
                    <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/><br/>

                </div>
             </div>
        <?php }?>

    <?php }?>

        <div lass="menuCaption">Корзина</div>
            <a href="/cart/" title="Перейти в корзину">В корзине</a>
            <span id="cartCntItems">
            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?> <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?>пусто<?php }?>
            </span>
</div><?php }} ?>