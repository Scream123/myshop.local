<?php /* Smarty version Smarty-3.1.6, created on 2017-11-03 16:27:07
         compiled from "../views/shop\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1259859f73ead3f3b81-64989285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '806db8d49fbe66424d27536de283cd06930f201d' => 
    array (
      0 => '../views/shop\\leftcolumn.tpl',
      1 => 1509715626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1259859f73ead3f3b81-64989285',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f73ead48440',
  'variables' => 
  array (
    'teplateWebPath' => 0,
    'cartCntItems' => 0,
    'arUser' => 0,
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f73ead48440')) {function content_59f73ead48440($_smarty_tpl) {?><!-- Sidebar ================================================== -->

<div id="sidebar" class="span3">
    <div class="well well-small menuCaption"><a id="myCart" href="/cart/"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
themes/images/ico-cart.png" alt="cart" title="Перейти в корзину">
            В корзине<span id="cartCntItems">
            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?> <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?>пусто<?php }?>
            </span></a>
    </div>
    <ul id="sideManu" class="nav nav-tabs nav-stacked">
        <li class="subMenu open"><a>Меню</a>
            <ul>
                <li id="admin-panel" class="hideme">
                    <a class="active" href="/admin/" style="color: green;">Админ-панель</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['arUser']->value['admin']==1){?>
                    <li class="active"><a href="/admin/" id="admin-panel" style="color: green;"><i class=" icon-heart"></i>Админ-панель</a></li>
                <?php }?>
                <li class="active"><a href="/"><i class="icon-home icon-white" ></i> Домой</a></li>

                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li><a class="active" href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><i class="icon-chevron-right"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
                        <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                <li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><i class="icon-chevron-right"></i><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
                        <?php } ?>
                    <?php }?>
                <?php } ?>
            </ul>
        </li>


    </ul>
    <br/>
    <!-- Проверка, залогинен ли -->
    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)){?>
        <ul class="nav nav-tabs nav-stacked" id="userBox">

            <li class="badge badge-info"><a href="/user/" id="userLink"> <i class="icon-user"></i><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a></li>
            <li class="badge badge-inverse"><a href="/user/logout/" onclick="logout();"><i class="icon-off"></i>Выход</a></li>

        </ul>

    <?php }else{ ?>

        <ul id="userBox" class="nav nav-tabs nav-stacked hideme">
            <li class="badge badge-info"><a href="#" id="userLink"></a></li>
            <li class="badge badge-inverse"><a  id="redirect" href="/user/logout/" onclick="logout();" ><i class="icon-off"></i>Выход</a></li>
        </ul>
    <?php }?><br/>

    <div class="thumbnail" >
        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
images/products/rek.jpg" alt="Реклама" />

    </div>
    <div class="thumbnail" >
        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
images/products/rek2.jpg" alt="Реклама" />

    </div>
</div>

<!-- Sidebar end=============================================== --><?php }} ?>