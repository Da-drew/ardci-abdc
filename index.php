<?php include 'includes/main-header.php' ?>
<?php include 'includes/banner.php' ?>

<!-- php code -->


<!-- php code for modal inquiry -->
<?php
  if(isset($_POST['In_send'])){
      $in_to = "rightsup.22@gmail.com";
      $in_sender = $_POST['In_email'];
      $in_subject = "From ARDCI v0.01 Inquiry";
      $in_firstName = $_POST['In_fName'];
      $in_lastName = $_POST['In_lName'];
      $in_message = $_POST['In_message'];
      $in_phoneNumber = $_POST['In_phoneNumber'];

      $in_body="";

      $in_body .= "From: ".$in_sender."\r\n";
      $in_body .= "Name: ".$in_firstName. " ";
      $in_body .= $in_lastName."\r\n";

      // if entered number
      if($in_phoneNumber){
        $in_body .= "Phone Number: ".$in_phoneNumber."\r\n";
      }

      $in_body .= "\r\nMessage: \r\n".$in_message."\r\n"."\r\n";
      $in_body .= "This email is sent from http://localhost:7882/ardciv1/index.php";
      
      $in_headers = 'From: Sender Name: ' .$in_firstName." ". $in_lastName. "\r\n" .
                  'Reply-To: ' .$in_sender. "\r\n" .
                  'X-Mailer: PHP/' . phpversion();



      if(mail($in_to, $in_subject, $in_body, $in_headers)){
        ?>
        <!-- dipslay sucess message -->
        <script type="text/javascript">location.href = 'thanks.php';</script>
      <?php }
      else{
        ?>
        <!-- dipslay sucess message -->
        <script type="text/javascript">location.href = 'error.php';</script>
        <?php
      }
  }
?>


<!-- RFQ -->
<?php
      if(isset($_POST['send'])){
          $to = "rightsup.22@gmail.com";
          $sender = $_POST['email'];
          $subject = "from arcdci v0.01 Request for Quotes";
          $firstName = $_POST['fname'];
          $lastName = $_POST['lname'];
          $prefix = $_POST['prefix'];
          $comName = $_POST['comName'];
          $purok = $_POST['purok'];
          $barangay = $_POST['barangay'];
          $city = $_POST['city'];
          $province = $_POST['province'];
          $zipcode = $_POST['zipcode'];
          $country = $_POST['country'];
          $phoneNumber = $_POST['phoneNumber'];
          $facebook = $_POST['facebook'];

          $body="";

          $body .= "From: ".$sender."\r\n";
          $body .= "Name: ".$firstName. " ";
          $body .= $lastName." ";
          // if have a prefix
          if($prefix){
              $body .=$prefix."\r\n";
          }
          else{
              $body .="\r\n";
          }
          $body .= "Company Name: ".$comName."\r\n";
          $body .= "Address: ".$purok." ".$barangay." ".$city." ".$province." ".$country." ".$zipcode."\r\n";
          $body .= "Phone Number: ".$phoneNumber."\r\n";
          $body .= "Facebook: ".$facebook."\r\n"."\r\n";
          
          $body .= "This email is sent from http://localhost:7882/ardciv1/request-for-quotes.php";
          
          $headers = 'From: Company Sender: '.$comName. "\r\n" .
                      'Reply-To: ' .$sender. "\r\n" .
                      'X-Mailer: PHP/' . phpversion();



          if(mail($to, $subject, $body, $headers)){
              ?>
              <!-- dipslay sucess message -->
              <script type="text/javascript">location.href = 'thanks.php';</script>
              <?php
          }
          else{
              ?>
              <!-- dipslay sucess message -->
              <script type="text/javascript">location.href = 'error.php';</script>
              <?php
          }
      }
  ?>



