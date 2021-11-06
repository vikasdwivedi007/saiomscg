@extends('layouts.header')
@section('content')
<section id="services" class="services section-bg">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Services</h2>
         <p> We can provide an enterprise solution to our customers at a competitive price. We are dedicated to fulfilling our commitments. We always think about “Return on Investment” from customer perspective.</p>
         <center><b>Managed IT Services</b></center>
      </div>
      <!----------- First section -------->
      <div class="row">
         @foreach($serviceShow as $row)
         @if($row->status == 1)
         <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 form-group" data-aos="zoom-in" data-aos-delay="200" width="100">
            <div class="icon-box">
               <div class="icon"><i class="bx bx-file"></i></div>
               <h4><a href="{{ url('/services-details/'.$row->slug )}}">{{$row->title}}</a></h4>
               <p><?php
                  $strLength = strlen($row->description);
                  if ($strLength < 190) { ?>
               <p>{!! ($row->description) !!}</p>
               <?php }else{ ?>
             <p>{!! Str::limit($row->description, 190) !!}</p>
             <!--   <p>{!! $row->description !!}</p> -->
               <a href="{{ url('/services-details/'.$row->slug )}}">read more</a>
               <?php } ?>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      <!----------- End First section -------->
   </div>
</section>
@endsection