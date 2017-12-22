
{if ($arUser['admin'] == 1)}

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
                {foreach $rsCategories as $item}
                <option value="{$item['id']}">{$item['name']}
                {/foreach}
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



{else}

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
                            {foreach $rsCategories as $item}
                        <option value="{$item['id']}">{$item['name']}
                            {/foreach}
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

    {*<div id="adminBox" class="hideme">*}
        {*<a href="#" id="adminLink"></a><br/>*}
        {*<a  id="redirect" href="/admin/logoutforadmin/" onclick="logoutForAdmin();" >Выход</a>*}
    {*</div>*}
{if !isset($hideLoginBox)}

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







{/if}
{/if}

    {*<div class="col-md-6">*}
        {*<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-1">Открыть мод окно</button>*}
    {*</div>*}


    {*<div class="modal fade hideme" id="modal-1">*}
        {*<div class="modal-dialog  modal-sm">*}
            {*<div class="modal-content">*}
                {*<div class="modal-header">*}
                    {*<button class="close" type="button" data-dismiss="modal">&times;</button>*}

                    {*<h4 class="modal-title">название окна</h4>*}

                {*</div>*}
                {*<div class="modal-body">*}
                    {*<p>Это мод окно</p>*}

                {*</div>*}
                {*<div class="modal-footer">*}
                    {*<button class="btn btn-danger" type="button" data-dismiss="modal">Отмена</button>*}

                {*</div>*}
            {*</div>*}
        {*</div>*}
    {*</div>*}

