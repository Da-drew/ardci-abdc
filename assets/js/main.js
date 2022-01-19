$(document).ready(function() {
  
     /*if else to check if in the main page to prevent erroring in another sub-page */
     var path = window.location.pathname;
     var page = path.split("/").pop();
        if(page == 'index.php'){
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
        }
          /**simple way of activating the animation in navigation */
        let nvhid = $(".nv-hid");
        const nvhidId = document.getElementById("nv-hid");
        if(page == 'index.php'){
            $(function () {
                $(document).scroll(function () {
                    var $nav = $("#nv-hid");
                    $nav.toggleClass('test', $(this).scrollTop() > $nav.height());
                });
                $(this).scrollTop(0);
            });
        }
        else{
            nvhid.addClass("test");
            nvhidId.style.transition = "none";
        }


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


    // per card show - Load more button function
    $(".fr-per-card").slice(0, 6).show()
    $(".show-per-card-btn").on("click", function(){
        $(".fr-per-card:hidden").slice(0, 3).slideDown('slow')
        if($(".fr-per-card:hidden").length == 0){
            $(".show-per-card-btn").fadeOut('slow')
        }
    });

});
/**aos needed js */
window.addEventListener('load', () => {
    /**add this for loader*/$("#preloader").fadeOut("slow");
    /*removing dcrollbar in loader*/ 
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    })
});



/**c-code 
const sections = document.querySelectorAll('section');
const navLink = document.querySelectorAll('.nav-link');

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach( section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if(pageYOffset >= sectionTop - sectionHeight * 0.2){
            current = section.getAttribute('id');
        }
    });

    navLink.forEach(a => {
        if(a.classList.contains(current)){
            a.classList.remove('active');
            a.classList.add('active');
        }
       
       
    })
})*/


//for the thank you page active class
function activeInThanks(){
    var path = window.location.pathname;
    var page = path.split("/").pop();
    let activate = $(".rfq-active");
    if(page == 'thanks.php' || page == 'error.php'){
      activate.removeClass("active");
       
    }
}
window.onload = activeInThanks;




//Remove all IDs in URL
var links = $('a.nav-link:not(:last)'); //select all the anchorTag with navlink class except for the last child

Array.prototype.forEach.call(links, function(elem, index) {
  var elemAttr = elem.getAttribute("href");
  if(elemAttr && elemAttr.includes("#")) {
    elem.addEventListener("click", function(ev) {
      ev.preventDefault();
      //Scroll to the target element using replace() and regex to find the href's target id
      document.getElementById(elemAttr.replace(/#/g, "")).scrollIntoView({
          behavior: "smooth",
          block: "start",
          inline: "nearest"
          });
    });
  }
});

// for contact form
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

//  modal preventing the modal-open close when modal #2 opens
$('#inquiry_form1').on('shown.bs.modal', function(){
    $('body').addClass('modal-open');
  })


// google sheet
  const scriptURL = 'https://script.google.com/macros/s/AKfycbz_5vhXbhvsaaj6amLRWQOzFC1ky2_mJAalaH5AlUHLU8G3bRqPS3dq6c0qStvjqjur/exec'
  const form = document.forms['main-contact']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => $("#hayat").html("<div class='alert alert-success'>Message Sent!</div> <script>$('#main-form-contact')[0].reset(); main =  $('#main-form-contact'); main.removeClass('was-validated'); </script>"))
      .catch(error => $("#hayat").html("<div class='alert alert-danger'>Error has been occur!</div>"))
  })


//validating in click input main section
  $("#main-form-contact input, #main-form-contact textarea, #main-form-contact button").on("click", function(){
    removeMain =  $('#main-form-contact'); 
    removeMain.removeClass('needs-validation');
    removeMain.addClass('was-validated');
  });



