
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header"  style="background-color: rgba(40, 58, 90, 0.9); color: white;">
            <h5 class="modal-title" id="updateYourRevies"><b>Edit Your Valuable Review</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span style="color: white;" aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div id="loader1" style=" display: none; position : fixed;z-index: 100;background-color:rgb(210, 210, 210);opacity : 0.9;background-repeat : no-repeat;background-position : center;left : 0;bottom : 0;right : 0;top : 0;z-index: 999999; background-image : url('{{url('loader11.gif')}}');" id="customAjaxLoader">
            </div>
            <form name="Updateclientreviesbyadmin" id="Updateclientreviesbyadmin" onsubmit="return updateYourreviesByAdmin()" autocomplete="off" >
               {{ csrf_field() }}
            @foreach($adminRevies as $row)
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Full Name</b></label>
                        <input autofocus type="text"  placeholder="Enter Full name" id="name" class="form-control" value="{{$row->name}}" name="name" required="required">
                     </div>
                  </div>
               </div>
                <input type="hidden" name="id" name="id" value="{{$row->id}}">
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Designation</b></label>
                        <input type="text"  value="{{$row->designation}}" placeholder="Enter Designation " id="designation " class="form-control" name="designation" required="required">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Description</b></label>
                      <textarea class="form-control" id="description" name="description" placeholder="Enter here.." required  rows="4" cols="50" placeholder="Describe Your Valuable Review here...">{{$row->description}}</textarea>
                     </div>
                  </div>
               </div>
              @endforeach
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <center>  
                           <input type="submit" class="btn btn-success" name="submit" id="submit" value="Update your Reviews">
                        </center>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
