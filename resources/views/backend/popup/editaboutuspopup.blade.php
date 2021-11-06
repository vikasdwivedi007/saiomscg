
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header"  style="background-color: rgba(40, 58, 90, 0.9); color: white;">
            <h5 class="modal-title" id="upDaTeAbouTSFORM"><b>Edit About Us</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span style="color: white;" aria-hidden="true">&times;</span>
            </button>
         </div>
            <div id="loader1" style=" display: none; position : fixed;z-index: 100;background-color:rgb(210, 210, 210);opacity : 0.9;background-repeat : no-repeat;background-position : center;left : 0;bottom : 0;right : 0;top : 0;z-index: 999999; background-image : url('{{url('loader11.gif')}}');" id="customAjaxLoader">
            </div>
         <div class="modal-body">
            <form name="updateAboutUs12" id="updateAboutUsData"  action="{{url('update-about-us')}}" method="post" autocomplete="off" >
               {{ csrf_field() }}
               <div class="row">
               @foreach($aboutShow as $row)
                  <div class="col-md-12">
                     <div class="form-group">
                        <label id="#label"><b>Title</b></label>
                        <input autofocus type="text"  placeholder="Enter Anout Us Title" id="name" class="form-control" name="title" required="required" value="{{$row->title}}">
                     </div>
                  </div>
               </div>
                 <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <label id="#label"><b>Image</b></label>
                        <input  type="file"  placeholder="select image" id="images" class="form-control" name="images" value="{{$row->title}}">
                         <input  type="hidden"  placeholder="select image" id="hiddenimages" class="form-control" name="hiddenimages" value="{{$row->images}}">
                         <input type="hidden" name="id" value="{{$row->id}}">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label id="#label"><b>Description</b></label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter New About Us Description here.." required  rows="4" cols="50">{{$row->description}}</textarea>
                     </div>
                  </div>
               </div>
             @endforeach
  
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <center>  
                           <input type="submit" class="btn btn-success" name="submit" id="submit" value="Update About  Us">
                        </center>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
<script type="text/javascript"></script>