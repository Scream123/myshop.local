<?php /* Smarty version Smarty-3.1.6, created on 2017-11-02 16:24:08
         compiled from "../views/shop\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2320059f9be4a2a5586-52286230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab568643ea83178cba8f643af778a8e7266611ca' => 
    array (
      0 => '../views/shop\\product.tpl',
      1 => 1509629046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2320059f9be4a2a5586-52286230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f9be4a40cb8',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f9be4a40cb8')) {function content_59f9be4a40cb8($_smarty_tpl) {?>


<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
<?php echo $_smarty_tpl->getSubTemplate ("leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <ul class="breadcrumb">

                    <li><a href="/">Домой</a> <span class="divider">/</span></li>
                    <li class="active">Информация о товаре</li>

                </ul>

                <div class="row">
                    <div id="gallery" class="span3" style="width: 150px">
                        <a href="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
">
                            <img  id="img" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" style="width:100%" alt="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
" />
                            <i class="icon-zoom-in"></i>
                        </a>
                        <small>Клик чтобы увеличить</small>

                    </div>
                    <div class="span6">
                        <h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

                        <hr class="soft"/>
                        <form class="form-horizontal qtyFrm">
                            <div class="control-group">
                                <label class="control-label"><span>Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
</span></label>
                                <div class="controls">
                                    <input type="number" class="span1" placeholder="Кол."/>

                            <span  id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"  <?php }?> href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" >
                                <button type="submit" class="btn btn-large btn-primary pull-right">  Добавить в корзину <i class=" icon-shopping-cart"></i></button>
                            </span>
                            <span id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" href="#" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
);return false;">
                                <button type="submit"   class="btn btn-large btn-primary pull-right">Удалить из корзины<i class=" icon-shopping-cart"></i></button>
                            </span>

                                </div>




                            </div>
                        </form>

                        <hr class="soft clr"/>

                        <a class="btn btn-small pull-right" href="#detail">Подробности</a>
                        <br class="clr"/>
                        <a href="#" name="detail"></a>
                        <hr class="soft"/>
                    </div>

                    <div class="span9">
                        <ul id="productDetail" class="nav nav-tabs">
                            <li id="detail" class="active"><a href="#home" data-toggle="tab">
                                    информация о товаре</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <h4>Описание</h4>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>

                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> </div>
</div>
<!-- MainBody End ============================= -->
<?php }} ?>