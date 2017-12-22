<?php /* Smarty version Smarty-3.1.6, created on 2017-11-15 01:25:45
         compiled from "../views/shop\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2317859f5df82c06205-93515460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e36315d28e652ddad13d4014db6943cbccc15ef6' => 
    array (
      0 => '../views/shop\\index.tpl',
      1 => 1510698344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2317859f5df82c06205-93515460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f5df8308ca0',
  'variables' => 
  array (
    'teplateWebPath' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'rsProduct' => 0,
    'itemInCart' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f5df8308ca0')) {function content_59f5df8308ca0($_smarty_tpl) {?>

<!--carouselBlk-->
<div id="carouselBlk">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <a href="register.tpl"><img style="width:800px" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
images/products/akcia1.png" alt="Специальные предложения"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.tpl"><img style="width:800px" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
images/products/akcia2.jpg" alt="Специальные предложения"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.tpl"><img style="width:800px" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
images/products/akcia3.png" alt="Специальные предложения"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.tpl"><img style="width:800px"  src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
images/products/akcia4.jpg" alt="Специальные предложения"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>

        </div>          <div class="item">
                <div class="container">
                    <a href="register.tpl"><img style="width:800px"  src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
images/products/akcia5.jpg" alt="Специальные предложения"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>

        </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
<!--carouselBlk End-->



<!--mainBody-->
<div id="mainBody">
    <div class="container">
        <div class="row">

          <?php echo $_smarty_tpl->getSubTemplate ("leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




            <div class="span9">
                <div class="well well-small"> <h4>Последние товары</h4></div>
                <ul class="thumbnails">

                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" alt=""/></a>
                            <div class="caption">
                                <h5><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h5>
                                <h4 style="text-align:center"><a class="btn" href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><i class="icon-zoom-in" title="подробнее о товаре"></i></a>
                                <span  id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"  <?php }?> href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" >
                                    <button type="submit"  class="btn" href="#">Добавить <i class="icon-shopping-cart"></i></button>
                                </span>
                                 <span id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" href="#" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?>class="hideme"<?php }?> onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
);return false;">
                                     <button type="submit"  class="btn" href="#">Удалить <i class="icon-shopping-cart"></i></button>
                                 </span>


                                    <a class="btn btn-primary" href="#">$<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</a></h4>
                            </div>
                        </div>
                    </li>
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%3==0){?>
                            <div class="thumbnails_clr"></div>
                        </ul>
                <ul class="thumbnails">
                        <?php }?>
                    <?php } ?>
                </ul>
                <ul class="pagination">

                    <li>
                    <?php if ($_smarty_tpl->tpl_vars['paginator']->value['currentPage']!=1){?>
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];?>
<?php echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']-1;?>
">&laquo;</a>
                    <?php }?>
                    </li>

                        <li class="active"><span><?php echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage'];?>
</span></li>

                    <?php if ($_smarty_tpl->tpl_vars['paginator']->value['currentPage']<$_smarty_tpl->tpl_vars['paginator']->value['pageCnt']){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];?>
<?php echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']+1;?>
">&raquo;</a></li>
                    <?php }?>



                </ul>


</div
        </div>
    </div>

</div>

<!--mainBody End-->





<?php }} ?>