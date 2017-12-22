<?php /* Smarty version Smarty-3.1.6, created on 2017-11-14 14:16:36
         compiled from "../views/shop\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1726259fa37fa2c8805-79189829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '066461f619f96a34d32d6505181665d84375c41e' => 
    array (
      0 => '../views/shop\\cart.tpl',
      1 => 1510658196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1726259fa37fa2c8805-79189829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59fa37fa4dbc0',
  'variables' => 
  array (
    'cartCntItems' => 0,
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fa37fa4dbc0')) {function content_59fa37fa4dbc0($_smarty_tpl) {?>


<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <?php echo $_smarty_tpl->getSubTemplate ("leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="/">Домой</a> <span class="divider">/</span></li>
                    <li class="active">Корзина</li>
                </ul>
                <h3> Корзина[ <small><?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
 товар(а/ов) </small>]<a href="/" class="btn btn-md btn-warning pull-right"><i class="icon-arrow-left"></i>Продолжить покупку  </a></h3>
                <hr class="soft"/>
                <?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?>
                В корзине пусто.
                <?php }else{ ?>
                <form action="/cart/order/" method="POST">
                    <caption>Данные заказа</caption>
                    <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Наименование</th>
                        <th>Количество</th>
                        <th>Цена за единицу</th>
                        <th>Цена</th>
                        <th>Действие</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>

                        </td>
                        <td>
                            <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                        </td>
                        <td>
                            <div id="inputBlock" class="input-append">
                                <button id="minus" class="btn btn-md" type="button" ><i class="icon-minus"></i></button>

                                <input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="span1"  style="max-width:34px" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>

                                <button id="plus"  class="btn btn-md" type="button" ><i class="icon-plus"></i></button>

                            </div>
                        </td>
                        <td>
                              <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                            </span>
                        </td>
                        <td>
                                <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                                 </span>
                        </td>
                        <td>
                           <span id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hideme" href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Восстановить элемент"><button class="btn btn-md" type="button"><i class="icon-plus"></i></button></span>

                            <button id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);return false;" title="Удалить из корзины"   class="btn btn-danger btn-md" type="button"><i class="icon-remove icon-white"></i>Удалить</button>

                        </td>

                    </tr>




                    </tbody>
                        <?php } ?>
                </table>
                    <input type="submit" class="btn btn-primary btn-md" value="Оформить заказ"/>
                </form>

                <?php }?>





                <a href="/" class="btn btn-md btn-warning"><i class="icon-arrow-left"></i>Продолжить покупку </a>


            </div>
        </div>
    </div>
</div><?php }} ?>