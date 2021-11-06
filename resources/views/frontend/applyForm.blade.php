@extends('layouts.newheader')
@section('content')
<style type="text/css">
 #submit{
   color: #fff;
    background-color: #28a745;
    border-color: #28a745;
    width: 235px;
    height: 50px;
    font-size: x-large;
 }
</style>
<section id="about" class="about">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Apply For Job</h2>
      </div>

   <form name="resumeForm" id="resumeForm" action="{{url('send-resume')}}" accept="" method="POST" autocomplete="off" enctype="multipart/form-data" >
     {{ csrf_field() }}
      <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label id="#label"><b>Name</b></label>
              <input type="text"  placeholder="Enter name" id="name" class="form-control" name="name" required="required">
           </div>
        </div>        
      <div class="col-md-3"></div>
   </div>
   
    <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label id="#label"><b>Surname</b></label>
              <input type="text"  placeholder="Enter Surname" id="surname" class="form-control" name="surname" required="required">
           </div>
        </div>        
      <div class="col-md-3"></div>
   </div>


    <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label id="#label"><b>Email</b></label>
              <input type="eamil"  placeholder="Enter Email" id="email" class="form-control" name="email" required="required">
           </div>
        </div>        
      <div class="col-md-3"></div>
   </div>


    <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label id="#label"><b>Mobile No</b></label>
              <input type="text"  placeholder="Enter name"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="4" maxlength="10" id="Mobile" class="form-control" name="" required="required">
           </div>
        </div>        
      <div class="col-md-3"></div>
   </div>


    <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label id="#label"><b>Resure/CV</b></label>
              <input type="file"  accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" placeholder="Enter name" id="resume" class="form-control" name="resume" required="required">
           </div>
        </div>        
      <div class="col-md-3"></div>
   </div>
<br>


    <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
             <center>  
              <input type="submit"   class="btn btn-success" name="submit" id="submit" value="submit">
              </center>
           </div>
        </div>        
      <div class="col-md-3"></div>
   </div>
 </form>
   </div>
</section>
@endsection