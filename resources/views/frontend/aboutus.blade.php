@extends('layouts.header')
@section('content')
<section id="about" class="about">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>About Us</h2>
      </div>
      <style type="text/css">
         p.aboutSec {
         text-align: center;
         }
         .aboutSec b {
         font-size: 20px;
         }
      </style>
      <!-- frist section -->
      @foreach($homeabout as $row)
       @if($row->status == 1)
      <div class="row content">
         <div class="col-lg-4">
            <img src="{{'aboutUsIamges/'.$row->images}}" class="img-fluid form-group" alt="story" width="300" height="150">
         </div>
         <div class="col-lg-8">
            <p class="aboutSec">
               <b>{{$row->title}}</b> <br>
                 {{$row->description}}
            </p>
         </div>
      </div>
      @endif
      @endforeach
  
    
   </div>
</section>
@endsection