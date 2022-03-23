<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardci Version v0.01</title>

    <link href="../assets/image/abdc-icon.png" rel="icon">

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
</head>
<body>

<section class="thanks-page">
    <div class="container center-flex-contain">
        <div class="row thanks-row">
            <div class="col-md-12 thanks-text-div">
                <h1>THANK YOU!</h1>
            </div>
            <div class="col-md-12 thanks-img-div">
                <img src="../assets/image/check-green.png" alt="check.png">
            </div>
            <div class="col-md-12 thanks-p-div">
                <p class="thanks-pp">Your message has been sent</p>
            </div>
            <div class="col-md-12 thanks-link-div">
                <a href="../index.php" class="thanks-btn">← BACK TO HOME</a>
            </div>
            <div class="col-md-12 thanks-footer">
                <p>Copyright ARDCI Business and Development Corporation © <?php echo date("Y"); ?> | All Rights Reserved 
            </div>
        </div>
    </div>
</section>


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


<script src="https://kit.fontawesome.com/4effbd114b.js" crossorigin="anonymous"></script><!--Font awesome naviagtion menu-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script><!--Gallery-->
</body>
</html>