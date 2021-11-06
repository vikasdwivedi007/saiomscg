<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>saiom scg</title>
      <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/saiom mockup.png">

      <?php 
       if (Cache::has('css')){
        $css = Cache::get('css');
         // Cache::forget('css');
          Cache::rememberForever('css', function(){
              return $css;
            });
                
            }else{
          
          $css = array(
            '<link rel="stylesheet" href="'.url('/').'/assets/vendor/bootstrap/css/bootstrap.min.css">',
            '<link rel="stylesheet" href="'.url('/').'/assets/vendor/icofont/icofont.min.css">',
            '<link rel="stylesheet" href="'.url('/').'/assets/vendor/boxicons/css/boxicons.min.css">',
            '<link rel="stylesheet" href="'.url('/').'/assets/vendor/remixicon/remixicon.css">',
            '<link rel="stylesheet" href="'.url('/').'/assets/vendor/venobox/venobox.css">',
            '<link rel="stylesheet" href="'.url('/').'/assets/vendor/owl.carousel/assets/owl.carousel.min.css">',
            '<link rel="stylesheet" href="'.url('/').'/assets/vendor/aos/aos.css">',
            '<link rel="stylesheet" href="'.url('/').'/assets/css/style.css">',
            );
              Cache::put('css', $css, now()->addMinutes(90000));
            }

           if(isset($css) && !empty($css)){
            foreach ($css as $row) {
              echo $row."\n"; }
           } 
      ?>

      <link href="{{url('/')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="{{url('/')}}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
      <link href="{{url('/')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="{{url('/')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="{{url('/')}}/assets/vendor/venobox/venobox.css" rel="stylesheet">
      <link href="{{url('/')}}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="{{url('/')}}/assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="{{url('/')}}/assets/css/style.css" rel="stylesheet">
      <style type="text/css">
         a.logo.mr-auto.footerLogo img {
         max-width: 100%;
         width: 80%;
         }
      </style>
   </head>
   <body>
      <header id="header" class="fixed-top ">
         <div class="container d-flex align-items-center">
            <a href="{{url('/')}}" class="logo mr-auto"><img src="{{url('/')}}/saiom mockup.png" alt="" class="img-fluid"></a>
            <nav class="nav-menu d-none d-lg-block">
               <ul>
                  <li class="{{(url()->current() == url('/')) ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
                  <li class="{{(url()->current() == url('/about-us')) ? 'active' : '' }}"><a href="{{url('/about-us')}}">About Us</a></li>
                  <li class="{{(url()->current() == url('/services')) ? 'active' : '' }}"><a href="{{url('/services')}}">Services</a></li>
                  <li class="{{(url()->current() == url('/career')) ? 'active' : '' }}"><a href="{{url('/career')}}">Career</a></li>
                  <li class="{{(url()->current() == url('/review')) ? 'active' : '' }}"><a href="{{url('/review')}}">Client tell</a></li>
                  <li class="{{(url()->current() == url('/contact-us')) ? 'active' : '' }}"><a href="{{url('/contact-us')}}">Contact Us</a></li>
                  <!--  <li><a href="#portfolio">Portfolio</a></li> -->
               </ul>
            </nav>
         </div>
      </header>
      <section id="hero" class="d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1>We help businesses evolve & grow</h1>
                  <b style="color: white;">Use Data to Get a 360-Degree View of Your Business</b>
                  <h2></h2>
                  <div class="d-lg-flex">
                     <a href="{{url('/contact-us')}}" class="btn-get-started scrollto">Get Started Business With Us <i class="bx bx-chevron-right"></i></a>
                  </div>
               </div>
               <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                  @if(url()->current() == url('/about-us'))
                  <img src="{{url('/')}}/assets/img/headerImage/about-us.png" class="img-fluid animated" alt="">
                  @elseif(url()->current() == url('/'))
                  <img src="{{url('/')}}/assets/img/hero-img.png" class="img-fluid animated" alt="">
                  @elseif(url()->current() == url('/services'))
                  <img src="{{url('/')}}/assets/img/headerImage/services.png" class="img-fluid animated" alt="">
                  @elseif(url()->current() == url('/career'))
                  <img src="{{url('/')}}/assets/img/headerImage/career1.png" class="img-fluid animated" alt="">
                  @elseif(url()->current() == url('/review'))
                  <img src="{{url('/')}}/assets/img/headerImage/clietnTell.png" class="img-fluid animated" alt="">
                  @elseif(url()->current() == url('/contact-us'))
                  <img src="{{url('/')}}/assets/img/headerImage/newcontect.png" class="img-fluid animated" alt="">
                  @else
                  <img src="{{url('/')}}/assets/img/headerImage/services.png" class="img-fluid animated" alt="">
                  @endif
               </div>
            </div>
         </div>
      </section>
   
      <main id="main">
         @yield('content')
      </main>

      <footer id="footer">
         <div class="footer-newsletter d-none">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-6">
                     <h4>Join Our Saiomscg </h4>
                     <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 footer-contact">
                     <a href="{{url('/')}}" class="logo mr-auto"><img src="{{url('/')}}/saiom mockup.png" alt="" class="img-fluid"></a>
                     <p>
                        Saiom Software Consultancy Group 
                        93-18 Roosevelt Avenue 
                        #1011 Jackson Heights, NY 11372
                     </p>
                     <br><br>
                     <strong>Phone:</strong> +1 917 5205 856<br>
                     <strong>Email:</strong> info@saiomscg.com<br>
                     </p>
                  </div>
                  <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Useful Links</h4>
                     <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('about-us')}}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('contact-us')}}">Contact Us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('services')}}">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('career')}}">Career</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Our Services</h4>
                     
                     <ul>
                      <?php
                        $data = DB::table('services')->get()->take(5);
                       foreach ($data as $key => $row) { ?>
                       <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/services-details/'.$row->slug )}}"><?php echo $row->title ?></a></li>
                       <?php } ?>
                      
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Our Social Networks</h4>
                     <div class="social-links mt-3">
                        <a href="javascript:void(0)" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="javascript:void(0)" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                     </div><br><br>
                       <h4>Post a Review</h4>
                         <button type="button" class="btn btn-primary btn-xs" onclick="openModelPopupForReview()">Post Review</button>
                  </div>

               </div>
            </div>
         </div>
         <div class="container footer-bottom clearfix">
            <div class="copyright">
               &copy; Copyright <strong><span>saiomscg</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
             
           </div>
         </div>
      </footer>
      <!-- model popup -->

     <!-- model popup -->
