$(document).ready(function () {

    new WOW().init();


    /*---------- Mobile Menu ----------*/

    $(".hamb").on("click", function (e) {
        $(".menu_hamb").fadeIn(function () {
        });
        $(".hamb").css('display', 'none');
        $(".hamb_close").css('display', 'block');
    });

    $(".hamb_close").on("click", function (e) {
        $(".menu_hamb").fadeOut(100);
        $(".hamb_close").css('display', 'none');
        $(".hamb").css('display', 'block');
    });

    $(".menu_hamb").on("click", function (e) {
        $(".menu_hamb").fadeOut(100);
        $(".hamb_close").css('display', 'none');
        $(".hamb").css('display', 'block');
    });


    /*---------- Thanks Popup ----------*/

    $("#popup_thanks .popup_block").on("click", function (e) {
        e.stopPropagation();
    });

    $("#popup_thanks .close, #popup_thanks ").on("click", function (e) {
        e.preventDefault();
        $("#popup_thanks").fadeOut(function () {
            $("body").css("overflow", "auto");
        });
    });

    /*---------- PopUp Script ----------*/

    if ($('input').hasClass('phone_maska')) {
        $('.phone_maska').mask("+7 (999) 999-99-99");
    }

    /*----------Плавные якоря----------*/

    $(function () {

        $('#to_top').on('click', function (e) {
            $('html,body').stop().animate({scrollTop: $('#top_point').offset().top}, 1000);
            e.preventDefault();
        });

        $('.to_about_company').on('click', function (e) {
            $('html,body').stop().animate({scrollTop: $('#about_company').offset().top}, 1000);
            e.preventDefault();
        });

        $('.to_service').on('click', function (e) {
            $('html,body').stop().animate({scrollTop: $('#service').offset().top}, 1000);
            e.preventDefault();
        });

        $('.to_steps').on('click', function (e) {
            $('html,body').stop().animate({scrollTop: $('#steps').offset().top}, 1000);
            e.preventDefault();
        });

        $('.to_recommend').on('click', function (e) {
            $('html,body').stop().animate({scrollTop: $('#recommend').offset().top}, 1000);
            e.preventDefault();
        });

        $('.to_map').on('click', function (e) {
            $('html,body').stop().animate({scrollTop: $('#map').offset().top}, 1000);
            e.preventDefault();
        });

    });

    /*----------Слайдер отзывов----------*/
    /*
    * т.к. показывать слайдер надо и на десктопах тоже, то от условия ширины нет смысла
    * задаем настройки по умолчанию для слайдера показывать 3 слайда
    * и ловим по брекпоинту 1024 (если меньше) показывать 1 слайд
    *
    * */
    $('.recommend_block').slick({
        dots: false,
        slidesToShow: 3,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*if($(this).width() < 769){
        $('.recommend_block').slick({
            dots: false,
            slidesToShow: 2,
            infinite: false,
            responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
              }
            }
          ]
          });
    }*/

    /*----------Отправка форм----------*/

    $(".ajax_lead_form").submit(function (e) {
        e.preventDefault();
		let spanErrors = $('.ajax_lead_form span.errors');

        var th = $(this);
        $.ajax({
			type: "POST",
			url: "/ajax/",
			data: th.serialize(),
			success: function (data) {
				//console.log(data);
				if (data.status) {
					console.log('Форма успешно отправлена!');
					$('#popup_thanks').fadeIn();
					setTimeout(function () {
						th.trigger("reset");
					}, 1000);

				} else {
					spanErrors.text(data.result);
					console.log(data.result);
				}
			},
			error: function (jqXHR, exception) {
				console.log(jqXHR);
				spanErrors.text(jqXHR.status + ": Ошибка при отправки формы");

			}
		});

    });

    /*----------Яндекс.Карта----------*/
    /*
    ymaps.ready(function () {

        if($(this).width() < 600){

            var myMap = new ymaps.Map('map', {
                center: [55.728712, 37.653149 ],
                zoom: 17,
                controls: []
            }, {
                searchControlProvider: 'yandex#search'
            }),

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {

            }, {

            });
        }

        else{

            var myMap = new ymaps.Map('map', {
                center: [55.728740, 37.651452 ],
                zoom: 17,
                controls: []
            }, {
                searchControlProvider: 'yandex#search'
            }),

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {

            }, {

            });

        }

        var myPlacemark1 = new ymaps.Placemark([55.727582, 37.653451], {
                balloonContent: 'Россия, 15114, г. Москва, Дербеневская наб'}, {
                iconLayout: 'default#image',
                iconImageHref: 'images/icon_map.png',
                iconImageSize: [31, 38],
                iconImageOffset: [-20, -62]
            });

        var zoomControl = new ymaps.control.ZoomControl({
        options: {
              size: "small",
              position: {
                bottom: 100,
                right: 25
              }
            }
        });

        var geolocationControl = new ymaps.control.GeolocationControl({
            options: {
              noPlacemark: true,
              position: {
                bottom: 50,
                right: 25
              }
            }
        });
        geolocationControl.events.add('locationchange', function (event) {
            var position = event.get('position'),
                locationPlacemark = new ymaps.Placemark(position);

            myMap.geoObjects.add(locationPlacemark);
            myMap.panTo(position);
        });

        // myMap.geoObjects.add(myPlacemark);
        myMap.geoObjects.add(myPlacemark1);
        myMap.behaviors.disable('scrollZoom');
        myMap.controls.add(zoomControl);
        myMap.controls.add(geolocationControl);
    });
    */

});