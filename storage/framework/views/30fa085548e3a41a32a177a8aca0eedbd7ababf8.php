<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medi-Khet</title>

    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/animate.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/extra.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
     
  

  </head>

  <body ng-app="" id="page-top">
    <div >
    <!-- Navigation -->
 <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase " id="mainNav">
      <div class="container">
        

          <a class="navbar-brand js-scroll-trigger " href="<?php echo e(url('/')); ?>"><img src="img/logo.png" style="height: 70px"></a>
       
        
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(url('/')); ?>">home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Blogs</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Contact</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(url('/home')); ?>">login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> 

  </div>
    <!-- Header -->
<br>
<br>
<br>
<br>

    
    <!-- Contact Section -->
 <section class="portfolio" id="portfolio">
      <div class="container">
        
        
        <div class="row">
         <div class="media">
    <div class="media-left">
      <img src="img/logo.png" class="media-object img-thumbnail" style="width:400px;margin-right: 100px">
    </div>
    <div class="jumbotron" style="padding: 0px; width:400px;">
    <div class="card-body">
      <h4 class="media-heading" style="color: #444">Name</h4>
      <br>
      
      <h4> <?php echo e($product[0]->Name); ?></h4>
      <p>Price: <?php echo e($product[0]->Price); ?> BDT</p>
      <p>Scientific Name: sadasdasd</p>
      
    </div>
    </div>
  </div>
              </div>
            </div>
    </section>



    <!-- Footer -->
   
    <div ng-include="'includes/footer.html'"></div>
    

    <!-- Bootstrap core JavaScript -->
    

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/angular.min.js"></script>

    <!-- Custom scripts for this template -->
    
      <script type="text/javascript">
  var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3,
    loop:true, 
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:false,
    responsiveClass:true,
     responsive:{
        0:{
            items:1,
            nav:false,

        },
        600:{
            items:1,
            nav:false,
         
        },
        1000:{
            items:3,
            nav:false,
            
        }
    }

});


</script>


  </body>

</html>

