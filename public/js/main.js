
function ScrollEffect() {
    var nav = $(".navbar");
    $(window).scroll(function () {

        if($(window).scrollTop() >= nav.height())
        {
            if(! nav.hasClass('scroll-effect'))
                nav.addClass('scroll-effect'); // performance issue

        }
        else
        {
            nav.removeClass('scroll-effect');
        }

    });
}
function ResizeEffect() {
    var list = $(".social-icons");
    if($(window).width() <= 992)
    {

        if(! list.hasClass('change-social-postion'))
            list.addClass('change-social-postion');

    }
    $(window).resize(function () {

       // console.log($(window).width());



        if($(window).width() <= 992)
        {

            if(! list.hasClass('change-social-postion'))
                list.addClass('change-social-postion');

        }
        else
        {
            if(list.hasClass('change-social-postion'))
                list.removeClass('change-social-postion');
        }
    });

}
function Resizesidebar() {

    var side = $(".sidebar");
    var view = $(".view");

    if($(window).width() <= 768) {

        if (!side.hasClass('hide-me'))
            side.addClass('hide-me');
    }


    $(window).resize(function () {

        // console.log($(window).width());



        if($(window).width() <= 768)
        {

            if(! side.hasClass('hide-me'))
                side.addClass('hide-me');

            if(view.hasClass('col-md-9'))
            {
                view.removeClass('col-md-9');
                view.addClass('col-md-12');
            }


        }
        else
        {
            if(side.hasClass('hide-me'))
                side.removeClass('hide-me');

            if(view.hasClass('col-md-12'))
            {
                view.removeClass('col-md-12');
                view.addClass('col-md-9');
            }

        }
    });

}

function resources() {


    var src1 = $(".img1").attr("src");

    if(src1 == " ")
    {
        $(".img1").addClass("hide-me");
    }


    var src2 = $(".img2").attr("src");
   // alert(src2);
    if(src2 == " ")
    {
        $(".img2").addClass("hide-me");
    }

}

$(function () {  // main

    'use strict';

      // $('html').niceScroll();
    /////////////////////////////////////////////////////
    ScrollEffect();
    ResizeEffect();
    Resizesidebar();
    resources();
    /////////////////////////////////////////////////////


});


