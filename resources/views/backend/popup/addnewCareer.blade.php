
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header"  style="background-color: rgba(40, 58, 90, 0.9); color: white;">
            <h5 class="modal-title" id="exampleModalLabel"><b>Add New Career</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span style="color: white;" aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form name="newFormForCareer" method="post" id="newFormForCareer" onsubmit="return postSubmitcareer()" autocomplete="off" >
               {{ csrf_field() }}
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Job Title</b></label>
                        <input autofocus type="text"  placeholder="Enter Title" id="title" class="form-control" name="job_post" required="required">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Job Location</b></label>
                        <input autofocus type="text"  placeholder="Enter Job Location" id="title" class="form-control" name="location" required="required">
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Description</b></label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter New Career Description here.." required  rows="4" cols="50"></textarea>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <center>  
                           <input type="submit" class="btn btn-success" name="submit" id="submit" value="Post New Career">
                        </center>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>

<!-- cloge -->