@extends('layouts.header')
@section('content')
 <div id="loader1" style=" display: none; position : fixed;z-index: 100;background-color:rgb(210, 210, 210);opacity : 0.9;background-repeat : no-repeat;background-position : center;left : 0;bottom : 0;right : 0;top : 0;z-index: 999999; background-image : url('{{url('loader11.gif')}}');" id="customAjaxLoader">
            </div>
<section id="contact" class="contact">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Contact US</h2>
        <!--  <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>
      <div class="row">
         <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
               <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>Head Office New York:</h4>
                  <p>Saiom Software Consultancy Group
                     93-18 Roosevelt Avenue #1011
                     Jackson Heights, NY 11372 <br>
                      +1 917 5205 856</p>
                 
            
               </div>

                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>New York:</h4>
                  <p>Saiom Software Consultancy Group
                     3730, 73rd Street. Apt  2D
                     Jackson Heights, NY 11372<br>
                     +1 917 5205 856

                  </p>
                   
               </div>

                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>India:</h4>
                  <p>
                     Saiom Software Consultancy Group
                     502, UNO Business Park ,
                     ByPass Road Indore (M.P.)
                     India <br>+91-9620 185 939</p>
                     
               </div>

               <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@saiomscg.com</p>
               </div>
            <!--    <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+91 267-416-5864</p>
               </div> -->
               <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=93-18 Roosevelt Avenue 1011 Jackson Heights, NY 11372d&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
         </div>

         <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form  class="php-email-form" action="{{url('/send-enquiry')}}" onsubmit="return submitContectUsData()" method="post" name="contectDataForm" id="contectDataForm"  >
               {{ csrf_field() }}
               <div class="form-row">  
                  <div class="form-group col-md-6">
                     <label for="name">Name</label>
                     <input type="text" name="name" placeholder="Enter Name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" / required="required">
                     <div class="validate"></div>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="name">Email</label>
                     <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" / required="required">
                     <div class="validate"></div>
                  </div>

               </div>
                   <div class="form-group">
                  <label for="mobile">Mobile No</label>
                  <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile" id="mobile" data-rule="minlen:4" data-msg="Please enter at least 8 chars of mobile" / minlength="10" maxlength="10" required="required">
                  <div class="validate"></div>
               </div>

               <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" placeholder="Enter Subject" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate" required="required"></div>
               </div>
               <div class="form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" placeholder="Enter Massage" rows="10" data-rule="required" data-msg="Please write something for us" required="required"></textarea>
                  <div class="validate" ></div>
               </div>
               <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
               </div>
               <div class="text-center"><button type="submit" id="submit" name="submit" value="submit">Send Message</button></div>
            </form>
         </div>
      </div>
   </div>
</section>

<script type="text/javascript">
  function submitContectUsData(){

  $('#loader1').show();
  var formData = $("form#contectDataForm").eq(0).serialize();

      $.ajax({
      url: '{{url("/send-enquiry")}}',
      type: 'post', 
      data: formData,
      contentType: false,  
      processData:false,  
      success: function(response){
       $('#loader1').hide();

         $.toast({
            heading: 'Congratulation !',
            text: 'Your upload successfully',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'success',
            hideAfter: 3500, 
            stack: 6
          });
        $('.modal-backdrop fade show').removeClass('show').addClass('hide'); 
        $('#exampleModal').hide();
        $("#contectDataForm")[0].reset(); 
        setTimeout(function(){
            window.location.reload();
        }, 1000)
        }
     });  
    return false;
   
  } 


</script>
@endsection