<div class="main">
  <div class="container main-page-container">
      <div class="row main-row">
          <div class="col-md-8" data-aos="fade">
              <div class="main-content">
                  <h1 class="main-content-h1">Main Content Here</h1>
                  <div class="main-content-p">
                      <h3 class="main-content-title-section">Section 1</h3>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero at praesentium veniam dolorem est. Voluptatem, tempora aliquid. Illo molestiae quae explicabo dolore eveniet vero magni voluptatum sit, quaerat sint eligendi quidem nihil, fugit, laboriosam voluptates. Iure accusamus ipsam laboriosam soluta!</p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ut aperiam laboriosam mollitia quasi nam quis magni odio vero alias! Ea blanditiis vitae quam recusandae optio corporis consequuntur nesciunt. Aut repellendus architecto sint explicabo quo commodi saepe illum eius atque velit veritatis officiis iste ipsam repudiandae necessitatibus, sit error nisi sunt natus fugiat sapiente! Ex placeat culpa delectus cupiditate quae aspernatur atque esse aut id doloremque maxime, laboriosam dolores. Odit eaque itaque asperiores aspernatur impedit ipsum voluptatibus sequi velit nemo.</p>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda labore ullam, nulla est eaque maxime, ad eos voluptate vitae ducimus debitis illum qui laborum facilis voluptatum, mollitia deleniti omnis sapiente ex. Sint vero porro, accusamus sequi cum ut perspiciatis quos fugit vel rem eligendi. Soluta, dolores incidunt! Nobis, culpa cum.</p>
                  </div>
                  <div class="main-content-p">
                      <h3 class="main-content-title-section">Section 2</h3>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero at praesentium veniam dolorem est. Voluptatem, tempora aliquid. Illo molestiae quae explicabo dolore eveniet vero magni voluptatum sit, quaerat sint eligendi quidem nihil, fugit, laboriosam voluptates. Iure accusamus ipsam laboriosam soluta!</p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ut aperiam laboriosam mollitia quasi nam quis magni odio vero alias! Ea blanditiis vitae quam recusandae optio corporis consequuntur nesciunt. Aut repellendus architecto sint explicabo quo commodi saepe illum eius atque velit veritatis officiis iste ipsam repudiandae necessitatibus, sit error nisi sunt natus fugiat sapiente! Ex placeat culpa delectus cupiditate quae aspernatur atque esse aut id doloremque maxime, laboriosam dolores. Odit eaque itaque asperiores aspernatur impedit ipsum voluptatibus sequi velit nemo.</p>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda labore ullam, nulla est eaque maxime, ad eos voluptate vitae ducimus debitis illum qui laborum facilis voluptatum, mollitia deleniti omnis sapiente ex. Sint vero porro, accusamus sequi cum ut perspiciatis quos fugit vel rem eligendi. Soluta, dolores incidunt! Nobis, culpa cum.</p>
                  </div>
                  <div class="main-content-p">    
                      <h3 class="main-content-title-section">Section 3</h3>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero at praesentium veniam dolorem est. Voluptatem, tempora aliquid. Illo molestiae quae explicabo dolore eveniet vero magni voluptatum sit, quaerat sint eligendi quidem nihil, fugit, laboriosam voluptates. Iure accusamus ipsam laboriosam soluta!</p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ut aperiam laboriosam mollitia quasi nam quis magni odio vero alias! Ea blanditiis vitae quam recusandae optio corporis consequuntur nesciunt. Aut repellendus architecto sint explicabo quo commodi saepe illum eius atque velit veritatis officiis iste ipsam repudiandae necessitatibus, sit error nisi sunt natus fugiat sapiente! Ex placeat culpa delectus cupiditate quae aspernatur atque esse aut id doloremque maxime, laboriosam dolores. Odit eaque itaque asperiores aspernatur impedit ipsum voluptatibus sequi velit nemo.</p>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda labore ullam, nulla est eaque maxime, ad eos voluptate vitae ducimus debitis illum qui laborum facilis voluptatum, mollitia deleniti omnis sapiente ex. Sint vero porro, accusamus sequi cum ut perspiciatis quos fugit vel rem eligendi. Soluta, dolores incidunt! Nobis, culpa cum.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4" data-aos="fade">
              <form name="main-contact" id="main-form-contact" class="contact-form" action="index.php" method="POST" autocomplete="off" >
                  <div class="col-md-12 mb-4">
                  <h3 class="form-title-contact">Talk To Us!</h3>
                  </div>
                  <div id="hayat"></div>
                  <div class="col-md-12 mb-3">
                  <input type="text" class="form-control" name="m_firstName" id="Fname" placeholder="First Name" required>
                  </div>
                  <div class="col-md-12 mb-3">
                  <input type="text" class="form-control" name="m_lastName" id="Lname" placeholder="Last Name" required>
                  </div>
                  <div class="col-md-12 mb-3">
                  <input type="email" class="form-control" name="m_email" id="Email" placeholder="Email address" required>
                  </div>
                  <div class="col-md-12 mb-3">
                  <input type="tel" maxlength="11" class="form-control" name="m_phoneNumber" id="Phone-number" placeholder="Phone number (Optional)">
                  </div>
                  <div class="col-md-12 mb-3">
                  <textarea class="form-control" name="m_message" id="message" rows="3" placeholder="Message" required></textarea>
                  </div>
                  <div class="form-check mb-4">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                  <label class="form-check-label" for="exampleCheck1">I agree in <a href="#terms-and-condition">terms and condition</a>
                  I affirm that I have read, and understand hereby accept the Terms and Conditions of Ardci Microfinance Inc., (the “Company”) Website Privacy Policy and that I consent to the collection, storage, use, disclosure and processing by the company and any third party it authorizes, including its affiliates and their respective officers, employees, agents, representatives and personnel of such information disclosed.</label>
                  </div>
                  <div class="col-md-12">
                  <button type="submit" name="m_send" id="m_submit" class="btn btn-primary w-100 form-btn-main" >Submit</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>

