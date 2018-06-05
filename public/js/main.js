$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#menu-center a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu-center ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
//
$(document).ready(function() {
    $(".js-example-diacritics").select2();
    $('.js-example-diacritics').select2({
        minimumResultsForSearch: -1
    });

});
//

// $(function() {
//     $('.btn_edit_save').click(function() {
//
//         $.ajax({
//             type: "POST",
//             url: 'confirm.php',
//             data:{
//                 col :arr,
//                 table: $(".table").attr("id")
//             },
//             success: function(data) {
//                 $('#result').html(data);
//             }
//         });
//     });
// });

//
$(document).ready(function(){
    $('#sel_search').change(function(){
        if($(this).val() == 1) {
            $('#inp_search').val('');
            $('#inp_search').attr("placeholder", "Начните вводить адрес места регистрации, начиная с области");
        }
        else{
            $('#inp_search').val('');
            $('#inp_search').attr("placeholder", "Введите ФИО кандидата");
        }
    });
});
//
$(document).ready(function(){
    $('.content_foot').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).addClass('active_link_footer');
        }
    });
});
//
$(document).ready(function(){
    $('.nav_main').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).addClass('active_link');
        }
    });
});
//
$(document).ready(function(){
    $('.ul_lk').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).parent().addClass('active_link_lk');
        }
    });
});
//
$('#search_part').on('keyup',function() {
    var value = $(this).val();
    if (value != ''){
        $('#more_part').addClass('d-none');
    }
    else{
        $('#more_part').removeClass('d-none');
    }
    $.ajax({
        type : 'post',
        url :'consignment/search',
        data : {'search':value},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            // console.log(date);
            $('#result').html(data);
        }
    });
});
//
$(document).ready(function(){
    var global = 10;
    var all = $('#more_part').attr('date-param');
    $('#more_part').click(function () {
        global = parseInt(global) + 10;
        // console.log(all);
        // console.log(global);
        if( parseInt(all) <= parseInt(global))
        {
            $('#more_part').hide();

        }
        $.ajax({
            type : 'post',
            url :'/consignment/more',
            data : {'more':global},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#result').html(data);
            }
        });
    });
});
//
$(document).ready(function(){
    $( ".show_form" ).click(function() {
        $( ".change_form" ).toggle();
    });
});
//
$(document).ready(function Hide_pass_div(){
    $( "#show_pass_div" ).click(function() {
        $( ".hide_pass_div" ).toggle(180);
    });
});
//
$('#save_date_lk').click(function() {
    var name = $('#fio_inp').val();
    var email = $('#email_inp').val();
    $.ajax({
        type : 'post',
        url :'/personal/update',
        data :
            {
                'name':name,
                'email':email
             },
        success: function (data) {
            // console.log(data);
            $('#data_div').html(data);
            $( ".alert_msg" ).fadeOut(2500);
        }
    });
});
//
$('#bnt_change_pass').click(function() {
    var po = $('#password_old').val(); // старый пароль
    var pn = $('#password_new').val(); // новый пароль
    var pre = $('#password_re').val(); // повтор пароля
    $.ajax({
        type : 'post',
        url :'/personal/password',
        data :
            {
                'po':po,
                'pn':pn,
                'pre':pre
             },
        success: function (data) {
            // console.log(data);
            $('#data_pass_div').html(data);
            $( ".alert_msg" ).fadeOut(2500);
        }
    });
});
//
$('#save_date2_lk').click(function() {
    var series = $('#pasp_s_inp').val(); // Серия
    var number = $('#pasp_n_inp').val(); // Номер
    var day = $('#day_select').val(); // День
    var month = $('#month_select').val(); // Месяц
    var year = $('#year_select').val(); // Год
    $.ajax({
        type : 'post',
        url :'/personal/update2',
        data :
            {
                'series':series,
                'number':number,
                'day':day,
                'month':month,
                'year':year
             },
        success: function (data) {
            console.log(data);
            $('#data_div2').html(data);
            $( ".alert_msg" ).fadeOut(2500);
        }
    });
});
//
$(document).ready(function scrolldown(){
    var div = $("#scroll_div");
    div.scrollTop(div.prop('scrollHeight'));
});
//
$('#send_msg').click(function() {
    var body = $('#inp_msg').val(); // Текст сообщения
    var url = window.location.href;
    var div = $("#scroll_div");
    $.ajax({
        type : 'post',
        url :url,
        data :
            {
                'body':body
            },
        success: function (data) {
            if (data){
                $('#inp_msg').val('');
                $('#scroll_div').load('/message/'+data+' #msg_cont');
                var objDiv = $("#scroll_div");
                var h = objDiv.get(0).scrollHeight;
                objDiv.animate({scrollTop: h});
            }
        }
    });
})
//
$('#inp_msg').keypress(function(e) {
        if(e.which == 13)//Enter key pressed
        {
            var body = $('#inp_msg').val(); // Текст сообщения
            var url = window.location.href;
            $.ajax({
                type : 'post',
                url :url,
                data :
                    {
                        'body':body
                    },
                success: function (data) {
                    $('#inp_msg').val('');
                    $('#scroll_div').load('/message/'+data+' #msg_cont');
                    var objDiv = $("#scroll_div");
                    var h = objDiv.get(0).scrollHeight;
                    objDiv.animate({scrollTop: h});
                }
            });
        }
});