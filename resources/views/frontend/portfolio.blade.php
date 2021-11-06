@extends('layouts.header')
@section('content')
 <section id="portfolio" class="portfolio">
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
            <div class="portfolio-img"><img src="{{url('/')}}/public/assets/img/portfolio/04736418-d7e3-4063-89d6-42e7704f9bb1-b506fd9a42c3.small.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>App 1</h4>
               <p>App</p>
               <a href="{{url('/')}}/public/assets/img/portfolio/04736418-d7e3-4063-89d6-42e7704f9bb1-b506fd9a42c3.small.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{url('/')}}/public/assets/img/portfolio/bi.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Web 3</h4>
               <p>Web</p>
               <a href="{{url('/')}}/public/assets/img/portfolio/bi.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{url('/')}}/public/assets/img/portfolio/Cloud-Migration.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>App 2</h4>
               <p>App</p>
               <a href="/publicassets/img/portfolio/Cloud-Migration.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{url('/')}}/public/assets/img/portfolio/database-maintenance-250x250.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Card 2</h4>
               <p>Card</p>
               <a href="{{url('/')}}/public/assets/img/portfolio/database-maintenance-250x250.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{url('/')}}/public/assets/img/portfolio/data-entry-jobs.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Web 2</h4>
               <p>Web</p>
               <a href="{{url('/')}}/public/assets/img/portfolio/data-entry-jobs.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{url('/')}}/public/assets/img/portfolio/download.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>App 3</h4>
               <p>App</p>
               <a href="/publicassets/img/portfolio/download.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{url('/')}}/public/assets/img/portfolio/images.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Card 1</h4>
               <p>Card</p>
               <a href="/publicassets/img/portfolio/images.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{url('/')}}/public/assets/img/portfolio/mk_data-security.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Card 3</h4>
               <p>Card</p>
               <a href="/publicassets/img/portfolio/mk_data-security.png" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{url('/')}}/public/assets/img/portfolio/word-image-28.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
               <h4>Web 3</h4>
               <p>Web</p>
               <a href="/publicassets/img/portfolio/word-image-28.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
               <a href="javascript:void(0)" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection