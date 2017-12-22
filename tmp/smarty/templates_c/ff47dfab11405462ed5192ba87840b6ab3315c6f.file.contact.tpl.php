<?php /* Smarty version Smarty-3.1.6, created on 2017-11-29 19:04:43
         compiled from "../views/shop\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211625a0b3365ec6084-67549660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff47dfab11405462ed5192ba87840b6ab3315c6f' => 
    array (
      0 => '../views/shop\\contact.tpl',
      1 => 1511971482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211625a0b3365ec6084-67549660',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a0b33662db40',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b33662db40')) {function content_5a0b33662db40($_smarty_tpl) {?>

<div id="mainBody">
    <div class="container">
        <hr class="soften">
        <h1>
            Посетите нас</h1>
        <hr class="soften"/>
        <div class="row">
            <div class="span4">
                <h4>Контактная информация</h4>
                <p>г. Харьков,<br/>
                    проспект Науки, 14,<br/>Украина
                    <br/><br/>
                    info@bootsshop.com<br/>
                    ﻿Tel 123-456-6780<br/>
                    Fax 123-456-5679<br/>
                    web:bootsshop.com
                </p>
            </div>

            <div class="span4">
                <h4>Часы работы</h4>
                <h5> Понедельник - Пятница</h5>
                <p>09:00 - 21:00<br/><br/></p>
                <h5>Суббота</h5>
                <p>09:00 - 19:00<br/><br/></p>
                <h5>Воскресенье</h5>
                <p>12:30 - 18:00<br/><br/></p>
            </div>
            <div class="span4">
                <h4>
                    Свяжитесь с нами </h4>
                <form id="form" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">

                             <input type="text" id="name" name="name" placeholder="имя" class="input-xlarge" required />

                        </div>
                        <div class="control-group">

                            <input type="text" id="email" name="email" placeholder="email" class="input-xlarge"  required/>


                        </div>
                        <div class="control-group">

                            <input type="text"  id="subject"   name="subject" placeholder="тема" class="input-xlarge"  required/>

                        </div>
                        <div class="control-group">
                            <textarea rows="3" id="msg" name = "msg" class="input-xlarge" placeholder="Укажите причину"  required></textarea>

                        </div>



                        <button class="btn  btn-large btn-success"  data-target="#myModal">Отправить</button>
                        <div id="myModal" class="modal fade" tabindex="-1">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">x</button>
                                        <h4 class="modal-title">Сообщение отправлено</h4>
                                    </div>
                                    <div class="modal-body">
                                        Спасибо за заявку, мы с вами свяжемся!
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" data-dismiss="modal">Закрыть</button>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="span12">
                <iframe style="width:100%; height:auto; border: 0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.690426503983!2d36.2255995326087!3d50.01715735806607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a1251e09432b%3A0x5cce78e50f36b6a4!2z0L_RgNC-0YHQv9C10LrRgiDQndCw0YPQutC4LCAxNCwg0KXQsNGA0LrRltCyLCDQpdCw0YDQutGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1510693109321"></iframe><br />
                <small><a href="https://goo.gl/maps/Gk4a2piPAop" style="color:#0000FF;text-align:left">Посмотреть увеличенную карту</a></small>
            </div>
        </div>
    </div>
</div>
<!-- MainBody End ============================= -->
<?php }} ?>