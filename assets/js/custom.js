jQuery(function ($) {

    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        rtl: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

    var swiper = new Swiper(".mySwiper1", {
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

    var swiper = new Swiper(".mySwiper2", {
        slidesPerView: "1",
        spaceBetween: 10,
        breakpoints: {
            '480': {
                slidesPerView: 3,
                spaceBetween: 30,},
            '@640': {
                slidesPerView: 5,
                spaceBetween: 50, },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".mySwiper3", {
        slidesPerView: "1",
        spaceBetween: 10,
        breakpoints: {
            '480': {
                slidesPerView: 3,
                spaceBetween: 30,},
            '@640': {
                slidesPerView: 5,
                spaceBetween: 50, },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });





    /*(function ($) {
        "use strict";
        $(document).ready(function () {
            $('.menu-mobile-menu-container .menu-item-has-children>ul').after('<svg class="mobileMenuIcon" width="15"  height="15" fill="rgb(70, 103, 122)" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg"><title/><path d="M81.8457,25.3876a6.0239,6.0239,0,0,0-8.45.7676L48,56.6257l-25.396-30.47a5.999,5.999,0,1,0-9.2114,7.6879L43.3943,69.8452a5.9969,5.9969,0,0,0,9.2114,0L82.6074,33.8431A6.0076,6.0076,0,0,0,81.8457,25.3876Z"/></svg>');

            $('.mobileMenuBars').click(function () {
                $('.menu-mobile-menu-container').css('right', '0');
                $('.mobileMenuBars').css('z-index', '99');
                $('.mobileMenuOverlay').css('display', 'block');
            });
            $('.mobileMenuOverlay').click(function () {
                $('.menu-mobile-menu-container').css('right', '-3000px');
                $('.mobileMenuBars').css('z-index', '999999');
                $('.mobileMenuOverlay').css('display', 'none');
            });
        });


        $('document').ready(function () {
            var elements = $('.menu-mobile-menu-container .menu-item-has-children .mobileMenuIcon');
            for (var i = 0, len = elements.length; i < len; i++) {
                elements[i].onclick = function (elem) {
                    var submenu = elem.target.previousElementSibling;
                    $(submenu).slideToggle("slow");
                    elem.target.classList.toggle('open');
                    var parentelem = elem.target.nextElementSibling;
                    parentelem.classList.toggle('opened');
                }
            }
        });
    })(jQuery)*/


    $(document).ready(
        $('.toggle-menu').click(function(){
            var value = $(this).html();
            $('.nav-list').css('right',"0");
        })

    );

    $(document).ready(
        $('.close-button').click(function(){
            var value = $(this).html();
            $('.nav-list').css('right',"-280px");
        })

    );




    function myFunction() {
        var element = document.getElementsByClassName("menu-item-has-children");
        element.classList.add("dropdown-list");
    }

    var menustatus=0
    $('.menu-item-has-children').click(function(event){
        if(screen.availWidth<1024){
            /*tag a not work*/
            event.preventDefault()
            if(menustatus ==0){
                $(this).children('ul').css('display',"block");
                menustatus++
            }else{
                $(this).children('ul').css('display',"none");
                menustatus--
            }
        }

    })



});



