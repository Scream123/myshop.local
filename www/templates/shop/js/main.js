/**
 * Функция добавления товара в корзину
 *
 * @param integer itemId ID продукта
 * @return  в случае успеха обновятся дмннче корзины на странице
 */

 function addToCart(itemId) {
    console.log("js - addToCart()");
    $.ajax({
        type: 'POST',
        async: true,
        url: "/cart/addtocart/" + itemId + '/',
        dataType: 'json',
        success: function(data) {
            if(data['success']) {
                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }


        }
    });

 }
/**
 * Функция удаления товара из корзины
 *
 * @param itemId
 */
function removeFromCart(itemId) {
    console.log("js-removeFromCart(" +itemId+")");
    $.ajax({
        type: 'POST',
        async: true,
        url: "/cart/removefromcart/" +itemId+'/',
        dataType: 'json',
        success: function (data) {
            if (data['success']) {

                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_' + itemId).show();
                $('#removeCart_' + itemId).hide();
            }

        }

    });
}

/**
 * Подсчет общей суммы из кол-ва товара в корзине
 * @param itemId
 */
function conversionPrice(itemId) {
    var newCnt = $('#itemCnt_' +itemId).val();
    var itemPrice = $('#itemPrice_' +itemId).attr('value');
    var itemRealPrice = newCnt * itemPrice;

    $('#itemRealPrice_' + itemId).html(itemRealPrice);

}

/**
 * Получение данных с форм формируя в массив с html элементов
 * @param obj_form - идентификатор
 */
function  getData(obj_form) {
    var hData = {};
    $('input, textarea, select', obj_form).each(function() {
        if (this.name && this.name !='') {
            hData[this.name] = this.value;
            console.log('hData[' + this.name + ']= ' + hData[this.name]);
        }
        
    });
    return hData;
}

/**
 * Регистрация нового пользователя
 */
function registerNewUser() {
    var postData = getData('#registerBox');

    $.ajax({
       type: 'POST',
        async: true,
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if(data['success']) {
                alert('Регистрация прошла успешно!');
                //или можно было вывести data['message']

                //> блок в левом столбце
                $('#registerBox').hide();

                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['userName']);
                $('#userBox').show();


                //<
                //>страница заказа
                $('#loginBox').hide();
                $('#btnSaveOrder').show();
                //<

            }else {
                 alert(data['message']);

            }

        }
    });
}


/**
 * Регистрация нового пользователя в шаблоне Бутстрапа
 */

function registerNewUserShop() {
    var postData = getData('#registerBox');

    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if(data['success']) {
                alert('Регистрация прошла успешно!');
                //или можно было вывести data['message']

                //> блок в  футере
                $('#registerFooter').hide();

                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['userName']);
                $('#userBox').show();
                //<
                //>страница заказа
                $('#loginBox').hide();
                $('#btnSaveOrder').show();
                //<
                //>переадресация
                var link;
    link = $('#redirect').attr('href', '/');
     location.href = link;
                //<
               
            }else {
                $('.alert-error').fadeIn();

                alert(data['message']);

            }

        }
    });
}

/**
 * переадресация на главную страницу
 */
function logout() {
    console.log('Logout');
    $.ajax({
        type: 'POST',
        url: '/user/logout/',
        success: function() {
            console.log('user logged out');
            $('#registerBox').show();
            $('#userBox').hide();

        }
    });
}

/**
 *(способ№2) Переадресация на главную страницу
 */
// function logout() {
//     console.log('Logout');
//     var link;
//     link = $('#redirect').attr('href', '/');
//     location.href = link;
// }

/**
 * Авторизация пользователя
 */
function login() {
    var email = $('#loginEmail').val();
    var pwd = $('#loginPwd').val();

    var postData = 'email='+email+'&pwd=' +pwd;

    $.ajax({
        type:"POST",
        async: true,
        url: '/user/login/',
        data: postData,
        dataType: 'json',
        success: function (data) {
           
            if(data['success']){

                $('#registerBox').hide();
                $('#registerFooter').hide();
                $('#loginBox').hide();

                $('#userLink').attr('href', '/user/');

                $('#userBox').show();
                $('#userLink').html(data['displayName']);
                $('#headerName').html(data['displayName']);

                //>Заполняем  поля на странпице заказа
                $('#name').val(data['name']);
                $('#phone').val(data['phone']);
                $('#address').val(data['address']);
                //<

                $('#btnSaveOrder').show();
            }else{
                alert(data['message']);
            }
            if(data['admin'] == 1){
                $('#admin-panel').show();
                $('#orderHistory').show();
                
            }
         }
    });
}

/**
 * Регистрация пользователя
 */
function showRegisterBox() {

       if($('#registerBoxHidden').css('display') != 'block') {

         $('#registerBoxHidden').show();
     }else
         $('#registerBoxHidden').hide();
}
        //или таким способом:
        //$('#registerBoxHidden').slideToggle();


/**
 * Обновление данных пользователя
 */
function updateUserData() {
    console.log('js-updateUserData()');

    var phone   = $('#newPhone').val();
    var address = $('#newAddress').val();
    var pwd1    = $('#newPwd1').val();
    var pwd2    = $('#newPwd2').val();
    var curPwd  = $('#curPwd').val();
    var name    = $('#newName').val();

    var postData = {phone: phone,
                    address : address,
                    pwd1 : pwd1,
                    pwd2 : pwd2,
                    curPwd : curPwd,
                    name : name};

    $.ajax({
        type:'POST',
        async: true,
        url: '/user/update/',
        data: postData,
        dataType: 'json',
        success: function(data) {
            if(data['success']) {
                $('#userLink').html(data['userName']);
                alert(data['message']);
            }else{
                alert(data['message']);
            }
        }
    });
}

/**
 * Сохранение заказа
 */
function saveOrder() {
    var postData = getData('form');
    $.ajax({
        type: 'POST',
        async: true,
        url: '/cart/saveorder/',
        data: postData,
        dataType: 'json',
        success: function (data) {
            if(data['success']){
                alert(data['message']);
                document.location = '/';
            }else {
                alert(data['message']);
            }
        }
    });
}

/**
 * Показывать или прятать данные о заказе
 * @param id
 */
function showProducts(id) {
    var obj_Name = "#purchasesForOrderId_" + id;
    
    if($(obj_Name).css('display') != 'table-row' ) {
        $(obj_Name).show();
    }else{
        $(obj_Name).hide();
    }

}


/**
 * Увеличить или уменьшить В ПОЛЕ INPUT значение на единицу,  на странице Корзина
 */

$(document).ready(function() {
    $('#minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 0 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('#plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});



/**
 * Отправка письма на почту
 */
$(document).ready(function() {
    $("#form").submit(function() {
        var postData = $(this).serialize();
    $.ajax({
        type: 'POST',
        async: true,
        url: '/contact/send/',
        data: postData,
        success:function() {
            $(this).find("input").val("");
            $('#myModal').modal('show');
      $("#form").trigger("reset");
  }
});
        return false;
});
});



