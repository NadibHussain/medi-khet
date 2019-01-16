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
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link href="<?php echo e(asset('css/extra.css')); ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo e(asset('vendor/magnific-popup/magnific-p')); ?>opup.css" rel="stylesheet" type="text/css">
    

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/freelancer.min.css')); ?>" rel="stylesheet">
     
  

  </head>

  <body ng-app="" id="page-top">
    <div >
    <!-- Navigation -->
 <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase " id="mainNav">
      <div class="container">
        

          <a class="navbar-brand js-scroll-trigger " href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('img/logo.png')); ?>" style="height: 70px"></a>
       
        
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
      <img src="<?php echo e(asset('img/products/'.$product[0]->Image.'.jpg')); ?>" class="media-object img-thumbnail" style="width:300px;margin-right: 100px;height: 200px;">
    </div>
    <div class="jumbotron" style="padding: 0px; width:600px;">
    <div class="card-body">
      <h4 class="media-heading" style="color: #444"><?php echo e($product[0]->Name); ?></h4>
      <br>
      
      <h6>Scientific Name: <?php echo e($product[0]->ScientificName); ?> </h6>
      <p>Price: <?php echo e($product[0]->Price); ?> BDT</p>
      <p><?php echo e($product[0]->Description); ?></p>
      
    </div>
    </div>
  </div>
              </div>
            </div>
    </section>



    <!-- Footer -->
   
     <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">BANANI
              <br>Road:27,House:2/A</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Medikhet</h4>
            <p class="lead mb-0">Medi-khet is a experimental project done at the internship period by
              <a href="http://startbootstrap.com">G&R</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; MEDI-KHET</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
    

    <!-- Bootstrap core JavaScript -->
    

    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo e(asset('js/jqBootstrapValidation.js')); ?>"></script>
    <script src="js/contact_me.js"></script>
    <script src="<?php echo e(asset('js/angular.min.js')); ?>"></script>

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

