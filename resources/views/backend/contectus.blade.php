@extends('layouts.app')

@section('content')

<div class="container">
   <div class="card">
      <div class="row">
         <div class="col-md-12">
             <table  id="example3" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Full-Name</th>
                     <th>Subject</th>
                     <th>Email</th>
                     <th>MObile No</th>
                     <th>Position</th>
                     <th>Resume/CV</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody id="loadResumeDatatable">
                 
               </tbody>
            </table>
         </div>
      </div>
   </div>
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
     //get All data by ajax and jquery
    function getall(){
        $.ajax({
             url: "{{ url('admin-resume-data') }}",
             type: "get",
             cache: false,
         success: function(data){
              $('#loadResumeDatatable').html(data);
              // load data table function
       
           }
       });
      } 
    // change career status code

  function resumeStatsChnage(id,status){  
    swal({
      title: "Are you sure?",
      text: "You want Change This Cnadidate Resume/cv status!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, i want !",
      closeOnConfirm: false
})
   .then((willDelete) => {
      if (willDelete) {
     $.ajax({
        url: '{{url("admin-resume-status")}}',
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

// delete resume ...
//  delete career by ajax jquery

  function resumeDelete(id) {  
  swal({
      title: "Are you sure?",
      text: "You want Delete This Cnadidate Resume/cv!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false
})
  .then((willDelete) => {
      if (willDelete) {
    $.ajax({
        url: '{{url("admin-resume-delete")}}',
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


</script>
@endsection