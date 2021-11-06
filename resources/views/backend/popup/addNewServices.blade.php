<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header"  style="background-color: rgba(40, 58, 90, 0.9); color: white;">
   <h5 class="modal-title" id="exampleModalLabel"><b>Add New Service</b></h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
   <span style="color: white;" aria-hidden="true">&times;</span>
   </button>
</div>
<div class="modal-body">
   <form name="submitServices" method="post" id="submitServices" onsubmit="return postSubmitServices()" autocomplete="off" >
      {{ csrf_field() }}
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label id="#label"><b>Service Name</b></label>
               <input autofocus type="text"  placeholder="Enter Title" id="title" class="form-control" name="title" required="required">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card card-outline card-info">
               <div class="card-header">
                  <h3 class="card-title"><b>Description</b></h3>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <textarea id="summernote" autofocus name="description"></textarea>
               </div>
            </div>
           </div>
         </div> 
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <center>  
                        <input type="submit" class="btn btn-success" name="submit" id="submit" value="Post New Service">
                     </center>
                  </div>
               </div>
            </div>
   </form>
   </div>
   </div>
</div>
