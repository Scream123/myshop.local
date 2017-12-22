<?php /* Smarty version Smarty-3.1.6, created on 2017-11-29 16:52:46
         compiled from "../views/admin\adminleftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3234359da3d47c15c05-28331249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bfc4a485d21ee775f10f43855e52c6c96921cbf' => 
    array (
      0 => '../views/admin\\adminleftcolumn.tpl',
      1 => 1511963564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3234359da3d47c15c05-28331249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59da3d47c19a8',
  'variables' => 
  array (
    'arUser' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59da3d47c19a8')) {function content_59da3d47c19a8($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['arUser']->value['admin']==1){?>

    <div id="leftColumnAdmin" >


        <div id="leftMenuAdmin">
            <div class="menuCaption">Меню:</div>
            <a href="/admin/">Админ-Панель</a><br/>
            <a href="/"><i class="icon-home icon-white" ></i>Главная</a><br/>
            <a href="/admin/category/">Категории</a><br/>
            <a href="/admin/products/">Товар</a><br/>
            <a href="/admin/orders/">Заказы</a>
        </div>
        <div id="adminBox">
            <a href="/user/" id="adminLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br/>
            <a href="/admin/logoutforadmin/" onclick="logoutForAdmin();">Выход</a>
        </div>
        <div lass="menuCaption">Корзина</div>
        <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?> <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?>пусто<?php }?>
            </span>


    </div>
<?php }?>
<div id="leftColumnAdmin" class="hideme">


<div id="leftMenuAdmin">
    <div class="menuCaption">Меню:</div>
        <a href="/admin/">Админ-Панель</a><br/>
        <a href="/">Главная</a><br/>
        <a href="/admin/category/">Категории</a><br/>
        <a href="/admin/products/">Товар</a><br/>
        <a href="/admin/orders/">Заказы</a>
</div>
    <div id="adminBox">
        <a href="/user/" id="adminLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br/>
        <a href="/admin/logoutforadmin/" onclick="logoutForAdmin();">Выход</a>
    </div>
        <div lass="menuCaption">Корзина</div>
        <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?> <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?>пусто<?php }?>
            </span>


</div>



    <!-- Проверка, залогинен ли -->







<?php }} ?>