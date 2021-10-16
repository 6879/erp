

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/')); ?>/frontend/css/new_style.css"/>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main_content'); ?>
    <?php
    $css = "background: linear-gradient(0deg, rgba(124, 50, 255, 0.6), rgba(199, 56, 216, 0.6)), url(" . url($homePage->image) . ") no-repeat center;    background-size: cover;";
    ?>
    <style type="text/css">
        .client .events-item .card .card-body .date {
            max-width: 90px !important;
        }
    </style>
    
    
    
    
    
    
      
    
    
      <!--================ Home Banner Area new =================-->
      
      
       

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<header style="background:#797b7c;">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="<?php echo e(url($homePage->image)); ?>" alt="images not found">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line"></div>
                        <h2><?php echo e($homePage->title); ?></h2>
                        <h1><?php echo e($homePage->long_title); ?></h1>
                        <h4><?php echo e($homePage->short_description); ?></h4>
                         <a class="primary-btn fix-gr-bg semi-large"
                           href="<?php echo e($homePage->link_url); ?>"><?php echo e($homePage->link_label); ?></a>
                    </div>
                </div>
             </div>
        </div>                    
        <div class="item">
            <img src="<?php echo url('/') ?>/public/uploads/settings/bn-img/INFINITYERP.PNG" alt="images not found">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line animated bounceInLeft"></div>
                        <h2><?php echo e($homePage->title); ?></h2>
                        <h1><?php echo e($homePage->long_title); ?></h1>
                        <h4><?php echo e($homePage->short_description); ?></h4>
                         <a class="primary-btn fix-gr-bg semi-large"
                           href="<?php echo e($homePage->link_url); ?>"><?php echo e($homePage->link_label); ?></a>
                    </div>
                </div>
             </div>
        </div>                
        <div class="item">
            <img src="https://ihsbd.net/uploads/photogallery/403448620.jpg" alt="images not found">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line animated bounceInLeft"></div>
                        <h2><?php echo e($homePage->title); ?></h2>
                        <h1><?php echo e($homePage->long_title); ?></h1>
                        <h4><?php echo e($homePage->short_description); ?></h4>
                         <a class="primary-btn fix-gr-bg semi-large"
                           href="<?php echo e($homePage->link_url); ?>"><?php echo e($homePage->link_label); ?></a>
                    </div>
                </div>
             </div>
        </div>
    </div>
</header>


<style type="text/css">
    header .item {
  height: 100vh;
  position: relative;
}
header .item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
header .item .cover {
  padding: 75px 0;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.6);
  display: flex;
  align-items: center;
}
header .item .cover .header-content {
  position: relative;
  padding: 56px;
  overflow: hidden;
}
header .item .cover .header-content .line {
  content: "";
  display: inline-block;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  position: absolute;
  border: 9px solid #fff;
  -webkit-clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
  clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
}
header .item .cover .header-content h2 {
  font-weight: 300;
  font-size: 35px;
  color: #fff;
}
header .item .cover .header-content h1 {
  font-size: 56px;
  font-weight: 600;
  margin: 5px 0 20px;
  word-spacing: 3px;
  color: #fff;
}
header .item .cover .header-content h4 {
  font-size: 24px;
  font-weight: 300;
  line-height: 36px;
  color: #fff;
}
header .owl-item.active h1 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInDown;
  animation-delay: 0.3s;
}
header .owl-item.active h2 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInDown;
  animation-delay: 0.3s;
}
header .owl-item.active h4 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInUp;
  animation-delay: 0.3s;
}
header .owl-item.active .line {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInLeft;
  animation-delay: 0.3s;
}
header .owl-nav .owl-prev {
  position: absolute;
  left: 15px;
  top: 43%;
  opacity: 0;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  background: rgba(0, 0, 0, 0.5) !important;
  width: 40px;
  cursor: pointer;
  height: 40px;
  position: absolute;
  display: block;
  z-index: 1000;
  border-radius: 0;
}
header .owl-nav .owl-prev span {
  font-size: 1.6875rem;
  color: #fff;
}
header .owl-nav .owl-prev:focus {
  outline: 0;
}
header .owl-nav .owl-prev:hover {
  background: #000 !important;
}
header .owl-nav .owl-next {
  position: absolute;
  right: 15px;
  top: 43%;
  opacity: 0;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  background: rgba(0, 0, 0, 0.5) !important;
  width: 40px;
  cursor: pointer;
  height: 40px;
  position: absolute;
  display: block;
  z-index: 1000;
  border-radius: 0;
}
header .owl-nav .owl-next span {
  font-size: 1.6875rem;
  color: #fff;
}
header .owl-nav .owl-next:focus {
  outline: 0;
}
header .owl-nav .owl-next:hover {
  background: #000 !important;
}
header:hover .owl-prev {
  left: 0px;
  opacity: 1;
}
header:hover .owl-next {
  right: 0px;
  opacity: 1;
}
</style>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    animateOut: 'slideOutUp',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
</script>



      <!--================ End Home Banner Area new =================-->
      
      
      
      
      
      
      
  
    
    
    
    
    
    
    
    
    
    
    
    

    <!--================ Breking News Area =================-->
    <section class="news-area" data-aos="fade-up">
        <div class="container-fluid">
            <div class="row">
                 
