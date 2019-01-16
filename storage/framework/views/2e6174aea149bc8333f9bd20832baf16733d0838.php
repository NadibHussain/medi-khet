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
    <header class="masthead bg-primary text-white text-center" style="height: 10px">
      <div class="container" >
       <form action="<?php echo e(URL::to('/list')); ?>" method="POST" role="search"> 
            <?php echo e(csrf_field()); ?>

              <div class="form-row">
                <div class="col-12 col-md-6 mb-2 mb-md-0">
                  <input type="text" name="name" class="form-control form-control-lg" placeholder="Name Of the drugs">
                </div>
                 <!-- Catagories dropdown -->
                 <div class="col-12 col-md-3">
                <select class="btn btn-block btn-lg btn-secondary" name="category">
                    <option value="all">Select Catagory</option>
                   <option value="Fever & Painkiller"> Fever & Painkiller</option>
                   <option value="Skin Disease & Allergy">Skin Disease & Allergy</option>
                   <option value="Gastric">Gastric</option>
                   <option value="High Blood Pressure">High Blood Pressure</option>
                   <option value="Anti-depression">Anti-depression</option>
                  </select> 
                </div>
                
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-secondary">Search!</button>
                </div>
              </div>
            </form>
      </div>
    </header>

    <!-- Portfolio Grid Section -->

     <div >
    <!-- Navigation -->
   <section class="portfolio" id="portfolio">
      <div class="container" >
        <h2 class="text-center text-uppercase text-secondary mb-0">Best Selling Item</h2>
        <hr class="star-dark mb-5">
        <div class="row" >
          <div  class="col-md-6 col-lg-4">
         <div class=bordered-box>
          <a href="<?php echo e(url('detail/'.$products[0]->Name)); ?>" style="text-decoration: none;">
          <div class="card">
            <img class="prof" src="img/products/<?php echo e($products[0]->Image); ?>.jpg" alt="John" style="width:50%" >
            <h3><?php echo e($products[0]->Name); ?></h3>
            <p class="title"><?php echo e($products[0]->Category); ?></p>
            <p><?php echo e($products[0]->ScientificName); ?></p>
            <div style="margin: 24px 0;">
              
           </div>
           <p><button>Add to Cart</button></p>
          </div>
          </a>
         </div>
          </div>
         <div class="col-md-6 col-lg-4">
         <div class=bordered-box>
          <a href="<?php echo e(url('detail/'.$products[1]->Name)); ?>" style="text-decoration: none;">
          <div class="card">
            <img class="prof" src="img/products/<?php echo e($products[1]->Image); ?>.jpg" alt="John" style="width:50%" >
            <h3><?php echo e($products[1]->Name); ?></h3>
            <p class="title"><?php echo e($products[1]->Category); ?></p>
            <p><?php echo e($products[1]->ScientificName); ?></p>
            <div style="margin: 24px 0;">
              
           </div>
           <p><button>Add to Cart</button></p>
          </div>
           </a>
         </div>
          </div>
          <div class="col-md-6 col-lg-4">
         <div class=bordered-box>
          <a href="<?php echo e(url('detail/'.$products[2]->Name)); ?>" style="text-decoration: none;">
          <div class="card">
        
            
            <img class="img-fluid" src="img/products/<?php echo e($products[2]->Image); ?>.jpg" alt="John" style="width:50%" >
          
        
            <h3><?php echo e($products[2]->Name); ?></h3>
            <p class="title"><?php echo e($products[2]->Category); ?></p>
            <p><?php echo e($products[2]->ScientificName); ?></p>            
            <div style="margin: 24px 0;">           
           </div>
           <p><button>Add to Cart</button></p>
          </div>
          </a> 
         </div>
          </div>
          <div class="col-md-6 col-lg-4">
             <div class=bordered-box>
              <a href="<?php echo e(url('detail/'.$products[3]->Name)); ?>" style="text-decoration: none;">
          <div class="card">
     
            
            <img class="img-fluid" src="img/products/<?php echo e($products[3]->Image); ?>.jpg" alt="John" style="width:50%" >
          
    
            <h3><?php echo e($products[3]->Name); ?></h3>
            <p class="title"><?php echo e($products[3]->Category); ?></p>
            <p><?php echo e($products[3]->ScientificName); ?></p>            
            <div style="margin: 24px 0;">           
           </div>
           <p><button>Add to Cart</button></p>
          </div>
           </a>
         </div>

          </div>
          <div class="col-md-6 col-lg-4">
             <div class=bordered-box>
           <a href="<?php echo e(url('detail/'.$products[4]->Name)); ?>" style="text-decoration: none;">   
          <div class="card">

            <img class="img-fluid" src="img/products/<?php echo e($products[4]->Image); ?>.jpg" alt="John" style="width:50%" >

            <h3><?php echo e($products[4]->Name); ?></h3>
            <p class="title"><?php echo e($products[4]->Category); ?></p>
            <p><?php echo e($products[4]->ScientificName); ?></p>            
            <div style="margin: 24px 0;">           
           </div>
           <p><button>Add to Cart</button></p>
          </div>
           </a>
         </div>

          </div>
          <div class="col-md-6 col-lg-4" ">
             <div class=bordered-box  >
              <a href="<?php echo e(url('detail/'.$products[5]->Name)); ?>" style="text-decoration: none;">
          <div class="card" >

            <img class="img-fluid" src="img/products/<?php echo e($products[5]->Image); ?>.jpg" alt="John"  style="width:50%">

            <h3><?php echo e($products[5]->Name); ?></h3>
            <p class="title"><?php echo e($products[5]->Category); ?></p>
            <p><?php echo e($products[5]->ScientificName); ?></p>            
            <div style="margin: 24px 0;">           
           </div>
           <p><button>Add to Cart</button></p>
          </div>
           </a>
         </div>

          </div>
        </div>
      </div>
    </section>

    
    <!-- Contact Section -->
   <section class="bg-primary text-white mb-0" id="about">
     <h2 class="text-center text-uppercase text-white">Our Blog</h2>
        <hr class="star-light mb-5">
      <div class="container">
       <div class="owl-carousel owl-theme">
    <div class="card" style="width:300px;height: 470px;">
    <img class="card-img-top" src="img/blogs/<?php echo e($blogs[0]->image); ?>.jpg" alt="Card image" style="background-size: cover">
    <div class="card-body">
      <h6 class="card-title"><?php echo e(str_limit($blogs[0]->title,30)); ?></h6>
      <p class="card-text"><?php echo e(str_limit($blogs[0]->description,160)); ?></p>
      <a href="<?php echo e(url('/blog1')); ?>" class="btn btn-primary">Read More</a>
    </div>
  </div>
     <div class="card" style="width:300px;height: 470px;">
    <img class="card-img-top" src="img/blogs/<?php echo e($blogs[1]->image); ?>.jpg" alt="Card image" style="background-size: cover">
    <div class="card-body">
     <h6 class="card-title"><?php echo e(str_limit($blogs[1]->title,30)); ?></h6>
      <p class="card-text"><?php echo e(str_limit($blogs[1]->description,160)); ?></p>
      <a href="<?php echo e(url('/blog2')); ?>" class="btn btn-primary">Read More</a>
    </div>
  </div>
     <div class="card" style="width:300px;height: 470px;">
    <img class="card-img-top" src="img/blogs/<?php echo e($blogs[2]->image); ?>.jpg" alt="Card image" style="background-size: cover">
    <div class="card-body">
      <h6 class="card-title"><?php echo e(str_limit($blogs[2]->title,30)); ?></h6>
      <p class="card-text"><?php echo e(str_limit($blogs[2]->description,160)); ?></p>
      <a href="<?php echo e(url('/blog3')); ?>" class="btn btn-primary">Read More</a>
    </div>
  </div>
     <div class="card" style="width:300px;height: 470px;">
    <img class="card-img-top" src="img/blogs/<?php echo e($blogs[3]->image); ?>.jpg" alt="Card image" style="background-size: cover">
    <div class="card-body">
      <h6 class="card-title"><?php echo e(str_limit($blogs[3]->title,30)); ?></h6>
      <p class="card-text"><?php echo e(str_limit($blogs[3]->description,160)); ?></p>
      <a href="<?php echo e(url('/blog4')); ?>" class="btn btn-primary">Read More</a>
    </div>
  </div>
      <div class="card" style="width:300px;height: 470px;">
    <img class="card-img-top" src="img/blogs/<?php echo e($blogs[4]->image); ?>.jpg" alt="Card image" style="background-size: cover">
    <div class="card-body">
      <h6 class="card-title"><?php echo e(str_limit($blogs[4]->title,30)); ?></h6>
      <p class="card-text"><?php echo e(str_limit($blogs[4]->description,160)); ?></p>
      <a href="<?php echo e(url('/blog5')); ?>" class="btn btn-primary">Read More</a>
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

