@extends('layouts.header')
@section('content')

  <style type="text/css">
/*         .clients-carousel img {
    max-width: 100% !important;
    transition: all 0.4s ease-in-out;
    display: inline-block;
    padding: 15px 0;
    filter: grayscale(100);
}*/

.clients .owl-item img {
    width: 75% !important;
    opacity: 1.5 !important; 
    transition: 0.3s !important;
    filter: none !important ;
}
      </style>

<style type="text/css">
.clients .owl-item {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
}

.clients .owl-item img {
  width: 60%;
  opacity: 0.5;
  transition: 0.3s;
  filter: grayscale(100);
}

.clients .owl-item img:hover {
  opacity: 1;
  filter: none;
}

.clients .owl-nav, .clients .owl-dots {
  margin-top: 5px;
  text-align: center;
}

.clients .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd !important;
}

.clients .owl-dot.active {
  background-color: #e03a3c !important;
}
</style>

<!--  New client section  -->
<section id="clients" class="clients">
      <div class="container-fluid" data-aos="zoom-in">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="owl-carousel clients-carousel">
              <img src="{{url('/')}}/assets/img/clients/frist.png" alt="">
              <img src="{{url('/')}}/assets/img/clients/second.png" alt="">
              <img src="{{url('/')}}/assets/img/clients/third.png" alt="">
              <img src="{{url('/')}}/assets/img/clients/fifth.png" alt="">
              <img src="{{url('/')}}/assets/img/clients/opw.png" alt="">
              <img src="{{url('/')}}/assets/img/clients/image5.png" alt=""> 
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End Cliens Section -->
<!-- End Cliens Section -->
<!-- ======= About Us Section ======= -->


<!-- End About Us Section -->
<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg d-none">
   <div class="container-fluid" data-aos="fade-up">
      <div class="row">
         <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
               <h3>OUR MISSION <strong>  </strong></h3>
               <p>
                  Saiom Software Consultancy Group is a technology company whose mission is to make technology work for the betterment of everyday life
               </p>
            </div>
            <div class="accordion-list">
               <ul>
                  <li>
                     <a data-toggle="collapse" class="collapse" href="javascript:void(0)"><span>01</span> HOW CAN WE HELP YOU <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                     <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                        <p>
                           We are a technology enthusiast organization; we love solving real world problems with the help of Technology. We can provide an enterprise solution to our customers at competitive price in the market. We are committed to fulfil our commitment; We always think about “Return on Investment” from customer perspective.
                        </p>
                     </div>
                  </li>
                  <li>
                     <a data-toggle="collapse" href="javascript:void(0)" class="collapsed"><span>02</span> HOW CAN WE HELP YOU <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                     <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                        <p>
                           We can provide an enterprise solution to our customers at competitive price in the market. We are committed to fulfil our commitment
                        </p>
                     </div>
                  </li>
                  <li>
                     <a data-toggle="collapse" href="javascript:void(0)" class="collapsed"><span>03</span> HOW CAN WE HELP YOU <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                     <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                        <p>
                           We can provide an enterprise solution to our customers at competitive price in the market. We are committed to fulfil our commitment
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url(/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
      </div>
   </div>
</section>
<!-- End Why Us Section -->
<!-- ======= Skills Section ======= -->
<section id="skills" class="skills d-none">
   <div class="container" data-aos="fade-up">
      <div class="row">
         <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{url('/')}}/assets/img/skills.png" class="img-fluid" alt="">
         </div>
         <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>HOW CAN WE HELP YOU</h3>
            <p class="font-italic">
               We are a technology enthusiast organization; we love solving real world problems with the help of Technology. We can provide an enterprise solution to our customers at competitive price in the market. We are committed to fulfil our commitment; We always think about “Return on Investment” from customer perspective.
            </p>
            <div class="skills-content">
               <div class="progress">
                  <span class="skill">Cloud Migration <i class="val">100%</i></span>
                  <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
               <div class="progress">
                  <span class="skill">Setup new cloud service( AWS, Azure) <i class="val">90%</i></span>
                  <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
               <div class="progress">
                  <span class="skill">Digital Transformation at Organization Level <i class="val">75%</i></span>
                  <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
               <div class="progress">
                  <span class="skill"> Data Migration <i class="val">55%</i></span>
                  <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Skills Section -->
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg d-none">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Services</h2>
         <p> We can provide an enterprise solution to our customers at competitive price in the market. We are committed to fulfil our commitment; We always think about “Return on Investment” from customer perspective.</p>
         <!--           <center><b>SERVICES WE OFFER</b></center> -->
         <center><b>Managed IT Services</b></center>
      </div>
      <div class="row">
         <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
               <div class="icon"><i class="bx bxl-dribbble"></i></div>
               <h4><a href="javascript:void(0)"> Data Governance</a></h4>
               <p>Data governance is a term used on both a macro and a micro level. The former is a political concept and forms part of international relations and Internet governance </p>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
               <div class="icon"><i class="bx bx-file"></i></div>
               <h4><a href="javascript:void(0)">Data Security</a></h4>
               <p>Data security means protecting digital data, such as those in a database, from destructive forces and from the unwanted actions of unauthorized users.</p>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
               <div class="icon"><i class="bx bx-tachometer"></i></div>
               <h4><a href="javascript:void(0)">Data Management</a></h4>
               <p>Master data management is a technology-enabled discipline in which business and Information Technology work together to ensure the uniformity,</p>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
               <div class="icon"><i class="bx bx-layer"></i></div>
               <h4><a href="javascript:void(0)">ERP Systems Design</a></h4>
               <p>Discover the modern ERP system that utilises artificial intelligence to transform your business processes – in the cloud or on-premise.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Services Section -->
