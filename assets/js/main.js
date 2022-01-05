$(document).ready(function() {
    /** navbar sticky effect*/
    let navbar =$("#nv-hid");

    $(window).scroll(function(){
        if($(window).scrollTop() > 0 && window.innerWidth > 1161){
            navbar.addClass("test");
            
        }
        else{
            navbar.removeClass("test");
        }
    });
    /**helps to maintain the navbar */ $(this).scrollTop(0);


     /**parallax for header */
     const parallax = document.getElementById("parallax-head");

     window.addEventListener("scroll", function(){
         let offset = window.pageYOffset;
         parallax.style.backgroundPositionY = offset * 0.5 + "px";
     });

     /**navagation link active effect */
    const li=document.querySelectorAll(".nav-link");
    const sec=document.querySelectorAll("section");

    function activeMenu(){
        let len = sec.length;
        while(--len && window.scrollY + 69 < sec[len].offsetTop){}
        li.forEach(ltx => ltx.classList.remove("active"));
        li[len].classList.add("active");
    }
    activeMenu();
    window.addEventListener("scroll",activeMenu);   
    /**end */


    /**about-us section remove container */
    $(window).resize(function(){
        let aboutCon = $(".con-remove");
        if(window.innerWidth < 1200 ){
                aboutCon.removeClass("container");
                aboutCon.addClass("container-fluid");
        }
        else{
            aboutCon.removeClass("container-fluid");
            aboutCon.addClass("container");
        }
    });

    });
/**aos needed js */
window.addEventListener('load', () => {
    /**add this for loader*/$("#preloader").fadeOut("slow");
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    })
});