<div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel12" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header"  style="background-color: rgba(40, 58, 90, 0.9); color: white;">
            <h5 class="modal-title" id="exampleModalLabel"><b>Post Your Valuable Review</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span style="color: white;" aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div id="loader1" style=" display: none; position : fixed;z-index: 100;background-color:rgb(210, 210, 210);opacity : 0.9;background-repeat : no-repeat;background-position : center;left : 0;bottom : 0;right : 0;top : 0;z-index: 999999; background-image : url('{{url('loader11.gif')}}');" id="customAjaxLoader">
            </div>
            <form name="submitreview12" id="submitreview12" onsubmit="return submitreview()" autocomplete="off" >
               {{ csrf_field() }}
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Full Name</b></label>
                        <input autofocus type="text"  placeholder="Enter Full name" id="name" class="form-control" name="name" required="required">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Designation</b></label>
                        <input type="text"  placeholder="Enter Designation " id="designation " class="form-control" name="designation" required="required">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Description</b></label>
                      <textarea class="form-control" id="description" name="description" placeholder="Enter here.." required  rows="4" cols="50" placeholder="Describe Your Valuable Review here..."> 

                      </textarea>
                     </div>
                  </div>
               </div>
  
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <center>  
                           <input type="submit" class="btn btn-success" name="submit" id="submit" value="Post Your Review">
                        </center>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>


      <!-- cloge popup -->
<script type="text/javascript">
     function openModelPopupForReview(){
    $('#exampleModal12').modal('show');
  } 
function submitreview(){
$('#loader1').show();
  var formData = new FormData($('form#submitreview12')[0]);
    $.ajax({
      url: '{{url("/review-submit")}}',
      type: 'POST', 
      data: formData,
      contentType: false,  
      processData:false,  
      success: function(success){
       $('#loader1').hide();

         $.toast({
            heading: 'Congratulation !',
            text: 'Your Review Post successfully',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'success',
            hideAfter: 3500, 
            stack: 6
          });
        $('.modal-backdrop fade show').removeClass('show').addClass('hide'); 
        $('#exampleModal12').hide();
        $("#submitreview12")[0].reset(); 
        setTimeout(function(){
            window.location.reload();
        }, 1000)
        }
     });  
    return false;
} 
</script>

      <a href="javascript:void(0)" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
      <div id="preloader"></div>
      <script src="{{url('/')}}/assets/vendor/jquery/jquery.min.js"></script>
      <script src="{{url('/')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="{{url('/')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
      <script src="{{url('/')}}/assets/vendor/php-email-form/validate.js"></script>
      <script src="{{url('/')}}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
      <script src="{{url('/')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="{{url('/')}}/assets/vendor/venobox/venobox.min.js"></script>
      <script src="{{url('/')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="{{url('/')}}/assets/vendor/aos/aos.js"></script>
      <script src="{{url('/')}}/assets/js/counterup.min.js"></script>
      <script src="{{url('/')}}/assets/js/main.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" src=""></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
   </body>
</html>