<!--About us section-->
<section class="about-us" id="about-us-section" data-aos="fade">
  <div class="container about-container">
    <div class="about-head-text">
            <h1>About ARDCI Business and Development Corporation</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet harum repudiandae aut itaque nisi eius quidem voluptas a consectetur distinctio, hic voluptate tempore ex maxime vero sit est enim? Minus soluta quaerat nihil error harum alias placeat aperiam velit corrupti.</p>
    </div>
    <div class="about-content">
          <div class="row">
            <div class="col-md-6" data-aos="float-right" data-aos-delay="100">
                <div class="store">
                    <img class="store-img" src="assets/image/about-1.jpg" alt="store">
                </div>
            </div>
            <div class="col-md-6 about-relative" data-aos="float" data-aos-delay="100">
                <div class="about-text-div text-start">
                    <h1>Mission</h1>
                    <p>We commit to be a reliable partner of local business enterprises by providing high-standard commercial and recreational spaces. </p>

                    <h1>Vision</h1>
                    <p>Well-managed property business developer of choice in Catanduanes</p>

                    <h1>Core Values</h1>
                        <li>Integrity</li>
                        <li>Good-stewardship</li>
                        <li>Innovation</li>
                </div>
            </div>
        </div>
    </div>
  </div>

  <!--maps-->
  <div class="row map-row">
    <div class="col-md-12" data-aos="fade">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.253907812412!2d124.22789871536817!3d13.581293304879619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a017f13c19c545%3A0x75debe717b5b3c10!2sARDCI%20Microfinance%20Inc.!5e0!3m2!1sen!2sph!4v1641181763935!5m2!1sen!2sph" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</section>
<!--end-->


