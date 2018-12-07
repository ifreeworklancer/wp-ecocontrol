import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal'
import 'flickity/dist/flickity.css';

window.jQuery = window.$ = jquery;

require('bootstrap');

(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').on('click', function () {
        $(this).toggleClass('active');
        var menu = $('.menu');
        if (menu.is(':visible')) {
            menu.slideUp();
        } else {
            menu.slideDown().css('display', 'flex');
        }
    })

    /**
     * Form-label
     */

    $('.form-control').on('focus', function () {
        $(this).parent().addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parents('.form-group').addClass('in-focus');
        } else {
            $(this).parents('.form-group').addClass('in-focus');
        }
    });

    /**
     * Tabs news
     */

    $('.news-tabs-header-list__item').eq(0).addClass('active');
    $('.news-tabs-body-item').eq(0).addClass('active');
    $('.news-tabs-header-list').on('click', 'li:not(.active)', function () {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('.news-tabs').find('.news-tabs-body-item').slideUp().eq($(this).index()).slideDown();
    });

    /**
     * Form-sum
     */
    $('.form-sum-choice-item').eq(2).addClass('active');
    $('.form-sum-choice').on('click', 'li:not(.active)', function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('#sum-value').val($(this).data('value'));
        $('#form-sum-final-value').text($('#sum-value').val());
    })

    $('#sum-value').change(function () {
        $('#form-sum-final-value').text($(this).val())
    })

    /**
     * Scroll Link
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();

        var id = $(this).attr('href');

        if (id.length > 1) {

            var top = $(id).offset().top;

            $('body,html').animate({
                scrollTop: top
            }, 1500);

            $('.burger-menu').removeClass('active');
            $('.menu').removeClass('active');
        }
    });


    /**
     * Sliders
     */
    if ($('.intro-slider')) {

        var elem1 = document.querySelector('.intro-slider');
        if (elem1) {

            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                cellAlign: 'left',
                contain: true,
                draggable: true,
                wrapAround: true,
            });


            var nextArrowIntro = document.querySelector('.slider-arrow-item--next-intro');

            nextArrowIntro.addEventListener('click', function () {
                flkty1.next(true, false);
            });
        }
    }

    //Popular
    if ($('.appeal-maps-slider--popular')) {

        var elem2 = document.querySelector('.appeal-maps-slider--popular');
        if (elem2) {

            const flkty2 = new Flickity(elem2, {
                prevNextButtons: true,
                cellAlign: 'left',
                cellSelector: '.appeal-maps-slider-col',
                contain: true,
                wrapAround: true,
                pageDots: false
            });
        }
    }

    //New
    if ($('.appeal-maps-slider--new')) {

        var elem3 = document.querySelector('.appeal-maps-slider--new');
        if (elem3) {

            const flkty3 = new Flickity(elem3, {
                prevNextButtons: true,
                cellAlign: 'left',
                cellSelector: '.appeal-maps-slider-col',
                contain: true,
                wrapAround: true,
                pageDots: false
            });
        }
    }

    //
    if ($('.appeal-maps-slider--performed')) {

        var elem4 = document.querySelector('.appeal-maps-slider--performed');
        if (elem4) {

            const flkty4 = new Flickity(elem4, {
                prevNextButtons: true,
                cellAlign: 'left',
                cellSelector: '.appeal-maps-slider-col',
                contain: true,
                wrapAround: true,
                pageDots: false
            });
        }
    }

    //maps
    if($('#page-form-appeal__maps').length > 0) {
        var element = document.getElementById('page-form-appeal__maps');

        var map = L.map(element);


        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var target = L.latLng('50.4183', '30.47579');


        var theMarker = {};

        map.on('click',function(e){
            var lat = e.latlng.lat;
            var lon = e.latlng.lng;

            $("[name='lat']").val(lat);
            $("[name='lon']").val(lon);

            if (theMarker != undefined) {
                map.removeLayer(theMarker);
            };

            theMarker = L.marker([lat,lon]).addTo(map);
        });

        map.setView(target, 15);
    }

    if($('#appeal-map').length > 0) {
        var appealElement = document.getElementById('appeal-map');

        var appealMap = L.map(appealElement);


        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(appealMap);

        var appealLat = $("[name='appealLat']").val();
        var appealLon  = $("[name='appealLon']").val();

        var appealTarget = L.latLng(appealLat, appealLon);

        appealMap.setView(appealTarget, 20);

        L.marker(appealTarget, {}).addTo(appealMap);


    }

})(jQuery)