<!--head-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<!--body-->
<div class="container-fluid">
  
    <!--start code-->
	<div class="row mb-1">
	    <div class="col-12 py-1" style="
background:linear-gradient(to right, #700fb3, #bc0095, #e70071, #fc234d, #ff6429);
    ">
    	    <div class="row">
                <!--Breaking box-->
                <div class="col-md-3 col-lg-2 pr-md-0">
                    <div class="p-2 bg-primary text-white text-center breaking-caret"><span class="font-weight-bold">School News</span></div>
                </div>
                <!--end breaking box-->
                <!--Breaking content-->
                <div class="col-md-9 col-lg-10 pl-md-4 py-2">
                    <div class="breaking-box">
                        <div id="carouselbreaking" class="carousel slide" data-ride="carousel">
                            <!--breaking news-->
                            <div class="carousel-inner">
                                <!--post-->
                                <div class="carousel-item">
                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                        <span class="position-relative mx-2 badge badge-primary rounded-0">Welcome</span></a> <a class="text-white" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">to Infinity School.</a>
                                </div>
                                <!--post-->
                                <div class="carousel-item">
                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"><span class="position-relative mx-2 badge badge-primary rounded-0">Welcome</span></a> <a class="text-white" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"> Infinity School.</a>
                                </div>
                                <!--post-->
                                <div class="carousel-item">
                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"><span class="position-relative mx-2 badge badge-primary rounded-0">Welcome</span></a> <a class="text-white" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"> Infinity School.</a>
                                </div>
                                <!--post-->
                                <div class="carousel-item">
                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"><span class="position-relative mx-2 badge badge-primary rounded-0">Welcome</span></a> <a class="text-white" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"> Infinity School.</a>
                                </div>
                                <!--post-->
                                <div class="carousel-item active">
                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"><span class="position-relative mx-2 badge badge-primary rounded-0">Welcome</span></a> <a class="text-white" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"> Infinity School.</a>
                                </div>
                            </div>
                            <!--end breaking news-->
                            
                            <!--navigation slider-->
                            <div class="navigation-box p-2 d-none d-sm-block">
                                <!--nav left-->
                                <a class="carousel-control-prev text-primary" href="#carouselbreaking" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <!--nav right-->
                                <a class="carousel-control-next text-primary" href="#carouselbreaking" role="button" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--end navigation slider-->
                        </div>
                    </div>
                </div>
                <!--end breaking content-->
            </div>
        </div>
	</div>
	<!--end code-->
	
 
</div>
                </div>
        </div>
    </section>
    
    
    <style>
        .navigation-box {
    top: .4rem;
    right: .8rem;
    width: 2rem;
    position: absolute;
}
@media (min-width: 768px){
    .breaking-caret:after {
        content: "";
        width: 0;
        height: 0;
        border-top: 20px solid transparent;
        border-left: 15px solid #007bff;
        border-bottom: 20px solid transparent;
        position: absolute;
        right: -15px;
        top: 0;
    }
}
    </style>
       <!--================ End Breking News Area =================--> 
    
    
    
    
    <!--================ Start About Us Area =================-->
    <section class="info-area">
        <div class="container">				
            <div class="single-info row mt-40 align-items-center">
                <div class="col-lg-3 col-md-12 text-center pr-lg-0 info-left border shadow" data-aos="fade-right">
                    <div class="info-thumb">
                        <img src="<?php echo e(url('/')); ?>/public/uploads/settings/chairman.jpg" class="img-fluid" alt="Chairman" style="width:198px;">
                        <p>
                            A S M Jamaluddin 
                            <br>
                            Chairman, INFINITY SCHOOL
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 info-rigth"data-aos="fade-left">
                    <div class="info-content border shadow" style="padding: 20px; min-height: 268px;position:unset;">
                        <h2> Message from the Chairman </h2>
                        <p> INFINITY has all in one place. You’ll find everything what you are looking into education management system software. We care! User will never bothered in our real eye catchy user friendly UI & UX Interface design. You know! Smart Idea always comes to well planners. And Our INFIX is Smart for its Well Documentation. Explore in new support world! It’s now faster & quicker. You’ll find us on Support Ticket, Email, Skype, WhatsApp. </p>
                        <p class="text-right">
                            <br>
                            <a href="#" class="primary-btn small fix-gr-bg"> Read More </a></p>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->

    
    
    
    
    <!--================ Start About Us Area =================-->
    <section class="info-area">
        <div class="container">				
            <div class="single-info row mt-40 align-items-center">
                
                
                <div class="col-lg-6 col-md-12 pl-lg-0 info-rigth"data-aos="fade-right">
                    <div class="info-content border shadow" style="padding: 20px; min-height: 355px;position: unset;">
                        <h2> Welcome To Infinity School </h2>
                        <p> INFINITY has all in one place. You’ll find everything what you are looking into education management system software. We care! User will never bothered in our real eye catchy user friendly UI & UX Interface design. You know! Smart Idea always comes to well planners. And Our INFIX is Smart for its Well Documentation. Explore in new support world! It’s now faster & quicker. You’ll find us on Support Ticket, Email, Skype, WhatsApp. </p>
                        <p class="text-right">
                            <br>
                            <a href="#" class="form-control primary-btn small fix-gr-bg"> Read More </a></p>
                        </div>
                </div>
                <div class="col-lg-6 col-md-12 text-center pl-lg-0 pr-lg-0 info-left border shadow" data-aos="fade-left">
                    <div class="info-thumb" style="display:block;">
                        <iframe width="100%" height="355" src="https://www.youtube.com/embed/40Z8iagZccA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->

    
    
    

    <!--================ News Area =================-->
    
    
    <style>
.parallax {
  /* The image used */
  background-image: url("<?php echo url('/') ?>/public/uploads/settings/bn-img/1.jpg");

  /* Set a specific height */
  height: 200px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin-bottom:40px;
}
.parallax1 {
  /* The image used */
  background-image: url("<?php echo url('/') ?>/public/uploads/settings/bn-img/2.jpg");

  /* Set a specific height */
  height: 200px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin-bottom:40px;
}
.parallax2 {
  /* The image used */
  background-image: url("<?php echo url('/') ?>/public/uploads/settings/bn-img/1.jpg");

  /* Set a specific height */
  height: 310px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin-bottom:40px;
}
.parallax3 {
  /* The image used */
  background-image: url("<?php echo url('/') ?>/public/uploads/settings/bn-img/2.jpg");

  /* Set a specific height */
  height: 110px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin-bottom:40px;
}
.parallax_box{
    width:100%;
    height:100%;
    background-color:#212529c9;
}
.parallax_box1{
    width:100%;
    height:100%;
    background-image: linear-gradient(to right top, #051937ad, #004d7ac4, #008793b3, #00bf72c4, #a8eb12a6);
}
.parallax_box2{
    width:100%;
    height:100%;
    background-image: linear-gradient(to right, #700fb3bf, #bc0095bf, #e70071c4, #fc234dc7, #ff642982);
}
</style>





    <section class="news-area" style="padding-top:20px;">
        <div class="parallax" data-aos="fade-down">
        <div class="parallax_box">
            <center>
                <h1 style="opacity: .5;
    color: white;
    font-size: 558%;
    line-height: 230%;">  
    <!--@ if ( isset ( $per ["Latest News"]))    @ lang(' lang.latest_news') @ e ndif-->
    School News </h1>
                <a href="<?php echo e(url('news-page')); ?>"> <img src="https://layerdrops.com/zimed/assets/images/shapes/footer-shape-3.png" style="opacity:.2;position:relative;top:-191px;"> </a>
            </center>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <?php if(isset($per["Latest News"])): ?>
                    <div class="col-lg-9" data-aos="fade-right">
                         
                        <div class="row">
                            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="news-item">
                                        <div class="news-img">
                                            <img class="img-fluid w-100 news-image" src="<?php echo e(asset($value->image)); ?>"
                                                 alt="">
                                        </div>
                                        <div class="news-text">
                                            <p class="date">
                                                <?php echo e($value->publish_date != ""? dateConvert($value->publish_date):''); ?>

                                            </p>
                                            <h4>
                                                <a href="<?php echo e(url('news-details/'.$value->id)); ?>">
                                                    <?php echo e($value->news_title); ?>

                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($per["Notice Board"])): ?>
                    <div class="col-lg-3 notice-board-area bg-light border shadow" style="height:340px;" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-12 bg-success text-center">
                                <h3 class="title text-white mt-2"><?php echo app('translator')->get('lang.notice_board'); ?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="notice-board">
                                    <?php $__currentLoopData = $notice_board; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="notice-item">
                                            <p class="date">

                                                <?php echo e($notice->publish_on != ""? dateConvert($notice->publish_on):''); ?>


                                            </p>
                                            <a href="#" data-toggle="modal" data-target="#NoticeDetails<?php echo e($notice->id); ?>">
                                                <h4><?php echo e($notice->notice_title); ?></h4></a>

                                            <div class="modal fade admin-query" id="NoticeDetails<?php echo e($notice->id); ?>">
                                                <div class="modal-dialog modal-dialog-centered  modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-white "><?php echo e($notice->notice_title); ?></h4>

                                                            <button type="button" class="close" data-dismiss="modal">
                                                                &times;
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-left">
                                                                <p class="text-left"><?php echo $notice->notice_message; ?></p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>



    <!--================End News Area =================-->
    
    
    
    
    
    
    
    
    
    
    <!--================ Start Result Slider =================-->
    <section class="info-area">
        <div class="container-fluid p-0 pb-5" data-aos="fade-up">	
       
            
            
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo url('/') ?>/public/uploads/settings/bn-img/2020.PNG" alt="First slide" style="width:100%;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo url('/') ?>/public/uploads/settings/bn-img/2021.PNG" alt="Second slide" style="width:100%;">
    </div>
 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



          
            </div>
            </div>
            
    
    
    
    <!--================ End Result Slider =================-->
    
    
    
    
    
    
    
    
    
<!--is s et( $per [" Academics "] )-->
    <?php if(0): ?>
        <!--================ Academics Area =================-->
        <section class="academics-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-7">
                                <h3 class="title"><?php echo app('translator')->get('lang.course_list'); ?></h3>
                            </div>
                            <div class="col-lg-6 col-md-5 text-md-right text-left mb-30-lg">
                                <a href="<?php echo e(url('course')); ?>"
                                   class="primary-btn small fix-gr-bg"><?php echo app('translator')->get('lang.browse_all'); ?></a>
                            </div>
                        </div>
                        <div class="row">
                            <?php $__currentLoopData = $academics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $academic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="academic-item">
                                        <div class="academic-img">
                                            <img class="img-fluid" src="<?php echo e(asset($academic->image)); ?>" alt="">
                                        </div>
                                        <div class="academic-text">
                                            <h4>
                                                <a href="<?php echo e(url('course-Details/'.$academic->id)); ?>"><?php echo e($academic->title); ?></a>
                                            </h4>
                                            <p>
                                                <?php echo substr($academic->overview, 0, 50); ?>

                                            </p>
                                            <div>
                                                <a href="<?php echo e(url('course-Details/'.$academic->id)); ?>" class="client-btn">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Academics Area =================-->
    <?php endif; ?>

    <?php if(isset($per["Event List"])): ?>

        
        <!--================ Events Area =================-->
        <section class="events-area bg-light" style="margin-bottom:0px;">
            
            
                    <div class="parallax1"data-aos="zoom-in">
        <div class="parallax_box">
            <center>
                <h1 style="opacity: .5;
    color: white;
    font-size: 558%;
    line-height: 230%;"> 
    <!--@ lan g( 'la ng.eve nt_is t' )-->
    School Event List </h1>
    <img src="https://layerdrops.com/zimed/assets/images/shapes/footer-shape-3.png" style="opacity:.2;position:relative;top:-191px;">
            </center>
        </div>
        </div>
        
        
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="row">
                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                                    <div class="events-item">
                                        <div class="card">
                                            <img class="card-img-top" class="img-fluid"
                                                 src="<?php echo e(asset($event->uplad_image_file)); ?>" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <?php echo e($event->event_title); ?>

                                                </h5>
                                                <p class="card-text">
                                                    <?php echo e($event->event_location); ?>

                                                </p>
                                                <div class="date">

                                                    <?php echo e($event->from_date != ""? dateConvert($event->from_date):''); ?>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Events Area =================-->
    <?php endif; ?>
    
    
    
    
    
    
    
        <!--================ Start coundown =================-->
    
    <!-- Counts JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
</head>
<body>
    <!-- Counts Section -->
    <section class="counts-section">
        
        
                    <div class="parallax2">
        <div class="parallax_box1">
            
         
    
        <div class="text-white py-5">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 text-center" style="margin-bottom:40px;">
                            <h1 style="color:white!important;"> At a Glance </h1>
                            <h6 style="color:white!important;"> Infinity School </h6>
                    </div>
                    
                    
                    
                    <div class="col-lg-3 col-6 text-center text-light">
                        <h1 style="font-size:45px;color:white!important;"><span class="ti-calendar"></span></h1>
                        <h2 style="color:white!important;" data-toggle="counterUp">50</h2>
                        <h6 style="color:white!important;">Class Room</h6>
                    </div>
                    <div class="col-lg-3 col-6 text-center text-light">
                        <h1 style="font-size:45px;color:white!important;"><span class="ti-unlink"></span></h1>
                        <h2 style="color:white!important;" data-toggle="counterUp">25</h2>
                        <h6 style="color:white!important;">Computer Lab</h6>
                    </div>
                    <div class="col-lg-3 col-6 text-center text-light">
                        <h1 style="font-size:45px;color:white!important;"><span class="ti-user"></span></h1>
                        <h2 style="color:white!important;" data-toggle="counterUp">1,000</h2>
                        <h6 style="color:white!important;"> Students </h6>
                    </div>
                    <div class="col-lg-3 col-6 text-center text-light">
                        <h1 style="font-size:45px;color:white!important;"><span class="ti-palette"></span></h1>
                        <h2 style="color:white!important;" data-toggle="counterUp">50</h2>
                        <h6 style="color:white!important;">Teachers</h6>
                    </div>
                </div>
            </div>
        </div>
        
        
        </div>
        </div>
        
    </section>

    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        // jQuery counterUp
        $('[data-toggle="counterUp"]').counterUp({
            delay: 15,
            time: 1500
        });
    </script>
    
    <!--================ End coundown =================-->
    
    
    
    
    
    
    <!--================ Start Teacher Testimonial  =================-->
    
    
<section class="section-ptb bg-white bg-5" style="padding:20px!important;background:url(https://layerdrops.com/zimed/assets/images/shapes/faq-shape-1.png);background-repeat:no-repeat;background-position:top center;">
    <div class="container">
      <div class="row text-center" data-aos="fade-right">
        <div class="col-12">
          <div class="heading">
            <h1 style="font-size:50px;">What Learner Say </h1>
            <h4 class="mb-20">Looked up one of the more obscure Latin words, consectetur, from <br class="d-none d-md-block"> a Lorem Ipsum passage, and going</h4>
            <!--<hr class="line bw-2 mx-auto line-sm mb-5">-->
            <!--<hr class="line bw-2 mx-auto">-->
          </div>
        </div>
      </div>
      <div class="row"data-aos="fade-left">
        <div class="col-12">
          <div class="client-testimonial position-relative">
            <div class="client-nav">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#client1" data-toggle="tab">
                    <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/1.png" alt="Client Image">
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#client2" data-toggle="tab">
                    <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/2.png" alt="Client Image">
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#client3" data-toggle="tab">
                    <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/3.png" alt="Client Image">
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#client4" data-toggle="tab">
                    <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/4.png" alt="Client Image">
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#client5" data-toggle="tab">
                    <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/5.png" alt="Client Image">
                  </a>
                </li>
              </ul>
            </div>
            <div class="row text-center">
              <div class="col-10 col-md-8 col-lg-6 mx-auto">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="client1">
                    <div class="client-thumb mx-auto mb-25">
                      <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/1.png" alt="Client Image">
                    </div>
                    <div class="client-desc border shadow bg-light d-flex align-items-center">
                      <div class="text mx-auto">
                        <h4 class="mb-10">A S M Jamaluddin</h4>
                        <h6>Chairman, Infinity School</h6>
                        <p>Richard McClintock, a Latin professor at Hampden <br class="d-none d-lg-block">College in Virginia, looked up one of the more obscure Latin words</p>
                      </div>
                    </div>
                  </div>
                  <!-- Single Client End -->
                  <div class="tab-pane fade" id="client2">
                    <div class="client-thumb mx-auto mb-25">
                      <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/2.png" alt="Client Image">
                    </div>
                    <div class="client-desc border shadow bg-light d-flex align-items-center">
                      <div class="text mx-auto">
                        <h4 class="mb-10">Ethan Green</h4>
                        <h6>Photograper</h6>
                        <p>Many desktop publishing packages and web page editors <br class="d-none d-lg-block"> now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'</p>
                      </div>
                    </div>
                  </div>
                  <!-- Single Client End -->
                  <div class="tab-pane fade" id="client3">
                    <div class="client-thumb mx-auto mb-25">
                      <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/3.png" alt="Client Image">
                    </div>
                    <div class="client-desc border shadow bg-light d-flex align-items-center">
                      <div class="text mx-auto">
                        <h4 class="mb-10">Marie Soto</h4>
                        <h6>Designer</h6>
                        <p>Virginia, looked up one of the more obscure Latin <br class="d-none d-lg-block"> words, consectetur, from a Lorem Ipsum passage, and going through the cites of looked</p>
                      </div>
                    </div>
                  </div>
                  <!-- Single Client End -->
                  <div class="tab-pane fade" id="client4">
                    <div class="client-thumb mx-auto mb-25">
                      <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/4.png" alt="Client Image">
                    </div>
                    <div class="client-desc border shadow bg-light d-flex align-items-center">
                      <div class="text mx-auto">
                        <h4 class="mb-10">Willie Munoz</h4>
                        <h6>Content Writer</h6>
                        <p>Words which don't look even slightly believable. <br class="d-none d-lg-block">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything</p>
                      </div>
                    </div>
                  </div>
                  <!-- Single Client End -->
                  <div class="tab-pane fade" id="client5">
                    <div class="client-thumb mx-auto mb-25">
                      <img class="drop-shadow" src="http://regaltheme.com/tf/multi/rnr/assets/img/client/thumb/5.png" alt="Client Image">
                    </div>
                    <div class="client-desc border shadow bg-light d-flex align-items-center">
                      <div class="text mx-auto">
                        <h4 class="mb-10">Susan Gardner</h4>
                        <h6>Manager</h6>
                        <p>The point of using Lorem Ipsum is that it has a more <br class="d-none d-lg-block"> normal distribution of letters, as opposed to using 'Content here, content here point of using</p>
                      </div>
                    </div>
                  </div>
                  <!-- Single Client End -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <style>
      .client-testimonial .drop-shadow {
  -webkit-filter: drop-shadow(0px 15px 50px rgba(2, 173, 136, 0.2));
  -moz-filter: drop-shadow(0px 15px 50px rgba(2, 173, 136, 0.2));
  -o-filter: drop-shadow(0px 15px 50px rgba(2, 173, 136, 0.2));
  filter: drop-shadow(0px 15px 50px rgba(2, 173, 136, 0.2)); }
.bg-5 {
    background-image: url("http://regaltheme.com/tf/multi/rnr/assets/img/bg/5.png");
    background-position: center 65%;
    background-size: auto;
    background-repeat: no-repeat;
}
.client-testimonial .client-nav .nav-item {
  position: absolute;
  z-index: 5;
  width: 10.5rem; }
  .client-testimonial .client-nav .nav-item:nth-child(1) {
    top: 2.5rem;
    right: 16%;
    width: 7rem; }
  .client-testimonial .client-nav .nav-item:nth-child(2) {
    bottom: 3rem;
    right: 0; }
    @media (min-width: 1281px) {
      .client-testimonial .client-nav .nav-item:nth-child(2) {
        right: -3rem; } }
  .client-testimonial .client-nav .nav-item:nth-child(3) {
    bottom: 9rem;
    left: 4%; }
  .client-testimonial .client-nav .nav-item:nth-child(4) {
    top: -2rem;
    left: 0;
    width: 7rem; }
    @media (min-width: 1281px) {
      .client-testimonial .client-nav .nav-item:nth-child(4) {
        left: -8rem; } }
  .client-testimonial .client-nav .nav-item:nth-child(5) {
    top: -9rem;
    right: 0;
    width: 7rem; }
    @media (min-width: 1281px) {
      .client-testimonial .client-nav .nav-item:nth-child(5) {
        right: -5.5rem; } }
  @media (max-width: 767.98px) {
    .client-testimonial .client-nav .nav-item {
      position: relative !important;
      top: 0 !important;
      left: 0 !important;
      right: inherit;
      width: 7rem !important; } }

.client-testimonial .tab-content .fade {
  -webkit-transition: all 0.4s ease-in;
  -o-transition: all 0.4s ease-in;
  transition: all 0.4s ease-in; }

.client-testimonial .tab-content .client-thumb {
  width: 10.5rem; }

.client-testimonial .tab-content .client-desc {
  -webkit-box-shadow: 0px 15px 50px 0px rgba(115, 115, 115, 0.06);
  box-shadow: 0px 15px 50px 0px rgba(115, 115, 115, 0.06);
  min-height: 21rem;
  padding: 2rem; }
  .client-testimonial .tab-content .client-desc h6 {
    font-size: 1.3rem; }
.section-ptb, .section-pt, .section-pb {
  padding-top: 12rem;
  padding-bottom: 12rem; }
  @media (min-width: 768px) and (max-width: 991.98px) {
    .section-ptb, .section-pt, .section-pb {
      padding-top: 8rem;
      padding-bottom: 8rem; } }
  @media (max-width: 767.98px) {
    .section-ptb, .section-pt, .section-pb {
      padding-top: 6rem;
      padding-bottom: 6rem; } }
      hr.line {
  margin: 0;
  border-color: #1c223a;
  border-width: 1px;
  width: 4.5rem; }
  hr.line.line-sm {
    width: 8.6rem;
}
hr.line.bw-2 {
    border-width: 2px;
}
.mb-5 {
    margin-bottom: 0.5rem !important;
}
.mb-80 {
  margin-bottom: 8rem !important; }
  .mb-20 {
  margin-bottom: 2rem !important; }
  .mb-25 {
  margin-bottom: 2.5rem !important; }
 
  </style>
  
  
  
    <!--================ End  Teacher Testimonial  =================-->
    
    
    
    
    
    
    
    <?php if(isset($per["Testimonial"])): ?>



        <!--================ Start Testimonial Area =================-->
        <section class="testimonial-area relative section-gap box-1420" data-aos="fade-right">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row justify-content-center">
                    
                      <div class="col-lg-12 text-center" style="margin-bottom:40px;">
                            <h1 style="color:white!important;font-size:50px;"> What Professionals Say </h1>
                            <h6 style="color:white!important;"> Infinity School </h6>
                    </div>
                    
                    
                    
                    <div class="active-testimonial owl-carousel">

                        <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-testimonial text-center">
                                <div class="d-flex justify-content-center">
                                    <div class="thumb">
                                        <?php if(!empty($value->image)): ?>
                                            <img class="img-fluid rounded-circle testimonial-image"
                                                 src="<?php echo e(asset($value->image)); ?>" alt="">
                                        <?php else: ?>
                                            <img class="img-fluid rounded-circle"
                                                 src="<?php echo e(asset('public/uploads/sample.jpg')); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="meta text-left">
                                        <h4><?php echo e($value->name); ?></h4>
                                        <p><?php echo e($value->designation); ?>, <?php echo e($value->institution_name); ?></p>
                                    </div>
                                </div>
                                <p class="desc">
                                    <?php echo e($value->description); ?>

                                </p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endif; ?>

    <!--================ End Testimonial Area =================-->
    
    
     
    
    
    <!--================ Start Gallery =================-->
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<div class="container" style="margin-top:20px;
background:url(https://layerdrops.com/zimed/assets/images/shapes/blog-shape-1-1.png),url(https://layerdrops.com/zimed/assets/images/shapes/banner-shapes-1-7.png),
url(https://layerdrops.com/zimed/assets/images/shapes/contact-shape-3.png),
url(https://static.tildacdn.com/tild3364-3833-4766-a139-396366366663/clip_virtual_reality.gif);
background-repeat:no-repeat,no-repeat,no-repeat,no-repeat;
background-position:top left,top right,top center,307% 616px;
">
    
	<div class="row"data-aos="fade-left">
	      <div class="col-lg-12 text-center" style="margin-top:40px;margin-bottom:40px;">
                            <h1 style="color:black!important;font-size:50px;"> Photo Gallery </h1>
                            <h6 style="color:black!important;"> Infinity School </h6>
                    </div>
                    
	</div>    
	    
	    
	    
	<div class="row"data-aos="fade-right">
		<div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="<?php echo url('/') ?>/public/uploads/settings/bn-img/1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo url('/') ?>/public/uploads/settings/bn-img/1.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="<?php echo url('/') ?>/public/uploads/settings/bn-img/2.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo url('/') ?>/public/uploads/settings/bn-img/2.jpg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="<?php echo url('/') ?>/public/uploads/settings/bn-img/EEt.PNG"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo url('/') ?>/public/uploads/settings/bn-img/EEt.PNG"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="<?php echo url('/') ?>/public/uploads/settings/bn-img/1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo url('/') ?>/public/uploads/settings/bn-img/1.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo url('/') ?>/public/uploads/settings/bn-img/2.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo url('/') ?>/public/uploads/settings/bn-img/2.jpg"
                         alt="Another alt text">
                </a>
            </div>



            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo url('/') ?>/public/uploads/settings/bn-img/EEt.PNG"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo url('/') ?>/public/uploads/settings/bn-img/EEt.PNG"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo url('/') ?>/public/uploads/settings/bn-img/1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo url('/') ?>/public/uploads/settings/bn-img/1.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo url('/') ?>/public/uploads/settings/bn-img/2.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo url('/') ?>/public/uploads/settings/bn-img/2.jpg"
                         alt="Another alt text">
                </a>
            </div>



            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo url('/') ?>/public/uploads/settings/bn-img/EEt.PNG"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo url('/') ?>/public/uploads/settings/bn-img/EEt.PNG"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo url('/') ?>/public/uploads/settings/bn-img/1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo url('/') ?>/public/uploads/settings/bn-img/1.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo url('/') ?>/public/uploads/settings/bn-img/2.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo url('/') ?>/public/uploads/settings/bn-img/2.jpg"
                         alt="Another alt text">
                </a>
            </div>
        </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>


<style>
    .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}
</style>


<script>
    let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param  setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param  setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });
</script>
    
    <!--================ End Gallery =================-->
    
    
    
    
    
    
    
    
    
    
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.home.front_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edubangl/infinitytechltd.bou.education/modify/resources/views/frontEnd/home/light_home.blade.php ENDPATH**/ ?>