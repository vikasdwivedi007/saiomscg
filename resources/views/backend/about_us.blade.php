@extends('layouts.app')

@section('content')
<div class="container">
   <div class="card">
      <div class="row">
         <div class="col-md-12"><br>
            <div class="text-right">
               <a  onclick="return openModelPopupForAboutUs()" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add New About Us</a>
            </div>
            <br>
            <table  id="example3" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Title</th>
                     <th>Description</th>
                     <th>Images</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody id="loadAboutUsDataTable">
               
               </tbody>
            </table>
         </div>
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

$(document).ready(function() {
  getall();
  setTimeout(function() {
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
function getall() {
  $.ajax({
    url: "{{ url('admin-about-us') }}",
    type: "get",
    cache: false,
    success: function(data) {
      $('#loadAboutUsDataTable').html(data);
      // load data table function
    }
  });
}
//change about status code

function aboutUsStatusChange(id, status) {
  swal({
    title: "Are you sure?",
    text: "You want Change This About Us status!",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Yes, i want !",
    closeOnConfirm: false
  }).then((willDelete) => {
    if(willDelete) {
      $.ajax({
        url: '{{url("admin-about-status")}}',
        type: 'post',
        dataType: 'json',
        data: {
          "_token": "{{ csrf_token() }}",
          id: id,
          'status': status
        },
        success: function(response) {
          getall();
          if(response.status == 'success') {
            swal({
              icon: "success",
              title: response.msg,
              timer: 1000,
            });
          }
        }
      });
    }
  });
  return false;
}
//  delete about us by ajax jquery

function aboutUsDelete(id) {
  swal({
    title: "Are you sure?",
    text: "You want Delete This About !",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Yes, delete it!",
    closeOnConfirm: false
  }).then((willDelete) => {
    if(willDelete) {
      $.ajax({
        url: '{{url("admin-about-delete")}}',
        type: 'post',
        dataType: 'json',
        data: {
          "_token": "{{ csrf_token() }}",
          id: id
        },
        success: function(response) {
          getall();
          if(response.status == 'success') {
            swal({
              icon: "success",
              title: response.msg,
              timer: 1000,
            });
          }
        }
      });
    }
  });
  return false;
}
/// add new career 
function openModelPopupForAboutUs() {
  $('#loader').show();
  $.ajax({
    url: '{{url("add-new-about-us")}}',
    type: 'get',
    success: function(response) {
      $('#loader').hide();
      $('#commonmodal .modal-body').html(response);
      $('#commonmodal').modal();
    }
  });
}
/// form data send 
function newAboutUsFORmDATA(){
 $('#loader').show();
  var formData = new FormData($('form#aboutUssubmitForm')[0]);
    $.ajax({
      url: '{{url("/submit-new-about-us")}}',
      type: 'POST', 
      data: formData,
      contentType: false,  
      processData:false,  
        success:function(response){
          getall();
        $('#commonmodal').modal('hide');
        $("form#aboutUssubmitForm")[0].reset();
        $('#loader').hide();
     if(response.status == 'success') {
            swal({
              icon: "success",
              title: response.msg,
              timer: 1500,
            });
          }  
          } 
     });  
    return false;
} 



/// open edit about us popup
function openAboutUsEditPopup(id) {
  $('#loader').show();
  $.ajax({
    url: '{{url("edit-about-us")}}',
    type: 'get',
    data: {
      id: id
    },
    success: function(response) {
      $('#loader').hide();
      $('#commonmodal .modal-body').html(response);
      $('#commonmodal').modal();
    }
  });
}
// submit your update post data
// function updateAboutUsFormDATA() {
//   $('#loader').show();
//   var formData = new FormData($('form#updateAboutUsData')[0]);
  
//   $.ajax({
//     url: '{{url("update-about-us")}}',
//     type: 'post',
//     data: formData,
//     dataType: 'json',
//     success: function(response) {
//       console.log('tests');
//        getall();
//       $('#loader').hide();
//       $('#commonmodal').modal('hide');
//       $("form#updateAboutUs")[0].reset();
//       if(response.status == 'success') {
//         swal({
//           icon: "success",
//           title: response.msg,
//           timer: 1000
//         });
//       }
//     }
//   });
//   return false;
// }
</script>
@endsection