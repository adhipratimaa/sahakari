$(document).ready(function() {
    $('.member-slider').slick({

        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1500,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots:false,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }

        ]

    });
});



$(document).ready(function() {
    $('.banner-slider').slick({

        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        autoplay: true,
        autoplaySpeed: 7000,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots:true,
    
    });
});




jQuery(document).ready(function(){
    function resizeForm(){
        var width = (window.innerWidth > 0) ? window.innerWidth : document.documentElement.clientWidth;
        if(width > 992){
            var $el = $('.banner-slider-container figure');
            $(window).on('scroll', function () {
                var scroll = $(document).scrollTop();
                $el.css({
                    'background-position':'80% '+(-.2*scroll)+'px'
                });
            });

        } else {

        }    
    }
    window.onresize = resizeForm;
    resizeForm();
});


// parallax script


$(function() {
    var $el = $('.banner-slider-container figure');
    $(window).on('scroll', function () {
        var scroll = $(document).scrollTop();
        $el.css({
            'background-position':'80% '+(-.2*scroll)+'px'
        });
    });
  });




//   gallery popup script

  $(document).ready(function(){
    $('.gal-detail-link').magnificPopup({
        type: 'image',
      mainClass: 'mfp-with-zoom', 
      gallery:{
                enabled:true
            },
    
      zoom: {
        enabled: true, 
    
        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function
    
        opener: function(openerElement) {
    
          return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }
    
    });
    
    });



    // sticky class script

    // $(window).scroll(function() {    
    //     var scroll = $(window).scrollTop();
    
    //     if (scroll >= 300) {
    //         $("#header").addClass("sticky");
    //     } else {
    //         $("#header").removeClass("sticky");
    //     }

    // });


    // header animation 

    // var prevScrollpos = window.pageYOffset;
    // window.onscroll = function() {
    // var currentScrollPos = window.pageYOffset;
    // if (prevScrollpos > currentScrollPos) {
    //     document.getElementById("header").style.top = "0";
    // } else {
    //     document.getElementById("header").style.top = "-205px";
    // }
    // prevScrollpos = currentScrollPos;
    // }


    


// main pull menu //





var main = function() {
    $('.top-menu-bar').click(function() {
        $("body").addClass("overlay");

        $('.main-nav').animate({ left: '0px' }, 300);
        $('body').animate({ left: '250px' }, 300);
    });
    $('.close-btn').click(function() {
        $("body").removeClass("overlay");

        $('.main-nav').animate({ left: '-290px' }, 300);
        $('body').animate({ left: '0px' }, 300);

    });
};

$(document).ready(main);




$(document).ready(function() {
    $(".main-nav ul li a").click(function() {
            var link = $(this);
            var closest_ul = link.closest("ul");
            var parallel_active_links = closest_ul.find(".active")
            var closest_li = link.closest("li");
            var link_status = closest_li.hasClass("active");
            var count = 0;

            closest_ul.find("ul").slideUp(function() {
                    if (++count == closest_ul.find("ul").length)
                            parallel_active_links.removeClass("active");
            });

            if (!link_status) {
                    closest_li.children("ul").slideDown();
                    closest_li.addClass("active");
            }
    })
})
