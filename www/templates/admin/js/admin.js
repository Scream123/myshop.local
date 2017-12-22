/*
*Получение данных с формы
*
 */
function  getData(obj_form) {
    var hData = {};
    $('input, textarea, select', obj_form).each(function() {
        if (this.name && this.name !='') {
            hData[this.name] = this.value;
            console.log('hData[' + this.name + ']= ' + hData[this.name]);
        }
        //else{

            // $('#newCategoryName').css('border', '2px solid red');
            //     $('p').text('Заполните поле!');
        //}
    });
    return hData;
}

// $('#newCategoryName').on('blur',function(){
//     if($(this) == ''){
//         $($(this).css('border', '2px solid red'));
//     }else{
//         $(this).css('border', '2px solid grey');
//         alert('Заполните все поля!');
//     }
// });

/**
 * Добавление новой категории
 */
function newCategory() {
    var postData = getData('#blockNewCategory');

    $.ajax({
       type: 'POST',
        async: true,
        url: '/admin/addnewcat/',
        data: postData,
        dataType: 'json',
        success:function(data) {

            if(data['success']) {
                console.log('Успех!');

                alert(data['message']);
                $('#newCategoryName').val('');

            }else {
                console.log('неудача');
                alert(data['message']);
            }


        }
    });
}

/**
 * Обновление данных категории
 * @param itemId ID категории
 */
function updateCat(itemId) {

    var parentId = $('#parentId_' + itemId).val();
    var newName = $('#itemName_' + itemId).val();
    var postData = {itemId: itemId, parentId: parentId, newName: newName};

    $.ajax({
        type: 'POST',
        async: true,
        url:'/admin/updatecategory/',
        data: postData,
        dataType: 'json',
        success: function (data) {
            console.log('Категория обновлена');
            alert(data['message']);
        }
    });
}

/**
 * Добавление нового продукта
 */

function addProduct() {

    var itemName = $('#newItemName').val();
    var itemPrice = $('#newItemPrice').val();
    var itemCatId = $('#newItemCatId').val();
    var itemDesc = $('#newItemDesc').val();

    var  postData = {itemName: itemName, itemPrice: itemPrice,
                     itemCatId: itemCatId, itemDesc: itemDesc};

    $.ajax({
        type: 'POST',
        async: true,
        url: '/admin/addproduct/',
        data: postData,
        dataType: 'json',

        success: function (data) {

            // $.each(postData, function(key, value) {
            //     $("#blockAddEditProduct").html(data);
            // $('.tBody2').append('<tr><td>'+ $('td.iteration').text()+'</td>'+'<td>'+ $('td#itemId').text()+ '<td>'+postData.itemName+'</td><td>'+postData.itemName+'</td>'+'<td>'+postData.itemPrice+'</td>'+
            //     '<td>'+postData.itemCatId+'</td>'+ '<td>'+postData.itemDesc+'</td></tr>');

               // $('.tBody2 tr').append('<td>'+value+'</td>');
            // });
            alert(data['message']);
            if(data['success']) {
                uploadPage();


                $('#newItemName').val('');
                $('#newItemPrice').val('');
                $('#newItemCatId').val('');
                $('#newItemDesc').val('');

            }
        }

    });
}
// $('.tBody2').submit(function(e){
//    e.preventDefault();
//     var data = $(this).serialize();
//     $.ajax({
//         type: 'POST',
//         url: '/admin/addproduct/',
//         data: data,
//         success:function (result) {
//             $('.tBody2').html(result);
//
//         }
//
//     })
// });
//
function uploadPage() {
    $.ajax({

        cache: false,
        success: function(html){
            $("#blockAddEditProduct").html(html);
        }
    });

}
function updateData () {
    $.ajax({

        "success": function (response) {
            $("#blockAddEditProduct").html(response);
        }
    });
}


function deleteProduct(itemId) {

    $.ajax({
        type: 'POST',
        async: true,
        url: "/admin/deleteproduct/" +itemId+'/',
        dataType: 'json',
        success: function (data) {

            console.log("deleteProduct(" +itemId+")");
            if (data['success']) {

                alert(data['message']);

                $('#itemId').parent().remove();


            }

        }

    });

}

