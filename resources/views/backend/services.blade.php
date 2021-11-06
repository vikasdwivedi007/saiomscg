@extends('layouts.app')
@section('content')
<div class="container">
     <div class="card">
      <div class="row">
         <div class="col-md-12"><br>
            <div class="text-right">
               <a href="javascript:void(0)" onclick="return openModelPopupForServices()" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add New services</a>
            </div>
            <br>
            <table  id="example3" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Description</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody id="ajaxServicesData">
               </tbody>
            </table>
         </div>
     <!--  </div> -->
   </div>
</div>
</div>
<div id="commonmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-contentldl">
      <div class="modal-body">
      </div>      
    </div>

  </div>

</div>
  <div id="loader" style=" display: none; position : fixed;z-index: 100;background-color:rgb(210, 210, 210);opacity : 0.9;background-repeat : no-repeat;background-position : center;left : 0;bottom : 0;right : 0;top : 0;z-index: 999999; background-image : url('{{url('loader.gif')}}');" id="customAjaxLoader">
  </div>

<script type="text/javascript">
   $(document).ready(function(){
    getall();
    
    
    setTimeout(function(){
      $("#example3").DataTable({
        "responsive": true, 
        "lengthChange": false,
        "autoWidth": false,
        "columnDefs": [{
        "defaultContent": "-",
        "targets": "_all"
          }]
      });

    }, 1000)

   
   
 });


  
 
// getall daata for services      
      function getall(){
        $.ajax({
             url: "{{ url('admin-services-data') }}",
             type: "get",
             cache: false,
              success: function(data){
              $('#ajaxServicesData').html(data);
           }
       });

      } 

 //add new services model popup
    function openModelPopupForServices(){
      $('#loader').show();
      $.ajax({
        url: '{{url("add-new-services")}}',
        type: 'get',
      success:function(response){
         $('#loader').hide();
        $('#commonmodal .modal-body').html(response);
        $('#commonmodal').modal();
        $('#summernote').summernote({
          placeholder: 'Enter Service Description',
          tabsize: 2,
          height: 100
       }) 
      }
      });
    } 
 
   function openServiceEditPopup(id){
     $('#loader').show(); 
    $.ajax({
        url: '{{url("edit-services")}}',
        type: 'get',
        data: { id : id },
      success:function(response){
         $('#loader').hide();
        $('#commonmodal .modal-body').html(response);
        $('#commonmodal').modal(); 
         $('#summernote').summernote({
          placeholder: 'Enter Service Description',
          tabsize: 2
       }) 
      }
      });
}


 function postSubmitServices(){
     $('#loader').show();
   var formData = $("form#submitServices").eq(0).serialize();
     $.ajax({
        url:'{{url("submit-new-services")}}',
        type: 'post',
        data: formData,
        dataType: 'json',
       success:function(response){
          getall();
        $('#commonmodal').modal('hide');
        $("form#submitServices")[0].reset();
        $('#loader').hide();
      if (response.status == 'success') {
           swal({
             icon: "success",
             title: response.msg,
             timer: 1500  
            });
           }  
          }  
         });
        return false;
 }
  
  function updatePostServices(){
   $('#loader').show();
   var EditformData = $("form#editservicesForm").eq(0).serialize();

     $.ajax({
        url:'{{url("update-services")}}',
        type: 'post',
        data: EditformData,
        dataType: 'json',
       success:function(response){
          getall();
        $('#loader').hide();
        $('#commonmodal').modal('hide');
        $("form#editservicesForm")[0].reset();
      if (response.status == 'success') {
           swal({
             icon: "success",
             title: response.msg,
             timer: 1500  
              });
            
             }
            
          }  
    });
  return false;
  }

 // delete services      
  function servicesDelete(id) {  
  swal({
      title: "Are you sure?",
      text: "You want Delete This Services!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false
})
  .then((willDelete) => {
      if (willDelete) {
    $.ajax({
        url: '{{url("admin-services-delete")}}',
        type: 'post',
        dataType: 'json',
        data: {"_token": "{{ csrf_token() }}", id : id},
    success:function(response){
              getall();
  if (response.status == 'success') {
        swal({
            icon: "success",
            title: response.msg,
            timer: 1500,
              
          });
        }
      }
    });
    } 
   });
  return  false;
}
  // change status for services
  function servicesStatusChange(id,status){  
    swal({
      title: "Are you sure?",
      text: "You want Change This Services status!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, i want !",
      closeOnConfirm: false
})
   .then((willDelete) => {
      if (willDelete) {
     $.ajax({
        url: '{{url("admin-services-status")}}',
        type: 'post',
        dataType: 'json',
        data: {"_token": "{{ csrf_token() }}", id : id, 'status':status},
      success:function(response){
              getall();
               if (response.status == 'success') {
           swal({
                   icon: "success",
                   title: response.msg,
                   timer: 1500, 
              });
            
             }
          }
        
       });
    } 
   });
  return  false; 
     } 
   


</script>
@endsection