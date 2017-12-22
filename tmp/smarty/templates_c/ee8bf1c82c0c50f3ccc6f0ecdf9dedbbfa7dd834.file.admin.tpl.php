<?php /* Smarty version Smarty-3.1.6, created on 2017-11-04 00:14:59
         compiled from "../views/admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3206859da3d47c83204-80764765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8bf1c82c0c50f3ccc6f0ecdf9dedbbfa7dd834' => 
    array (
      0 => '../views/admin\\admin.tpl',
      1 => 1509743698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3206859da3d47c83204-80764765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59da3d47c8708',
  'variables' => 
  array (
    'arUser' => 0,
    'rsCategories' => 0,
    'item' => 0,
    'hideLoginBox' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59da3d47c8708')) {function content_59da3d47c8708($_smarty_tpl) {?>
<?php if (($_smarty_tpl->tpl_vars['arUser']->value['admin']==1)){?>

    <div id="blockNewCategory" class="container">
    <form role="form" id="formNewCat" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-md-5" for="newCategoryName">Новая категория:</label>
            <div class="col-md-4">
            <input  class="form-control" name="newCategoryName" id="newCategoryName" type="text" value="" placeholder="Введите категорию"/>
             </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-5" for="sel">Является подкатегорией для</label>
            <div class="col-md-4">
            <select  id="sel" class="form-control" name="generalCatId">
                <option value="0">Главная Категория
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                <?php } ?>
            </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2">&nbsp;</label>
            <div class="col-md-4">
            <input class="btn btn-primary btn-md" type="button" onclick="newCategory();" value="Добавить категорию"/>
            </div>
        </div>
    </form>
</div>



<?php }else{ ?>

    <div id="blockNewCategory" class="container hideme">
        <form role="form" id="formNewCat" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-md-5" for="newCategoryName">Новая категория:</label>
                <div class="col-md-4">
                    <input  class="form-control" name="newCategoryName" id="newCategoryName" type="text" value="" placeholder="Введите категорию"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-5" for="sel">Является подкатегорией для</label>
                <div class="col-md-4">
                    <select  id="sel" class="form-control" name="generalCatId">
                        <option value="0">Главная Категория
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                            <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">&nbsp;</label>
                <div class="col-md-4">
                    <input class="btn btn-primary btn-md" type="button" onclick="newCategory();" value="Добавить категорию"/>
                </div>
            </div>
        </form>
    </div>
<?php if (!isset($_smarty_tpl->tpl_vars['hideLoginBox']->value)){?>

    <div id="loginAdmins" class="container">
        <div class="menuCaption">Авторизация</div>
    <form role="form" class="form-horizontal loginForm" id="loginBox">
            <div class="form-group">
                <label class="control-label col-md-2" for="loginEmail">email</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="loginEmail" name="loginEmail" value=""/>
                </div>
                </div>
        <div class="form-group">
                <label class="control-label col-md-2" for="loginPwd">пароль</label>
            <div class="col-md-10">
                <input type="password" class="form-control" id="loginPwd" name="loginPwd" value=""/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">&nbsp;</label>
            <div class="col-md-4">
                <input type="button" class="btn btn-primary btn-md" onclick="loginAdmin();" value="Войти"/>
            </div>

            <div class="col-md-4">
                <input type="button" class="btn btn-primary btn-md" onclick="logoutAdmin();" value="Выйти"/>
            </div>
            </div>
    </form>

    </div>







<?php }?>
<?php }?>

<?php }} ?>