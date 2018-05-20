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
        console.log(all);
        console.log(global);
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

