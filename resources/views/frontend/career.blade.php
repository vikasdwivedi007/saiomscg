@extends('layouts.header')
@section('content')

<section id="about" class="about">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Career</h2>
      </div>
      <!-- Extra content by developer  -->
      <div class="row">
         <div class="col-md-12">
            <center><img src="{{url('/')}}/assets/img/career/career.jpeg"> </center>
         </div>
      </div>
      <br>
      <h3>Current Openings</h3>
      <br>
      <div class="row">
        @foreach($careerloop as $row)
         @if($row->status == 1)
         <div class="col-md-2">
            <b>{{$row->job_post}}</b>
         </div>
         <div class="col-md-10">
            <p>{{$row->description}}</p>
            <p>{{$row->location}}</p>
             <div class="text-right">
            
        <button style="" type="button" class="btn btn-primary btn-xs" onclick="openModelPopup('{{$row->job_post}}')">Apply Here</button>
            </div>
         </div>
         @endif
        @endforeach 
      </div> 
   </div>
</section>

<!-- model popup -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgba(40, 58, 90, 0.9); color: white;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Apply For Job</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color: white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="loader1" style=" display: none; position : fixed;z-index: 100;background-color:rgb(210, 210, 210);opacity : 0.9;background-repeat : no-repeat;background-position : center;left : 0;bottom : 0;right : 0;top : 0;z-index: 999999; background-image : url('{{url('loader11.gif')}}');" id="customAjaxLoader">
  </div>
      <form name="resumeFormv" id="resumeForm" method="post" onsubmit="return addtaskData()" autocomplete="off" enctype="multipart/form-data" >
         {{ csrf_field() }}
      <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label id="#label"><b>Full Name</b></label>
              <input type="text"  placeholder="Enter Full name" id="name" class="form-control" name="name" required="required">
           </div>
        </div>        
     
   </div>
   
    <div class="row">
          
            <div class="col-md-12">
              <div class="form-group">
                <label id="#label"><b>Subject For</b></label>
              <input type="text"  placeholder="Enter subject" id="subject" class="form-control" name="subject" required="required">
           </div>
        </div>        
      
   </div>


    <div class="row">
          
            <div class="col-md-12">
              <div class="form-group">
                <label id="#label"><b>Email</b></label>
              <input type="eamil"  placeholder="Enter Email" id="email" class="form-control" name="email" required="required">
           </div>
        </div>        
      
   </div>


    <div class="row">
          
            <div class="col-md-12">
              <div class="form-group">
                <label id="#label"><b>Mobile No</b></label>
              <input type="text"  placeholder="Enter Mobile Number"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="4" maxlength="10" id="Mobile" class="form-control" name="mobile" required="required">
           </div>
        </div>        
      
   </div>


    <div class="row">
          
            <div class="col-md-12">
              <div class="form-group">
                <label id="#label"><b>Resure/CV</b></label>
              <input type="file"  accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" placeholder="Enter name" id="resume" class="form-control" name="resume" required="required">
           </div>
        </div>        
      
   </div>
<br>


    <div class="row">
          
            <div class="col-md-12">
              <div class="form-group">
             <center>  
                <input type="hidden" name="position" value="" id="position">
              <input type="submit" class="btn btn-success" name="submit" id="submit" value="Apply For Job">
              </center>
           </div>
        </div>        
      
   </div>
 </form>
      </div>
 
    </div>
  </div>
</div>

<script type="text/javascript">
  
function openModelPopup(position){
    $("#position").val(position);
    $("#exampleModalLabel").text('Apply For Job '+position);
    $('#exampleModal').modal('show');
  } 

function addtaskData(){
$('#loader1').show();
  var formData = new FormData($('form#resumeForm')[0]);
    $.ajax({
      url: '{{url("/send-resume")}}',
      type: 'POST', 
      data: formData,
      contentType: false,  
      processData:false,  
      success: function(response){
       $('#loader1').hide();

         $.toast({
            heading: 'Congratulation !',
            text: 'Your Resume/cv upload successfully',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'success',
            hideAfter: 3500, 
            stack: 6
          });
        $('.modal-backdrop fade show').removeClass('show').addClass('hide'); 
        $('#exampleModal').hide();
        $("#resumeForm")[0].reset(); 
        setTimeout(function(){
            window.location.reload();
        }, 1000)
        }
     });  
    return false;
} 

</script>
<!-- cloge -->
<!-- loder -->


<!-- cloge loader code -->

@endsection