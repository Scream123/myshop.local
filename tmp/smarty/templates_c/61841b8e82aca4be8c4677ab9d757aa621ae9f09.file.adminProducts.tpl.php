<?php /* Smarty version Smarty-3.1.6, created on 2017-12-05 12:30:51
         compiled from "../views/admin\adminProducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:614259de23b3290407-61520641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61841b8e82aca4be8c4677ab9d757aa621ae9f09' => 
    array (
      0 => '../views/admin\\adminProducts.tpl',
      1 => 1512466250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '614259de23b3290407-61520641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59de23b4687e0',
  'variables' => 
  array (
    'rsCategories' => 0,
    'itemCat' => 0,
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de23b4687e0')) {function content_59de23b4687e0($_smarty_tpl) {?>
<div id="blockAddEditProduct">

    <h2>Товар</h2>


    <div class="container">


        <input class="btn btn-primary btn-md" type="button" onclick="createXML();" value="Сохранить в XML">
        <div id="xml-place"></div>

        <hr/>
        Импорт

        <form action="/admin/loadfromxml/" method="POST" enctype="multipart/form-data">
            <input type="file" " class="btn btn-file" name="filename"><br/>
            <input type="submit" class="btn btn-success btn-md" value="Загрузить"><br/>
        </form>


        <hr/>
        <div class="table table-responsive">
            <caption>Добавить продукт</caption>
            <table id="addTblProduct" class="table table-bordered  table-condensed" border="1" cellpadding="1"
                   cellspacing="1">
                <thead>
                <tr class="info">
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Категория</th>
                    <th>Описание</th>
                    <th>Сохранить</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <input class="form-control" type="edit" id="newItemName" value=""/>
                    </td>
                    <td>
                        <input class="form-control" type="edit" id="newItemPrice" value=""/>
                    </td>
                    <td>
                        <select class="form-control" id="newItemCatId">
                            <option value="0" disabled selected> Главная категория</option>
                            <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value){
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>

                            <?php if ($_smarty_tpl->tpl_vars['itemCat']->value['parent_id']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                                <?php }?>
                                <?php } ?>
                        </select>
                    </td>
                    <td>
                        <textarea class="form-control" id="newItemDesc"></textarea>
                    </td>
                    <td>
                        <input class="btn btn-primary btn-md" type="button" value="Добавить" onclick="addProduct();"/>
                    </td>
                </tr>
                </tbody>
            </table>

            <caption>Редактировать</caption>
            <table id="editTblProduct" class="table table-bordered table-condensed" border="1" cellpadding="1"
                   cellspacing="1">
                <thead>
                <tr class="info">
                    <th>№</th>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Категория</th>
                    <th>Описание</th>
                    <th>Скрыть</th>
                    <th>Изображение</th>
                    <th>Сохранить</th>
                    <th>Удалить</th>
                </tr>
                </thead>

                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
                <tbody class="tBody2">
                <tr id="tr2">
                    <td class="tdIter"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
                    <td id="itemId"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                    <td>

                        <input type="edit" class="form-control" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/>

                    </td>
                    <td>
                        <input type="edit" class="form-control" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"/>
                    </td>

                    <td>

                        <select class="form-control" id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style="width:200px;">
                            <option value="0">Главная Категория</option>
                            <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value){
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['category_id']==$_smarty_tpl->tpl_vars['itemCat']->value['id']){?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                                </option>
                            <?php } ?>
                        </select>


                    </td>

                    <td>
                    <textarea class="form-control" rows="5" id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                    </textarea>
                    </td>
                    <td>
                        <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                               <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==0){?>checked="checked"<?php }?>/>
                    </td>
                    <td class="itemImg">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['image']){?>
                            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" class="img-responsive " alt="Responsive image"
                                 width="100"/>
                        <?php }?>
                        <form action="/admin/upload/" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="custom-file" for="filename"></label>

                                <input type="file" class="btn btn-file" name="filename"
                                       accept="image/jpeg,image/png,image">

                                <input type="hidden" class="form-control" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                            </div>
                            <input type="submit" class="btn btn-success btn-md" value="Загрузить">
                        </form>
                    </td>
                    <td class="saveButton">
                        <input type="button" class="btn btn-primary btn-md" value="Сохранить"
                               onclick="updateProduct(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
                    </td class="delButton">
                    <td>
                        <input type="button" class="btn btn-danger btn-md" value="Удалить"
                               onclick="deleteProduct(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>

                    </td>
                    <?php } ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }} ?>