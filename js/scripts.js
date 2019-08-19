//Slider
$(document).ready(function(){
    //Banner sliders
    var innerCarousel = $('#inner-carousel');
    innerCarousel.owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            1000:{
                items:1
            }
        }
    });
    //Product silders
    var outerCarousel = $('#outer-carousel');
    outerCarousel.owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:2000,
        animateOut: 'fadeOut',
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        responsive:{
            1000:{
                items:1
            }
        }
    });
    
    // $(".popular-list .owl-theme .owl-dots .owl-dot:nth-child(1) span").hover(function(){
    //     $(".popular-arrow").css({"left": "19%"});
 
    // }); 
    // $(".popular-list .owl-theme .owl-dots .owl-dot:nth-child(2) span").hover(function(){
    //     $(".popular-arrow").css({"left": "50%"});
    
    // }); 
    // $(".popular-list .owl-theme .owl-dots .owl-dot:nth-child(3) span").hover(function(){
    //     $(".popular-arrow").css({"left": "80%"});

    // }); 

    // $('.owl-carousel .owl-dot').hover(function() { 
    //     $(this).click(); 
    //     },function() {} 
    // );

    //Navigation
    //Sub 1
 

    $(".sub1").hover(function(){
        $("#sub-block-st").slideDown("fast");
        $("#sub-block-nd").hide();
        $("#sub-block-rd").hide();
    });
    $(".navigation").mouseleave(function(){
        $("#sub-block-st").slideUp("fast");
    });

    //Sub 2
    $(".sub2").hover(function(){
        $("#sub-block-nd").slideDown("fast");
        $("#sub-block-st").hide();
        $("#sub-block-rd").hide();
    });
    $(".navigation").mouseleave(function(){
        $("#sub-block-nd").slideUp();
    });

    //Sub 3
    $(".sub3").hover(function(){
        $("#sub-block-rd").slideDown("fast");
        $("#sub-block-st").hide();
        $("#sub-block-nd").hide();
    });
    $(".navigation").mouseleave(function(){
        $("#sub-block-rd").slideUp("fast");
    });
  
    //Menu 4
    $(".menu4").mouseover(function(){
        $("#sub-block-rd").slideUp("fast");
    }); 



    /*  jQuery for Popular-item  */
    $("#nav-1").hover(function() {
        $("#col-1").css({
            opacity: '1',
            transform: 'translateX(0%)'
        });
        
        $("#col-2").css({
            opacity: '0',
            transform: 'translateX(0%)'
        });
        $("#col-3").css({
            opacity: '0',
            transform: 'translateX(0%)'
        });

        $(".popular-arrow").css('left', '20%');
    });
    $("#nav-2").hover(function() {
        $("#col-1").css({
            opacity: '0',
            transform: 'translateX(-100%)'
        });
        
        $("#col-2").css({
            opacity: '1',
            transform: 'translateX(-100%)'
        });
        $("#col-3").css({
            opacity: '0',
            transform: 'translateX(0%)'
        });

        $(".popular-arrow").css('left', '50%');
    });
    $("#nav-3").hover(function() {
        $("#col-1").css({
            opacity: '0',
            transform: 'translateX(-100%)'
        });
        
        $("#col-2").css({
            opacity: '0',
            transform: 'translateX(-100%)'
        });
        $("#col-3").css({
            opacity: '1',
            transform: 'translateX(-200%)'
        });

        $(".popular-arrow").css('left', '80%');
    });
    // Show menu o che do responsive
    $(".nav-click").click(function() {
        $("#myHeader").toggleClass('active');
        $(".nav-click").toggleClass('active');
        $(".nav-click::before").css('transform', 'rotate3d(0, 0, 1, 45deg)');     
    });

    $(".nav .sub1 .collapSub").click(function() {
        $(".nav .sub1 .sub-menu").toggleClass('actived');
    });
    $(".nav .sub2 .collapSub").click(function() {
        $(".nav .sub2 .sub-menu").toggleClass('actived');
    });
    $(".nav .sub3 .collapSub").click(function() {
        $(".nav .sub3 .sub-menu").toggleClass('actived');
    });   

});


// When scrolls down 30px from the top of the document, logo down left the nav, search-btn fall down right-nav, menu:hover wide than 
window.onscroll = function() {myFunction()};

//Header 
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

// Logo
var logo = document.getElementById("logo");
var logoLeft = logo.offsetLeft;

// Search btn
// var search = document.getElementById("search");
// var searchDown = search.offsetTop;

// var searchF = document.getElementById("search-form");
// var searchFDown = search.offsetTop;


// Nav menu: tiêu đề
var nav = document.getElementById("nav");
var navMenu = nav.offsetTop;

// Navigation 
var navigation = document.getElementById("navigation");
var stickyNav = navigation.offsetTop;

// Rigth
var right = document.getElementById("right");
var rightDiv = right.offsetTop;

// Login - register
var login = document.getElementById("navbar-nav");
var loginbtn = login.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky){
        header.classList.add("sticky");
        logo.classList.add('logoLeft');
        // search.classList.add('searchDown');
        // searchF.classList.add('searchFDown');

        nav.classList.add('navMenu');
        navigation.classList.add('stickyNav');
        right.classList.add('rightDiv');   
        // Login - Register
        login.classList.add('loginbtn');      
   
    } else {
        header.classList.remove("sticky");
        logo.classList.remove("logoLeft");
        // search.classList.remove("searchDown");
        // searchF.classList.remove("searchFDown");

        nav.classList.remove("navMenu");
        navigation.classList.remove("stickyNav");
        right.classList.remove("rightDiv");

        // Login - Register
        login.classList.remove("loginbtn");
    }
}


// When the user scrolls down 500px from the top of the document, show the button
document.onscroll = function() {scrollFunction()}; //Dung document thay window de ko dung voi logo

function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    document.getElementById("go-top").style.opacity = "1";
  } else {
    document.getElementById("go-top").style.opacity = "0";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



    
