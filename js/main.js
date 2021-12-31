/**paralalx for header */
const parallax = document.getElementById("parallax-head");

window.addEventListener("scroll", function(){
    let offset = window.pageYOffset;
    parallax.style.backgroundPositionY = offset * 0.5 + "px";
});

/*LONG CODE
$(function() {
    var header = $(".nv-hid");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 1) {
            header.addClass("test");
        } else {
            header.removeClass("test");
        }
    });
});


*PAGE LOAD ADD CLASS RESERVE
$(document).ready(function () {
    $('.nv-hid').addClass('test');
});

/**For the navigartion bug 
function navScroll(){
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();   
        if (scroll >= 1) {
            $(".nv-hid").addClass("test");
        }
        else
            $(".nv-hid").removeClass("test");
    });
};
$(window).scroll(function() {
    navScroll();
});

$(document).ready(function() {
    navScroll();
});
/**end */

let navbar =$(".nv-hid");

$(window).scroll(function(){
    let oTop=$(".main-content").offset().top-window.innerHeight;
    if($(window).scrollTop()> oTop){
        navbar.addClass("test");
        
    }
    else{
        navbar.removeClass("test");
    }
});

/*active*/
$(".navbar .nav-link").on("click", function(){
    $(".navbar").find(".active").removeClass("active");
    $(this).addClass("active");
 });


 