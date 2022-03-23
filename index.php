<?php include 'includes/main-header.php'?>
<?php include 'includes/banner.php'?>
<!-- chatbot include here -->
<?php include 'includes/chatbot.php'?>

<!-- php code -->

<!-- Request for Quotation -->
<?php
  if(isset($_POST['send'])){
      $to = "rightsup.22@gmail.com";
      $sender = $_POST['email'];
      $subject = "from arcdci v0.01 Request for Quotes";
      $firstName = $_POST['fname'];
      $lastName = $_POST['lname'];
      $prefix = $_POST['prefix'];
      $comName = $_POST['comName'];
      $typeBusiness = $_POST['typeBusiness'];
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
      $body .= "Type of Business: ".$typeBusiness."\r\n";
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
          <script type="text/javascript">location.href = 'includes/thanks.php';</script>
          <?php
      }
      else{
          ?>
          <!-- dipslay sucess message -->
          <script type="text/javascript">location.href = 'includes/error.php';</script>
          <?php
      }
  }
?>
<!-- end -->

<!-- start HTML -->
<section class="main">
  <div class="container-fluid">
    <div class="why-us-container">
      <div class="row">
        <div class="col-lg-5 why-us-img" data-aos="fade-right"><img src="assets/image/abdc-map.png" alt="map"></div>
        <div class="col-lg-7" data-aos="fade-left" id="ela">
          <div class="why-us-text">
            <p class="why-us-small-title">why choose ABDC</p>
            <h3 class="why-us-title">PRIME LOCATION</h3>
            <p class="why-us-p">Nestled with the province's newest business district with consistent customer traffic ideal for starting and established retailers alike, ARDCI Business Center's prime and convenient location promises to be a steward of vibrant and thriving businessses.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="why-us-container why-bg-alternate">
      <div class="row">
        <div class="col-lg-7 order-lg-1 order-2 p-0" data-aos="fade-right">
          <div class="why-us-text-right">
              <p class="why-us-small-title">why choose ABDC</p>
              <h3 class="why-us-title">AFFORDABLE RATES</h3>
              <p class="why-us-p">We offer viable spaces at affordable rates for budding entrepreneurs and income investors seeking to capture sales growth and profitable opportunities.</p>
            </div>
        </div>
        <div class="col-lg-5 order-lg-2 order-1 why-us-img-right" data-aos="fade-left">
          <img src="assets/image/low-price.jpg" alt="off1">
        </div>
      </div>
    </div>
    <div class="why-us-container">
      <div class="row">
        <div class="col-lg-5 why-us-img" data-aos="fade-right"><img id="mainThird" src="assets/image/ardci-img.png" alt="off1"></div>
        <div class="col-lg-7" data-aos="fade-left">
          <div class="why-us-text">
            <p class="why-us-small-title">why choose ABDC</p>
            <h3 class="why-us-title">RECOGNIZED BRAND</h3>
            <p class="why-us-p">ARDCI Business Center bears the name of its reputable mother-company, ARDCI, which is regarded as a forerunner in building strong foundations of enterprises in the province of Catanduanes</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<div class="service-div-section">
  <div class="container" id="service-conatiner">
    <div class="row">
    <div class="col-12 who-we-are" data-aos="fade-up">
        <h2 class="wwa-head">Who we are</h2>
        <p class="wwa-p">
          ARDCI Business Center (ABC) is a development center under the management of ARDCI that is established to provide sustainable leasing services to the entrepreneurial sector in Catanduanes aspiring to solidify their foundation in the business industry.
        </p>
      </div>
      <div class="col-md-12 service-div" data-aos="fade-up">
        <h1 class="services-title">Services Offered</h1>
        <p class="service-p">
          The premises of ARDCI Business Center was established to meet the continuing demand for office and retail spaces in Catanduanes. We offer leasing spaces to tenants ranging from the food business, retail services, office, and more.
        </p>
      </div>
    </div>
  </div>
</div>


