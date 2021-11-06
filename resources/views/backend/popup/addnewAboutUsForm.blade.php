
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header"  style="background-color: rgba(40, 58, 90, 0.9); color: white;">
            <h5 class="modal-title" id="postyourVlaubleAboutUs"><b>Add New About Us</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span style="color: white;" aria-hidden="true">&times;</span>
            </button>
         </div>
            <div id="loader1" style=" display: none; position : fixed;z-index: 100;background-color:rgb(210, 210, 210);opacity : 0.9;background-repeat : no-repeat;background-position : center;left : 0;bottom : 0;right : 0;top : 0;z-index: 999999; background-image : url('{{url('loader11.gif')}}');" id="customAjaxLoader">
            </div>
         <div class="modal-body">
            <form name="aboutUssubmitForm1" id="aboutUssubmitForm" onsubmit="return newAboutUsFORmDATA()" autocomplete="off" >
               {{ csrf_field() }}
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Title</b></label>
                        <input autofocus type="text"  placeholder="Enter Anout Us Title" id="name" class="form-control" name="title" required="required">
                     </div>
                  </div>
               </div>
                 <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <label id="#label"><b>Image</b></label>
                        <input  type="file"  placeholder="select image" id="images" class="form-control" name="images" required="required">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label id="#label"><b>Description</b></label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter New About Us Description here.." required  rows="4" cols="50"></textarea>
                     </div>
                  </div>
               </div>
             
  
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <center>  
                           <input type="submit" class="btn btn-success" name="submit" id="submit" value="Post New About  Us">
                        </center>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
