@extends('layouts.header')
@section('content')
<style type="text/css">
.module {
  font-size: 1rem;
  line-height: 1.5;
}


.module #collapseExample0.collapse:not(.show) {
  display: block;
  height: 3rem;
  overflow: hidden;
}

.module #collapseExample0.collapsing {
  height: 3rem;
}

.module #collapseExample2.collapse:not(.show) {
  display: block;
  height: 3rem;
  overflow: hidden;
}

.module #collapseExample2.collapsing {
  height: 3rem;
}

.module a.collapsed::after {
  content: '+ Read More';
}

.module a:not(.collapsed)::after {
  content: '- Read Less';
}

.module {
  
  /* margin: -15px 20px -34px 2px !important;
    padding: 34px 5px 8px 2px !important;*/
}
</style>
    <section id="team" class="team section-bg ">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Clients Tell</h2>
         <p>We are very fortunate to have formed excellent partnerships with many of our clients. And we’ve formed more than just working relationships with them; we have formed true friendships. Here’s what they’re saying about us.</p>
      </div>

    
      <div class="row">
     @foreach($reviews as $key => $row)
      @if($row->status == 2)

     <style type="text/css">
       .module #collapseExample{{$key}}.collapse:not(.show) {
            display: block;
            height: 3rem;
            overflow: hidden;
          }

          .module #collapseExample{{$key}}.collapsing {
            height: 3rem;
          }
     </style>
         <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
               <div class="member-info module" >
                  <h4>{{$row->name}}</h4>
                  <span>{{$row->designation}}</span>
                       <?php  $countW = strlen($row->description);
                         if ($countW > 175) { ?>
                   <p class="collapse" id="collapseExample{{$key}}" aria-expanded="false">{{$row->description}}</p>
                    <a role="button" class="collapsed" data-toggle="collapse" href="#collapseExample{{$key}}" aria-expanded="false" aria-controls="collapseExample{{$key}}"></a>
                        <?php }else{ ?>
                          <p>{{$row->description}}</p>
                         <?php } ?>          
               </div>
             </div>
            <br>
         </div>
        @endif 
     @endforeach  
      </div> 

    
     
   </div>
</section> 
@endsection