<!-- ======= Cta Section ======= -->
<section id="cta" class="cta d-none">
   <div class="container" data-aos="zoom-in">
      <div class="row">
         <div class="col-lg-9 text-center text-lg-left">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
         <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="javascript:void(0)">Call To Action</a>
         </div>
      </div>
   </div>
</section>
<!-- End Cta Section -->
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio d-none">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Portfolio</h2>
         <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
         <li data-filter="*" class="filter-active">All</li>
         <li data-filter=".filter-app">App</li>
         <li data-filter=".filter-card">Data</li>
         <li data-filter=".filter-web">Web</li>
      </ul>
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{url('/')}}/assets/img/portfolio/04736418-d7e3-4063-89d6-42e7704f9bb1-b506fd9a42c3.small.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>App 1</h4>
               <p>App</p>
               <a href="{{url('/')}}/assets/img/portfolio/04736418-d7e3-4063-89d6-42e7704f9bb1-b506fd9a42c3.small.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{url('/')}}/assets/img/portfolio/bi.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Web 3</h4>
               <p>Web</p>
               <a href="{{url('/')}}/assets/img/portfolio/bi.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{url('/')}}/assets/img/portfolio/Cloud-Migration.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>App 2</h4>
               <p>App</p>
               <a href="assets/img/portfolio/Cloud-Migration.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{url('/')}}/assets/img/portfolio/database-maintenance-250x250.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Card 2</h4>
               <p>Card</p>
               <a href="{{url('/')}}/assets/img/portfolio/database-maintenance-250x250.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{url('/')}}/assets/img/portfolio/data-entry-jobs.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Web 2</h4>
               <p>Web</p>
               <a href="{{url('/')}}/assets/img/portfolio/data-entry-jobs.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{url('/')}}/assets/img/portfolio/download.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>App 3</h4>
               <p>App</p>
               <a href="assets/img/portfolio/download.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{url('/')}}/assets/img/portfolio/images.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Card 1</h4>
               <p>Card</p>
               <a href="assets/img/portfolio/images.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{url('/')}}/assets/img/portfolio/mk_data-security.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Card 3</h4>
               <p>Card</p>
               <a href="assets/img/portfolio/mk_data-security.png" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{url('/')}}/assets/img/portfolio/word-image-28.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Web 3</h4>
               <p>Web</p>
               <a href="assets/img/portfolio/word-image-28.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Portfolio Section -->
<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg d-none">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Team</h2>
         <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
               <div class="pic"><img src="{{url('/')}}/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
               <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  <div class="social">
                     <a href="javascript:void(0)"><i class="ri-twitter-fill"></i></a>
                     <a href="javascript:void(0)"><i class="ri-facebook-fill"></i></a>
                     <a href="javascript:void(0)"><i class="ri-instagram-fill"></i></a>
                     <a href="javascript:void(0)"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
               <div class="pic"><img src="{{url('/')}}/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
               <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                  <div class="social">
                     <a href="javascript:void(0)"><i class="ri-twitter-fill"></i></a>
                     <a href="javascript:void(0)"><i class="ri-facebook-fill"></i></a>
                     <a href="javascript:void(0)"><i class="ri-instagram-fill"></i></a>
                     <a href="javascript:void(0)"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
               <div class="pic"><img src="{{url('/')}}/assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
               <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                  <div class="social">
                     <a href="javascript:void(0)"><i class="ri-twitter-fill"></i></a>
                     <a href="javascript:void(0)"><i class="ri-facebook-fill"></i></a>
                     <a href="javascript:void(0)"><i class="ri-instagram-fill"></i></a>
                     <a href="javascript:void(0)"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
               <div class="pic"><img src="{{url('/')}}/assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
               <div class="member-info">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                  <div class="social">
                     <a href="javascript:void(0)"><i class="ri-twitter-fill"></i></a>
                     <a href="javascript:void(0)"><i class="ri-facebook-fill"></i></a>
                     <a href="javascript:void(0)"><i class="ri-instagram-fill"></i></a>
                     <a href="javascript:void(0)"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="faq" class="faq section-bg d-none">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Frequently Asked Questions</h2>
         <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      <div class="faq-list">
         <ul>
            <li data-aos="fade-up" data-aos-delay="100">
               <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="javascript:void(0)">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
               <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                  <p>
                     Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
               </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
               <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
               <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                  <p>
                     Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
               </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
               <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
               <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                  <p>
                     Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
               </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="400">
               <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
               <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                  <p>
                     Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                  </p>
               </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="500">
               <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
               <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                  <p>
                     Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                  </p>
               </div>
            </li>
         </ul>
      </div>
   </div>
</section>
<!-- End Frequently Asked Questions Section -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact d-none">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Contact</h2>
         <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      <div class="row">
         <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
               <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>Saiom Software Consultancy Group
                     502, UNO Business Park ,
                     ByPass Road Indore (M.P.)
                     India</p>
               </div>
               <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@saiomscg.com</p>
               </div>
               <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+91 267-416-5864</p>
               </div>

               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
         </div>
         <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="name">Your Name</label>
                     <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                     <div class="validate"></div>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="name">Your Email</label>
                     <input type="email" class="form-control" name="email" placeholder="Enter Email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                     <div class="validate"></div>
                  </div>
               </div>
               <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" placeholder="Enter Subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
               </div>
               <div class="form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" placeholder="Enter Massage" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                  <div class="validate"></div>
               </div>
               <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
               </div>
               <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- End Contact Section -->    
@endsection

