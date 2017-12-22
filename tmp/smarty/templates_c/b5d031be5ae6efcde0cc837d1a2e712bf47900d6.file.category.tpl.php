<?php /* Smarty version Smarty-3.1.6, created on 2017-11-02 22:34:58
         compiled from "../views/shop\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2940559f9ca2be65287-04445870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5d031be5ae6efcde0cc837d1a2e712bf47900d6' => 
    array (
      0 => '../views/shop\\category.tpl',
      1 => 1509651297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2940559f9ca2be65287-04445870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f9ca2c18c18',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'rsChildCats' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f9ca2c18c18')) {function content_59f9ca2c18c18($_smarty_tpl) {?>
<h1>Товары категории <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>

<div id="mainBody">
    <div class="container">
        <div class="row">
            <?php echo $_smarty_tpl->getSubTemplate ("leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="span9">
                <div class="well well-small">
                    <h4><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h4>
                </div>

                <ul class="thumbnails">

                    <?php if ($_smarty_tpl->tpl_vars['rsProducts']->value||$_smarty_tpl->tpl_vars['rsChildCats']->value){?>


                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                                <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100"/>
                            </a>
                            <div class="caption">
                                <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                <h5><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h5>

                                <h4 style="text-align:center"><a class="btn" href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><i class="icon-zoom-in" title="подробнее о товаре"></i></a>

                                    <a class="btn btn-primary" href="#">$<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</a></h4>
                            </div>
                        </div>
                    </li>

                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%3==0){?>
                    <div class="thumbnails_clr"></div>
                <ul class="thumbnails">
                    <?php }?>
                    <?php } ?>
                    <?php }else{ ?>
                    <h2 style="color:red">
                        <ins> Товаров нет!</ins>
                    </h2>
                    <?php }?>

                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsChildCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <h2><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
                    <?php } ?>
                </ul>





            </div>
        </div>
    </div>
</div>



<?php }} ?>