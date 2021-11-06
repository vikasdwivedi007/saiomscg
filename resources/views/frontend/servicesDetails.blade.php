@extends('layouts.header')
@section('content')
 <style type="text/css">
    p.aboutSec {
    text-align: center;
}
.aboutSec b {
    font-size: 20px;
}
</style>
<section id="about" class="about">
   <div class="container" data-aos="fade-up">
      @foreach($serviceDetails as $row)
      <div class="section-title">
         <h2>{{$row->title}}</h2>
      </div>

      <div class="row content">         
         <div class="col-lg-12">
           <p class="aboutSec">
           {!! ($row->description) !!}
           </p>
         </div>
    </div>
  @endforeach
</section>
@endsection