<!--tenant section-->
<section class="tenants" id="tenants">
  <div class="tenants-overlay"></div>
  <div class="container">
    <div class="tenants-title-h1">
      <h1>Be One Of Our Tenants</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dolor ipsum neque cum cupiditate quae.</p>
    </div>
    <div class="tenants-current">
      <h2>Current Tenants</h2>
      <!-- miniso -->
        <div class="row ct-div" data-aos="fade">
          <div class="col-md-8 order-2 order-md-1 ct-content">
            <h3 class="miniso-h3">Miniso</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur odit expedita ullam eaque reiciendis? Ea quae voluptates esse.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus debitis aperiam vero accusamus cupiditate a qui dignissimos nulla expedita, doloremque, excepturi eos dolores magni dicta fugiat iste reiciendis molestiae ipsum?</p>
            
            <div class="ct-socials">
              <h4>Socials</h4>
              <span class="ct-fb-link">
                <a href="https://www.facebook.com/minisophilippines/" target="_blank" class="fb"><img class="social-icons-tenant" src="assets/image/facebook.png"></i></a>
              </span>  
              <span class="ct-fb-link">
                <a href="https://www.instagram.com/miniso_ph/?hl=en" target="_blank" class="fb"><img class="social-icons-tenant" src="assets/image/instagram.png"></a>
              </span>  
              <span class="ct-fb-link">
              <a href="https://twitter.com/miniso_ph?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="fb"><img class="social-icons-tenant" src="assets/image/twitter.png"></a>
              </span>  
            </div>
            <div class="ct-link-web">
              <p class="ct-web-p">Check their website @ <a href="https://www.miniso.com/" target="_blank">https://www.miniso.com/</a></p>
            </div>
          </div>
          <div class="col-md-4 order-1 order-md-2 ct-img-miniso">
            <!-- background image css -->
          </div>
        </div>
        <!-- end of miniso -->

        <!-- ardci mart -->
        <div class="row ct-div" data-aos="fade">
          <div class="col-md-8 order-2 order-md-2 ct-content">
            <h3 class="a-mart-h3">ARDCI Mart</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur odit expedita ullam eaque reiciendis? Ea quae voluptates esse.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus debitis aperiam vero accusamus cupiditate a qui dignissimos nulla expedita, doloremque, excepturi eos dolores magni dicta fugiat iste reiciendis molestiae ipsum?</p>
            
            <div class="ct-socials">
              <h4>Socials</h4>
              <span class="ct-fb-link">
                <a href="#" target="_blank" class="fb"><img class="social-icons-tenant" src="assets/image/facebook.png"></i></a>
              </span>  
              <span class="ct-fb-link">
                <a href="#" class="fb"><img class="social-icons-tenant" src="assets/image/instagram.png"></a>
              </span>  
              <span class="ct-fb-link">
              <a href="#" class="fb"><img class="social-icons-tenant" src="assets/image/twitter.png"></a>
              </span>  
            </div>
            <div class="ct-link-web">
              <p class="ct-web-p">Check their website @ <a href="https://www.miniso.com/">https://ardci.org.ph/</a></p>
            </div>
          </div>
          <div class="col-md-4 order-1 order-md-1 ct-img-a-mrt">
            <!-- background image css -->
          </div>
        </div>
        <!-- end of ardci mart -->
    </div>
  </div>
</section>

