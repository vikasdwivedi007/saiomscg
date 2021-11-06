
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header"  style="background-color: rgba(40, 58, 90, 0.9); color: white;">
            <h5 class="modal-title" id="editservicesFormQuiniqID"><b>Edit Career </b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span style="color: white;" aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form name="editCareerForm" method="post" id="editCareerForm" onsubmit="return updatePostServices()" autocomplete="off" >
               {{ csrf_field() }}
               <div class="row">
              @foreach($careerdataF as $row)
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Job Title</b></label>
                        <input autofocus type="text"  placeholder="Enter Title" id="title" class="form-control" name="job_post" value="{{$row->job_post}}" required="required">
                     </div> 
                  </div>
               </div>
               <input type="hidden" name="id" name="id" value="{{$row->id}}">
               <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Job Location</b></label>
                        <input autofocus type="text"  placeholder="Enter Loaction" id="loaction" class="form-control" name="location" value="{{$row->location}}" required="required">
                     </div> 
                  </div>

               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Description</b></label>
      <textarea class="form-control" id="description" name="description"  placeholder="Enter here.." required  rows="4" cols="50">{{trim($row->description)}}</textarea>
                     </div>
                  </div>
               </div>
           @endforeach    
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <center>  
                           <input type="submit" class="btn btn-success" name="submit" id="submit" value="Update Career">
                        </center>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>

<!-- cloge -->