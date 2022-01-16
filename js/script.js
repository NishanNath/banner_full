$(function(){
    //preloader
    $(window).ready(function(){
      $('.preloader').delay(1000).fadeOut(1000);
    });
    //smooth scroll
    $('a[href*="#"]').on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 0
      }, 1000);
    });



    $(window).scroll(function() {
      var scrollDistance = $(window).scrollTop();
      $('section').each(function(i) {
        if ($(this).position().top <= scrollDistance) {
            $('#my_nav ul .active ').removeClass('active');
            $('#my_nav ul li').eq(i).addClass('active');
        }
      });
    }).scroll();

  

   $(document).ready(function(){
        $('.custom_nav ul li').click(function(){
            $('li').removeClass("active");
            $(this).addClass("active");
        });
    });
   //nav scroll
    var menuoffset=$('.custom_nav').offset().top;
    $(window).on('scroll',function(){
        var windowScroll=$(window).scrollTop();
        if (windowScroll > menuoffset){
            $('.custom_nav').addClass('fixed_nav');
        }
        else{
            $('.custom_nav').removeClass('fixed_nav');
        }
        //back to top
        if (windowScroll>120) {
          $('.b2t').fadeIn(500);
        }
        else{
          $('.b2t').fadeOut(500);
        }
        
    });



    //back to top
    $('.b2t').on('click',function(){
      $('html,body').animate({
        scrollTop:0
      });
    });
     $('.custom_nav ul li').on('click',function(){
      $('.custom_nav ul li .active').animate({
        scrollTop:50
      });
    });
      


   //slick
    $('#banner').slick({
        infinite: true,
        dots: true,
        speed: 800,
        fade: true,
        arrows:true,
        autoplay:true,
        autoplaySpeed:5000,
        dotsClass:'banner_dot',
        pauseOnHover:false,
        prevArrow:'<i class="fas fa-long-arrow-alt-left leftarrow"></i>',
        nextArrow:'<i class="fas fa-long-arrow-alt-right rightarrow"></i>'

        
    });

    $('.counter').counterUp({
        delay: 30,
        time: 1000,
        
    });







    
   // filter----------------
    new Filterizr('.filter-container');
   $(document).ready(function(){
        $('.work_filter ul li').click(function(){
            $('li').removeClass("active");
            $(this).addClass("active");
        });
    });
    $('#bar1').barfiller();
    $('#bar2').barfiller();
    $('#bar3').barfiller();
    $('#bar4').barfiller();
    //tema part

    $('.team_slide').slick({
        dots: false,
        infinite: true,
        autoplay:true,
        autoplaySpeed:4000,
        speed: 300,
        slidesToShow:5,
        slidesToScroll: 1,
        centerMode:true,
        arrows:true,
        asNavFor:'.member_info',
        centerPadding:'0px',
        pauseOnHover: false,
        prevArrow:'<i class="fas fa-long-arrow-alt-left team_left_arrow"></i>',
        nextArrow:'<i class="fas fa-long-arrow-alt-right team_right_arrow"></i>',

          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
            
    });
    //member info
    $('.member_info').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        asNavFor:'.team_slide',
        autoplay:true,
        autoplaySpeed:5000,
        speed: 500,
        fade:true,
        infinite:true,
        pauseOnHover: false,
        centerMode:true,

    });
    //comment part
    $('.comment').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        autoplay:true,
        autoplaySpeed:5000,
        speed: 500,
        infinite:true,
        pauseOnHover: false,
        

    });
    //blog part
    $('.blog').slick({
        dots: false,
        infinite: true,
        autoplay:true,
        autoplaySpeed:4000,
        speed: 300,
        slidesToShow:3,
        slidesToScroll: 1,
        centerMode:false,
        centerPadding:'0px',
        pauseOnHover: false,
        arrows:true,
        prevArrow:'<i class="fas fa-long-arrow-alt-left blog_left_arrow"></i>',
        nextArrow:'<i class="fas fa-long-arrow-alt-right blog_right_arrow"></i>',
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
        ]

    });

    //client part
     $('.Client').slick({
        dots: false,
        infinite: true,
        autoplay:true,
        autoplaySpeed:3000,
        speed: 300,
        slidesToShow:6,
        slidesToScroll: 1,
        centerMode:false,
        centerPadding:'0px',
        pauseOnHover: false,
        arrows:false,
        
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]

    });

      
   
});