<!-- Tenants -->
<section class="tenants" id="tenants">
  <div class="container-fluid" data-aos="fade">
    <h1 class="tenants-title">Tenants</h1>
    <div class="row row-tenants-div">
      <!-- miniso -->
      <div class="col-md-6 miniso-div">
        <!-- overlay -->
        <div class="tenants-overlay-miniso" id="minisoOverlay" style="transform: scale(1)">
        <div class="col-md-12 miniso-header">
          <h1>Miniso</h1>
        </div>
        <div class="col-md-12 miniso-body">
          <p>MINISO is a Japanese-inspired lifestyle product retailer, offering high-quality household goods, cosmetics, and food at affordable prices.</p>
          <p class="miniso-last-p">Founder and CEO Ye Guofu gained inspiration for MINISO while on vacation with his family in Japan in 2013. He came across a number of specialty stores in Japan which stocked good quality, well-designed, and inexpensive products that were mostly manufactured in China. Leveraging his knowledge and experience in product development, supply chain, and channel resources gained from running fashion chain brands, Mr. Ye launched MINISO with its headquarters in Guangzhou, China, a brand that caters to young people around the world.</p>
          <div class="social-miniso">
            <div class="row social-row">
              <div class="col-6">
                <div class="ct-socials">
                  <p class="ct-social-head">Socials</p>
                  <span class="ct-fb-link">
                    <a href="https://www.facebook.com/minisophilippines/" target="_blank" class="fb"><img class="social-icons-tenant" src="assets/image/facebook.png"></a>
                  </span>  
                  <span class="ct-fb-link">
                    <a href="https://www.instagram.com/miniso_ph/?hl=en" target="_blank" class="fb"><img class="social-icons-tenant" src="assets/image/instagram.png"></a>
                  </span>  
                  <span class="ct-fb-link">
                  <a href="https://twitter.com/miniso_ph?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="fb"><img class="social-icons-tenant" src="assets/image/twitter.png"></a>
                  </span>  
                </div>
              </div>
              <div class="col-6">
                <div class="ct-link-web">
                  <p class="ct-web-p">Check their website @ <a href="https://ardci.org.ph/" target="_blank">https://ardci.org.ph/</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- ardci mart -->
      <div class="col-md-6 ardci-mart-div">
         <!-- overlay -->
         <div class="tenants-overlay-miniso" id="martOverlay">
          <div class="col-md-12 miniso-header">
            <h1 class="ardci-mart-title">ARDCI Mart</h1>
          </div>
          <div class="col-md-12 miniso-body">
          <p class="text-center ardci-mart-p">ARDCI Mart envisions to be the leading supermarket in Catanduanes in the next five (5) years.</p>
          <div class="social-miniso">
            <div class="row social-row" style="height: 100px">
              <div class="col-6">
                <div class="ct-socials">
                  <p class="ct-social-head">Socials</p>
                  <span class="ct-fb-link">
                    <a href="#" class="fb"><img class="social-icons-tenant" src="assets/image/facebook.png"></a>
                  </span>  
                  <span class="ct-fb-link">
                    <a href="#" class="fb"><img class="social-icons-tenant" src="assets/image/instagram.png"></a>
                  </span>  
                  <span class="ct-fb-link">
                  <a href="#" class="fb"><img class="social-icons-tenant" src="assets/image/twitter.png"></a>
                  </span>  
                </div>
              </div>
              <div class="col-6">
                <div class="ct-link-web">
                  <p class="ct-web-p">Check their website @ <a href="https://ardci.org.ph/" target="_blank">https://ardci.org.ph/</a></p>
                </div>
              </div>
            </div>
           </div>
          </div>
         </div>
      </div>
    </div>
  </div>
</section>

