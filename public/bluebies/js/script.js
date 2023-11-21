$(window).on('load', function () {

    // PAGE LOADER

    $('.pre-load').stop().animate({top: '-100%'}, 800, function(){
        $('.pre-load').css({'display':'none'});
        $('body').css({'overflow-y':'auto'});
        animateBox();
    });


    // OWL
    let aboutSlider = $('.about-holder .owl-carousel');
    if(aboutSlider.length) {
        if($('body').css('direction') === 'rtl'){
            aboutSlider.owlCarousel({
                items: 1,
                margin: 0,
                rtl: true,
                nav: false,
                loop: true,
                dots: true,
                autoplay: true,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                autoplayTimeout: 6000,
                autoplayHoverPause: true
            });
        }else {
            aboutSlider.owlCarousel({
                items: 1,
                margin: 0,
                rtl: false,
                nav: false,
                loop: true,
                dots: true,
                autoplay: true,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                autoplayTimeout: 6000,
                autoplayHoverPause: true
            });
        }
    }

    let partnersSlider = $('.partners-holder .owl-carousel');
    if(partnersSlider.length) {
        if($('body').css('direction') === 'rtl'){
            partnersSlider.owlCarousel({
                items: 4,
                margin: 30,
                rtl: true,
                nav: false,
                loop: true,
                dots: true,
                center: true,
                autoplay: true,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                autoplayTimeout: 5000,
                autoplayHoverPause: false
            });
        }else {
            partnersSlider.owlCarousel({
                items: 4,
                margin: 30,
                rtl: false,
                nav: false,
                loop: true,
                dots: true,
                center: true,
                autoplay: true,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                autoplayTimeout: 5000,
                autoplayHoverPause: false
            });
        }
    }

    let onBoardingSlider = $('.on-boarding.owl-carousel');
    if(onBoardingSlider.length) {
        if($('body').css('direction') === 'rtl'){
            onBoardingSlider.owlCarousel({
                items: 1,
                margin: 0,
                rtl: true,
                nav: false,
                loop: false,
                dots: true,
                autoplay: false
            });
        }else {
            onBoardingSlider.owlCarousel({
                items: 1,
                margin: 0,
                rtl: false,
                nav: false,
                loop: false,
                dots: true,
                autoplay: false
            });
        }
    }
    $('.customNextBtn').click(function() {
        onBoardingSlider.trigger('next.owl.carousel');
    })

});


$(function() {

    // WINDOW HEIGHT

    windowHeight();
    $(window).resize(function (){
        windowHeight();
    });
    $(window).scroll(function (){
        animateBox();
    });


    // SMOOTH SCROLL

    $('.smooth-a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 1000);
        return false;
    });


    // MIX IT UP PLUGIN
    let mixer, hasFilter = $('.contain-filter');
    if(hasFilter.length) {
        mixer = mixitup(hasFilter);
    }


    // MENU TOGGLE
    $('.mirror').click(function () {
        $('.navbar-collapse').removeClass('show');
        mixer.filter('all');
    });


    // SEARCH TOGGLE

    $('a[href="openSearch"]').click(function (e) {
        e.preventDefault();
        $('.search-form').addClass('opened');
    });
    $('body > *:not(.nav-holder)').click(function () {
        $('.search-form').removeClass('opened');
    });


    // COUNTER

    if($('#counter').length) {
        var a = 0;
        $(window).scroll(function () {
            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function () {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({countNum: $this.text()}).animate({
                        countNum: countTo
                    }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                        }
                    });
                });
                a = 1;
            }
        });
    }


    // COUNTDOWN

    if($('.countdown').length){
        $('.countdown').each(function () {
            var thisCount = $(this);

            var countDownDate = new Date(thisCount.attr('data-expire')).getTime();

            var x = setInterval(function() {
                var now = new Date().getTime();

                var distance = countDownDate - now;

                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                if(days > 0)
                    thisCount.find('.counter-holder .day').html(days);
                else
                    thisCount.find('.counter-holder .day').html('0');
                if(hours > 0)
                    thisCount.find('.counter-holder .hours').html(hours);
                else
                    thisCount.find('.counter-holder .hours').html('0');
                if(minutes > 0)
                    thisCount.find('.counter-holder .minutes').html(minutes);
                else
                    thisCount.find('.counter-holder .minutes').html('0');
                if(seconds > 0)
                    thisCount.find('.counter-holder .seconds').html(seconds);
                else
                    thisCount.find('.counter-holder .seconds').html('0');

                if (distance < 0) {
                    clearInterval(x);
                }
            }, 1000);
        });
    }


    // ACCORDION
    let accordion = $('.supportAccordion');
    if(accordion.length) {
        accordion.find('.card').click(function () {
            if($(this).hasClass('active'))
                $(this).removeClass('active');
            else {
                accordion.find('.card').removeClass('active');
                $(this).addClass('active');
            }
        });
    }


    // OPEN ON BOARDING MODAL

    let onBoarding = $('#onBoarding');
    if(onBoarding.length)
        onBoarding.modal('show');


    // BLOG COMMENT

    $('a[href="openComment"]').click(function (e) {
        e.preventDefault();
        $('.blue-mirror').addClass('show');
        $('.comment-form').addClass('show');
    });
    $('.blue-mirror').click(function () {
        $(this).removeClass('show');
        $('.comment-form').removeClass('show');
    });


    // GRID/LIST VIEW

    $('.view-btns a').click(function (e) {
        e.preventDefault();
        if($(this).parent().hasClass('active'))
            return false;
        else {
            $('.view-btns li').removeClass('active');
            $(this).parent().addClass('active');
        }
        if($(this).attr('href') === 'listView')
            $('.view-holder').addClass('list-view');
        else
            $('.view-holder').removeClass('list-view');
    });


    // UPLOAD FILES
    $('.file-uploader').change(function (event) {
        if($(this).hasClass('single')) {
            $(this).parents('.files-upload-block').find('.uploaded-block').remove();
        }
        $(this).parents('.files-upload-block').append('<div class="uploaded-block"><button class="close">&times;</button><p class="m-0">'+ event.target.files[0].name +'</p></div>');
        removeUplodedFile();
    });
    removeUplodedFile();
    function removeUplodedFile() {
        $('.uploaded-block .close').click(function () {
            $(this).parents('.uploaded-block').remove();
        });
    }


    // OPEN SINGLE MESSAGE

    $('a[href="openMessage"]').on('click', function (e) {
        e.preventDefault();
        $('#single-holder').collapse('show');
        $('.messages-holder .single-message').removeClass('hide-down');
    });

    $('a[href="closeChat"]').on('click', function (e) {
        e.preventDefault();
        $('#single-holder').collapse('hide');
        $('.messages-holder .single-message').addClass('hide-down');
    });


    // TOOLTIP
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

});


function animateBox() {
    let scrollVar = $(document).scrollTop();

    $('.animate-box').each(function (){
        let boxVal = $(this).offset().top - $(window).height() + 50;

        if (scrollVar > boxVal){
            if(!$(this).hasClass('animated')) {

                if($(this).hasClass('left-in')) {
                    $(this).addClass('animated fadeInLeft');
                }else if($(this).hasClass('right-in')) {
                    $(this).addClass('animated fadeInRight');
                }else {
                    $(this).addClass('animated fadeInUp');
                }

            }
        }
    });
}

function windowHeight() {
    $('.win-height').css({'height': $(window).height()});
}