<!--space for rent-->
<section class="space-rent" id="space-r" data-aos="fade">
  <div class="container">
    <div class="space-rent-title">
      <h1>Lodging Space</h1>
    </div>
    <div class="space-rent-text">
      <h3>Property Profile</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam inventore quisquam explicabo, assumenda exercitationem, consectetur illo optio, vel sed iste facere est quia cum tenetur.</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat voluptatibus incidunt facilis facere consectetur vitae labore nam aliquid similique quos officia, veniam, sequi ea voluptas blanditiis dolore ab excepturi saepe quam unde, quae quo a rem modi. Tempore at enim, dolorum suscipit neque eaque libero dicta autem repudiandae aliquid consequatur.</p>
    </div>
    <div class="card-header-t">
      <h4>Available Slots</h4>
    </div>
    <div class="cards-div">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-2.jpg" class="card-img-top" alt="first card">
            <div class="card-body">
              <h5 class="card-title">Store 1</h5>
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, cupiditate. Repellat nulla eos incidunt accusamus corrupti iste blanditiis!</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space1">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-3.jpg" class="card-img-top" alt="second card">
            <div class="card-body">
              <h5 class="card-title">Store 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum eius, possimus doloribus nesciunt placeat excepturi.</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space2">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-5.jpg" class="card-img-top" alt="third card">
            <div class="card-body">
              <h5 class="card-title">Store 3</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam facere voluptate aliquam animi sapiente dolor?</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space3">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-4.jpg" class="card-img-top" alt="fourth card">
            <div class="card-body">
              <h5 class="card-title">Store 4</h5>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nulla nemo nesciunt!</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space4">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-6.jpg" class="card-img-top" alt="fifth card">
            <div class="card-body">
              <h5 class="card-title">Store 5</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente sed in corporis dolores ea.</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space5">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-7.jpg" class="card-img-top" alt="sixth card">
            <div class="card-body">
              <h5 class="card-title">Store 6</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sint consectetur sed quidem omnis rerum?</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space6">Learn more</button>
            </div>
          </div>
        </div>
        <!-- for loading purpose -->
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-3.jpg" class="card-img-top" alt="second card">
            <div class="card-body">
              <h5 class="card-title">Store 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum eius, possimus doloribus nesciunt placeat excepturi.</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space2">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-5.jpg" class="card-img-top" alt="third card">
            <div class="card-body">
              <h5 class="card-title">Store 3</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam facere voluptate aliquam animi sapiente dolor?</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space3">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-4.jpg" class="card-img-top" alt="fourth card">
            <div class="card-body">
              <h5 class="card-title">Store 4</h5>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nulla nemo nesciunt!</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space4">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-6.jpg" class="card-img-top" alt="fifth card">
            <div class="card-body">
              <h5 class="card-title">Store 5</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente sed in corporis dolores ea.</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space5">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-7.jpg" class="card-img-top" alt="sixth card">
            <div class="card-body">
              <h5 class="card-title">Store 6</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sint consectetur sed quidem omnis rerum?</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space6">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-3.jpg" class="card-img-top" alt="second card">
            <div class="card-body">
              <h5 class="card-title">Store 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum eius, possimus doloribus nesciunt placeat excepturi.</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space2">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-5.jpg" class="card-img-top" alt="third card">
            <div class="card-body">
              <h5 class="card-title">Store 3</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam facere voluptate aliquam animi sapiente dolor?</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space3">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-4.jpg" class="card-img-top" alt="fourth card">
            <div class="card-body">
              <h5 class="card-title">Store 4</h5>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nulla nemo nesciunt!</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space4">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-6.jpg" class="card-img-top" alt="fifth card">
            <div class="card-body">
              <h5 class="card-title">Store 5</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente sed in corporis dolores ea.</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space5">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col fr-per-card">
          <div class="card h-100 fr-cards">
            <img src="assets/image/sr-7.jpg" class="card-img-top" alt="sixth card">
            <div class="card-body">
              <h5 class="card-title">Store 6</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sint consectetur sed quidem omnis rerum?</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fr_space6">Learn more</button>
            </div>
          </div>
        </div>
        <!-- delete soon -->
      </div> 
      <div class="fr-btn-div">
        <button class="btn btn-primary show-per-card-btn">Load more</button>
      </div>
    </div>
  </div>
</section>

<!-- gallery -->
<section class="gallery" id="gallery" data-aos="fade">
  <div class="container">
    <div class="gallery-title">
      <h1>Gallery</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, vel?</p>
    </div>
  </div>

  <div class="container-fluid m-0 p-0">
    <div class="row g-0">

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-1.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-1.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-2.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-2.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-3.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-3.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-4.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-4.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-5.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-5.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-6.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-6.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-7.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-7.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-8.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-8.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </div>       
</section>
<!-- end of gallery -->

<?php include 'includes/modal.php' ?>
<?php include 'includes/footer.php' ?>