<!-- space rent -->
<section class="space-rent" id="space-rent">
  <div class="container-fluid" data-aos="fade-up">
    <h1 class="space-rent-title">Space for rent</h1>

    <div class="property-profile">
      <h1>Property Profile</h1>
      <p>Our Property Profile shall include the following:</p>
    </div>

    <div class="property-description container">
      <h3 class="pd-title">Property Description</h3>
      <p class="pd-content">
      ARDCI Business and Development Corporation is an enclosed provincial mall in Virac, Catanduanes, approximately 1.3 miles west of the Virac Town Plaza. The entire premise occupies an area of approximately 4,365 sq. m hectare along the Moonwalk-Calatagan Diversion Road.
      </p>
      <p class="pd-content">
      Note: We may include immediate adjacent establishments where vital meetings for the community happen. E.g. Risen Christ Chapel, Buddy's Mami House, Virac Seventh Day Adventist Church.
      </p>
      <p class="pd-content">
      Due to the lack of retail development in nearby Barangays, ARDCI Business and Development Corporation serves a large trade area that includes nearly [number of people living] in a [certain number/mile] radius.
      </p>
    </div>
    <div class="pd-table container">
      <table class="rent-table">
        <tr>
          <th colspan="3" class="table-header">Project Desciption</th>
        </tr>
        <tr>
          <th rowspan="3" class="text-center">Property</th>
        </tr>
        <tr>
          <td>Property Address</td>
          <td>Moonwalk, Virac, Catanduanes</td>
        </tr>
        <tr>
          <td>Property Type</td>
          <td>Provincial Shopping<br> Mall/Business Center</td>
        </tr>
        <tr>
          <th rowspan="13" class="text-center">Offering</th>
        </tr>
        <tr>
          <td>Deal Structure</td>
          <td>Space Rental</td>
        </tr>
        <tr>
          <td>Common Seating Area</td>
          <td>46sq.m</td>
        </tr>
        <tr class="tr-no-border">
          <td class="tr-no-border">Space for Rent(Occupied)</td>
          <td class="tr-no-border">2</td>
        </tr>
        <tr class="tr-no-border">
          <td class="tr-no-border"><li>Miniso</li></td>
          <td class="tr-no-border">200sq.m</td>
        </tr>
        <tr class="tr-no-border">
          <td class="tr-no-border"><li>ARDCI Mart</li></td>
          <td class="tr-no-border">____</td>
        </tr>
        <tr>
          <td>Available Space for Rent</td>
          <td>6</td>
        </tr>
        <tr class="tr-no-border">
          <td class="tr-no-border"><li>Rentable Space</li></td>
          <td class="tr-no-border">50.38sq.m</td>
        </tr>
        <tr class="tr-no-border">
          <td class="tr-no-border"><li>Rentable Space</li></td>
          <td class="tr-no-border">23sq.m</td>
        </tr>
        <tr class="tr-no-border">
          <td class="tr-no-border"><li>Rentable Space</li></td>
          <td class="tr-no-border">23sq.m</td>
        </tr>
        <tr class="tr-no-border">
          <td class="tr-no-border"><li>Rentable Space</li></td>
          <td class="tr-no-border">23sq.m</td>
        </tr>
        <tr class="tr-no-border">
          <td class="tr-no-border"><li>Rentable Space</li></td>
          <td class="tr-no-border">23sq.m</td>
        </tr>
        <tr class="tr-no-border">
          <td class="tr-no-border"><li>Rentable Space</li></td>
          <td class="tr-no-border">72.23sqm</td>
        </tr>
      </table>
      <!-- table -->
    </div>
    <div class="full-growth container">
        <h3 class="fg-title">
          Full Growth Potential
        </h3>
        <p class="fg-body">
        The property offers attractive long-term upside through a variety of initiatives including 1) putting an international brand of retail such as Miniso. With thousands of people visiting the mall for various purchases, a need for an internationally known brand will give our small to medium entrepreneurs the chance for exposure they need. 2) The remaining vacancies are suited for tenants wishing to capitalize on synergies making ARDCI Business Center, as we shall call the entire compound, a community destination.
        </p>
      </div>
      <div class="full-growth container">
        <h3 class="fg-title">
        Strategic Advantage to Competition
        </h3>
        <p class="fg-body">
        Enclosed malls have an advantage in areas subject to inclement weather, such as our province, allowing shoppers the ability to comfortably go from store to store.
        </p>
      </div>
      <div class="full-growth container">
        <h3 class="fg-title">
        Exceptional Value
        </h3>
        <p class="fg-body">
        Business owners will have an opportunity to rent ABDC's spaces at a basis of [price per square foot].
        </p>
      </div>
  </div>
</section>

<!-- about us -->
<section class="about-us" id="about" data-aos="fade">
  <div class="container" id="about-container">
      <h1 class="about-title">About us</h1>
    <div class="row text-center about-us-row">
      <div class="col-md-4 mission">
        <div class="img-mission">
          <img class="mission-img" src="assets/image/mission.png" alt="mission.png">
        </div>
        <div class="mission-title"><h3>Mission</h3></div>
        <div class="mission-body">
          <p>We commit to be a reliable partner of local business enterprises by providing high-standard commercial and recreational spaces.</p>
        </div>
      </div>
      <div class="col-md-4 vision">
      <div class="img-mission">
          <img src="assets/image/vision.png" alt="vision.png">
        </div>
        <div class="mission-title"><h3>Vision</h3></div>
        <div class="mission-body">
          <p>Well-managed property business developer of choice in Catanduanes</p>
        </div>
      </div>
      <div class="col-md-4 goal">
      <div class="img-mission">
          <img class="img-goal" src="assets/image/goal.png" alt="corevalue.png">
        </div>
        <div class="mission-title"><h3>Core Values</h3></div>
        <div class="mission-body">
          <li>Integrity</li>
          <li>Good-stewardship</li>
          <li>Innovation</li>
        </div>
      </div>
    </div>
    <div class="about-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5670.253907812412!2d124.22789871536817!3d13.581293304879619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a017f13c19c545%3A0x75debe717b5b3c10!2sARDCI%20Microfinance%20Inc.!5e0!3m2!1sen!2sph!4v1641181763935!5m2!1sen!2sph" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</section>

<!-- gallery -->
<section class="gallery" id="gallery" data-aos="fade">
  <div class="container">
    <div class="gallery-title">
      <h1>Gallery</h1>
      <p>Building Perspective</p>
    </div>
  </div>

  <div class="container-fluid m-0 p-0">
    <div class="row g-0">

      <div class="col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-1.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-1.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-2.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-2.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-3.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-3.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-4.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-4.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-5.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-5.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gallery-item">
          <a href="assets/image/gallery-6.jpg" class="fancybox" data-fancybox="gallery1">
            <img src="assets/image/gallery-6.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </div> 
</section>
<!-- end of gallery -->


<?php include 'includes/modal.php' ?>
<?php include 'includes/footer.php' ?>