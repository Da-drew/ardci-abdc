<!--==loader==-->
<div id="preloader">
  <div class="cssload-dots">
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
  </div>

  <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <filter id="goo">
        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="12" ></feGaussianBlur>
        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0	0 1 0 0 0	0 0 1 0 0	0 0 0 18 -7" result="goo" ></feColorMatrix>
        <!--<feBlend in2="goo" in="SourceGraphic" result="mix" ></feBlend>-->
      </filter>
    </defs>
  </svg>
</div>


<footer>
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-md-4 footer-col-pad">
            <div class="footer-terms-body" id="terms-and-condition">
              <h3>Terms and Condition</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptatem voluptatum ab sit rerum odit aliquid deserunt, similique iure quasi inventore, laudantium dolorem est perferendis necessitatibus optio, cupiditate eaque sint.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim distinctio ducimus porro, nihil suscipit impedit reiciendis similique explicabo voluptatum natus!</p>
          </div>
      
            <div class="socials">
              <h4>Socials</h4>
              <span class="f-fb-link">
                <a href="https://www.facebook.com/ARDCIMFI/" target="_blank" class="fb"><img class="social-icons-footer" src="assets/image/facebook.png"></i></a>
              </span>  
              <span class="f-fb-link">
                <a href="#" class="fb"><img class="social-icons-footer" src="assets/image/instagram.png"></a>
              </span>  
              <span class="f-fb-link">
              <a href="#" class="fb"><img class="social-icons-footer" src="assets/image/twitter.png"></a>
              </span>  
            </div>



          </div>

          <!--FAQs-->
          <div class="col-md-4 footer-col-pad">
            <h3 class="faq-title">FAQ's</h3>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                    Accordion Item #1
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Accordion Item #2
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Accordion Item #3
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 footer-col-pad">
            <h3 class="q-link-title">Quick Links</h3>
              <div class="f-links">
                <ul>
                  <li>
                      <a class="f-f-link" href="#">Home</a><br>
                      <a class="f-f-link" href="#about-us-section">About us</a><br>
                      <a class="f-f-link" href="#tenants">Our Tenants</a><br>
                      <a class="f-f-link" href="#space-r">Space for Rent</a><br>
                      <a class="f-f-link" href="#gallery">Gallery</a><br>
                      <a class="f-f-link" href="#" data-bs-toggle="modal" data-bs-target="#request-for-quotation">Request for Quotation</a><br>
                  </li>
                </ul>
                
              </div>
          </div>
          <div class="col-md-12">
            <p class="footer-btm-p">© Copyright ARDCI Microfinance Inc. All Rights Reserved <?php echo date("Y"); ?>
          </p>
          </div>
        </div>
      </div>

    </footer>
    <script src="https://kit.fontawesome.com/4effbd114b.js" crossorigin="anonymous"></script><!--Font awesome naviagtion menu-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script><!--Gallery-->
    <script src="assets/aos/aos.js"></script>
</body>
</html>