/**
 * Изменения данных продукта
 * @param itemId
 */
function  updateProduct(itemId) {

    var itemName = $('#itemName_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).val();
    var itemCatId = $('#itemCatId_' + itemId).val();
    var itemDesc = $('#itemDesc_' + itemId).val();
    var itemStatus = $('#itemStatus_' + itemId).attr('checked');
    if(!itemStatus) {
        itemStatus = 1;
    }else {
        itemStatus = 0;
    }

    var postData = {itemId: itemId, itemName: itemName, itemPrice: itemPrice,
                    itemCatId: itemCatId, itemDesc: itemDesc, itemStatus: itemStatus};

    $.ajax({
        type: 'POST',
        async: true,
        url: '/admin/updateproduct/',
        data: postData,
        dataType: 'json',
        success:function (data) {
            alert(data['message']);

        }
    });


}




// $(":file").filestyle({
//
//     input: false,
//     iconName: "icon-camera icon-white",
//     buttonName: "btn-primary btn-large"
// });


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
 * Изменение статуса заказа
 *
 */
function updateOrderStatus(itemId) {
    var status = $('#itemStatus_' + itemId).attr('checked');
    //var checkIn = $('#check' + itemId);
    if(!status) {
        status = 0;
    }else {
        status = 1;

    }

    var postData = { itemId: itemId, status: status};

    $.ajax({

        type: 'POST',
        async: true,
        url: '/admin/setorderstatus/',
        data: postData,
        dataType: 'json',
        success:function (data) {
            if(!data['success']) {
                alert(data['message']);
            }

        }
    });
}

/**
 * Изменение информации об оплате заказа
 */
function updateDatePayment(itemId) {
    var datePayment = $('#datePayment_' + itemId).val();
    var postData = {itemId: itemId, datePayment: datePayment};

    $.ajax({

        type: 'POST',
        async: true,
        url: '/admin/setorderdatepayment/',
        data: postData,
        dataType: 'json',
        success:function (data) {
            
            if(!data['success']) {
                alert(data['message']);
            }


        }
    });
}

/**
 * Авторизация админа
 */
function loginAdmin() {

    var email = $('#loginEmail').val();
    var pwd = $('#loginPwd').val();

    var postData = 'email='+email+'&pwd=' +pwd;

    $.ajax({
        type:"POST",
        async: true,
        url: '/admin/loginforadmin/',
        data: postData,
        dataType: 'json',
        success: function (data) {
            if(data['success']){
              //  $('#registerBox').hide();

              console.log(data);

                $('#adminLink').attr('href', '/admin/');
                $('#adminLink').html(data['displayName']);
                $('#adminBox').show();
                 $('#leftColumnAdmin').show();
               // $('#modal-1').show();
                $('#blockNewCategory').show();

               //$("#leftColumnAdmin").css("display", "block");

                $('#loginAdmins').hide();

                
                //>Заполняем  поля на странпице заказа
                // $('#name').val(data['name']);
                // $('#phone').val(data['phone']);
                // $('#address').val(data['address']);
                //<
                // $('#btnSaveOrder').show();
            }else{
                alert(data['message']);
            }
        }
    });
}


/**
 * переадресация на страницу Админ-панели
 */
function logoutForAdmin() {
    console.log('Logout');
    $.ajax({
        type: 'POST',
        url: '/admin/logoutforadmin/',
        success: function() {
            console.log('admin logged out');
            //$('#registerBox').show();
            $('#adminBox').hide();
        }
    });
}
/**
 * Выход из главной страницы Админ-панели и переадресация на главную страницу
 */
 function logoutAdmin() {
     console.log('Logout');
     var link;
     link = $('#redirect').attr('href', '/');
     location.href = link;
 }

function createXML() {

    $.ajax({
        type: 'POST',
        async: true,
        url: '/admin/createxml/',
        datatype: 'html',
        success:function (data) {
            $('#xml-place').html(data);
            window.open('http://www.myshop.local/xml/products.xml', '_blank');
        }
    });
}


