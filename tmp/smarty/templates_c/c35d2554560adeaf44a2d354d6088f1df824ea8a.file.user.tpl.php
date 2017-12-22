<?php /* Smarty version Smarty-3.1.6, created on 2017-11-09 20:17:11
         compiled from "../views/shop\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:763359f9bd95e51a06-72008585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c35d2554560adeaf44a2d354d6088f1df824ea8a' => 
    array (
      0 => '../views/shop\\user.tpl',
      1 => 1510247830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '763359f9bd95e51a06-72008585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f9bd96ed288',
  'variables' => 
  array (
    'arUser' => 0,
    'rsUserOrders' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f9bd96ed288')) {function content_59f9bd96ed288($_smarty_tpl) {?>

<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <?php echo $_smarty_tpl->getSubTemplate ("leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!-- Sidebar end=============================================== -->
            <div class="span9">

                <h1>Ваши регистрационные данные:</h1>

                <div class="container">
                    <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-md-2" for="defaultLogin">Логин(email)</label>
                            <div class="col-md-4">
                                <input type="text" id="defaultLogin" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
"
                                       disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="newName">Имя</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="newPhone">Тел</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="newAddress">Адрес</label>
                            <div class="col-md-4">
                                <textarea class="form-control" id="newAddress"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['address'];?>
</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="newPwd1">Новый пароль</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" id="newPwd1" value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="newPwd2">Повтор пароля</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" id="newPwd2" value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="curPwd">Текущий пароль</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" id="curPwd" value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">&nbsp;</label>
                            <div class="col-md-4">
                                <input type="button" class="btn btn-primary btn-md" value="Сохранить изменения"
                                       onclick="updateUserData();"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table table-responsive">
                <caption>Заказы:</caption>
                <?php if (!$_smarty_tpl->tpl_vars['rsUserOrders']->value){?>
                    Нет заказов
                <?php }else{ ?>
                    <table class="table table-bordered table-condensed" cellpadding="1" cellspacing="1">
                        <thead >
                        <tr class="danger">
                            <th>№</th>
                            <th>Действие</th>
                            <th>ID заказа</th>
                            <th>Статус</th>
                            <th>Дата создания</th>
                            <th>Дата оплаты</th>
                            <th>Дополнительная информация</th>
                        </tr>
                        </thead>

                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsUserOrders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['orders']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['orders']['iteration']++;
?>
                            <tbody>
                            <tr>
                                <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['orders']['iteration'];?>
</td>
                                <td><a href="#" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false">Показать товар
                                        заказа</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>

                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==1){?>
                                        Заказ оплачен
                                    <?php }else{ ?>
                                        Заказ не оплачен
                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
&nbsp;</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
                            </tr>
                            </tbody>
                            <tr class="hideme" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                <td colspan="7">
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['children']){?>
                                        <table class="table table-bordered   table-condensed" cellpadding="1"
                                               cellspacing="1" width="100%">
                                            <thead>
                                            <tr>
                                                <th>№</th>
                                                <th>ID</th>
                                                <th>Название</th>
                                                <th>Цена</th>
                                                <th>Количество</th>
                                            </tr>
                                            </thead>
                                            <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
                                                <tbody>
                                                <tr class="success">
                                                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
</td>
                                                    <td>
                                                        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
                                                    </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>
</td>
                                                </tr>
                                                </tbody>
                                            <?php } ?>
                                        </table>
                                    <?php }?>
                                </td>

                            </tr>
                        <?php } ?>
                    </table>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div><?php }} ?>