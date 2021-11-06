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
                     <th>Name</th>
                     <th>Email</th>
                     <th>Mobile No</th>
                     <th>Subject</th>
                     <th>Massage</th>
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
         // getall();

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
</script>

@endsection