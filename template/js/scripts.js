$(function(){

    "use strict";

    


    $('.plans-list').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay:true,
        fade:true,
        speed: 500,
        arrows: true
        
    });



    $('.footer-slider').slick({
        slidesToShow:4,
        slidesToScroll: 4,
        dots: true,
        infinite: true,
        autoplay:true,
        speed: 500,
        arrows: false
        
    });



    $('[data-toggle="popover"]').popover({trigger:"hover",container: 'body'}); 



    if ($('body').length) {
        $(window).on('scroll', function() {
            var winH = $(window).scrollTop();

            $('.main1').waypoint(function() {
                
            }, {
                offset: '80%'
            });
        });
    }




    function CharsStart() {

        $('.js-chart').easyPieChart({
            barColor: false,
            trackColor: false,
            scaleColor: false,
            scaleLength: false,
            lineCap: false,
            lineWidth: false,
            size: false,
            animate: 1500,

            onStep: function(from, to, percent) {
                $(this.el).find('.js-percent').text(Math.round(percent));
            }
        });
    }

    $('.form-checkbox label').change(function(event) 
    {
        $(this).toggleClass('checked');
    }); 


    $('ul.ps-list-deposit > li').on('click', function(event) {
        $('ul.ps-list-deposit > li').removeClass('active');
        $(this).addClass('active');
        
    });



   $(".header-menu li a").each(function(){
		var location = window.location.href;
		var link = this.href;
		if(location == link){
			$(this).addClass("active");
		}
	});


   $(".account-menu li a").each(function(){
		var location = window.location.href;
		var link = this.href;
		if(location == link){
			$(this).addClass("active");
		}
	});




    
    $(document).on('click', '.calc-modal', function(event) {
        var box = $('.calc-box');
        if (box.hasClass('fadeIt')) {
            box.removeClass('fadeIt');
        }
        else {
           box.addClass('fadeIt');
        }
        
        //event.preventDefault();
        /* Act on the event */
    });

    $(document).on('click', 'ul.faq-list > li', function(event) {
        $(this).toggleClass('active');
        $(this).find('i').text($(this).hasClass('active')?'-':'+');
        $(this).find('p').slideToggle('400');
        event.preventDefault();
    });
    $(document).on('click', '.faq_list-item-btn > a', function(event) {

        $(this).parent().parent().slideUp('400', function() {});
        event.preventDefault();
    });

   



});
























   


