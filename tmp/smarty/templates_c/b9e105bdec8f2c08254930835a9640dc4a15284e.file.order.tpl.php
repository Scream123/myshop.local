<?php /* Smarty version Smarty-3.1.6, created on 2017-11-02 23:37:41
         compiled from "../views/shop\order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:835159fb5958b4b687-94194176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e105bdec8f2c08254930835a9640dc4a15284e' => 
    array (
      0 => '../views/shop\\order.tpl',
      1 => 1509655059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '835159fb5958b4b687-94194176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59fb5958e50d8',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'arUser' => 0,
    'buttonClass' => 0,
    'name' => 0,
    'phone' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fb5958e50d8')) {function content_59fb5958e50d8($_smarty_tpl) {?>

<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <?php echo $_smarty_tpl->getSubTemplate ("leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <ul class="breadcrumb">

                    <li><a href="/">Домой</a> <span class="divider">/</span></li>
                    <li class="active">Заказ</li>

                </ul>


            <h2>Данные заказа</h2>
            <form id="frmOrder" action="/cart/saveorder/" method="POST">
                <table class="table table-bordered ">
                    <tr>
                        <th>№</th>
                        <th>Наименование</th>
                        <th>Количество</th>
                        <th>Цена за единицу</th>
                        <th>Стоимость</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
                            <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
                            <td><span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <input type="hidden" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
"/>
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>

                    </span>
                            </td>
                            <td>
                    <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <input type="hidden" name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"/>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                    </span>
                            </td>
                            <td>
                    <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <input type="hidden" name="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>
"/>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>

                    </span>
                            </td>
                        </tr>
                    <?php } ?>
                </table class="table table-bordered ">

                <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>

                    <?php $_smarty_tpl->tpl_vars['buttonClass'] = new Smarty_variable('', null, 0);?>
                    <h2>Данные заказчика</h2>
                    <div id="orderUserInfoBox" <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
>

                        <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['name'], null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['phone'], null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['address'] = new Smarty_variable($_smarty_tpl->tpl_vars['arUser']->value['address'], null, 0);?>

                        <table class="table table-bordered">
                            <tr>
                                <td>Имя*</td>
                                <td><input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/></td>
                            </tr>
                            <tr>
                                <td>Тел*</td>
                                <td><input type="text" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"/></td>
                            </tr>
                            <tr>
                                <td>Адрес*</td>
                                <td><textarea id="address" name="address"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</textarea></td>
                            </tr>
                        </table>
                    </div>
                <?php }else{ ?>
                    <div id="loginBox">
                        <div class="menuCaption">Авторизация</div>
                        <table>
                            <tr>
                                <td>Логин</td>
                                <td><input type="text" id="loginEmail" name="loginEmail" value=""/></td>
                            </tr>
                            <tr>
                                <td>Пароль</td>
                                <td><input type="password" id="loginPwd" name="loginPwd" value=""/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="btn btn-primary btn-md" type="button" onclick="login();" value="Войти"/></td>
                            </tr>
                        </table>
                    </div>
                    <div id="registerBox">или<br/>
                        <div class="menuCaption">Регистрация нового пользователя:</div>
                        email* :<br/>
                        <input type="text" id="email" name="email" value=""/><br/>
                        пароль* :<br/>
                        <input type="password" id="pwd1" name="pwd1" value=""/><br/>
                        повторить пароль* :<br/>
                        <input type="password" id="pwd2" name="pwd2" value=""/><br/>

                        Имя* : <input type="text" id="name" name="name" value=""/><br/>
                        Тел* : <input type="text" id="phone" name="phone" value=""/><br/>
                        Адрес* : <textarea id="address" name="address"></textarea><br/>

                        <input type="button" class="btn btn-primary btn-md" onclick="registerNewUser();" value="Зарегистрироваться"/>
                    </div>
                    <?php $_smarty_tpl->tpl_vars['buttonClass'] = new Smarty_variable("class='hideme'", null, 0);?>
                <?php }?>

                <input <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
 id="btnSaveOrder" type="submit" class="btn btn-primary btn-md" value="Оформить заказ" onclick="saveOrder();"/>
            </form>
        </div>
        </div>

</div>
</div><?php }} ?>