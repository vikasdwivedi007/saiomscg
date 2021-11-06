<!DOCTYPE html>
<html>
   <head>
      <title>Admin Login</title>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets2/loginpage.css">
   </head>
   <body>
      <body>
         <div class="container">
            <div class="row">
               <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                  <div class="card card-signin my-5">
                     <div class="card-body">
                        <h3 class="text-center"><b><i>Saiom scg admin login</i></b></h3><br>
                        <form class="form-signin" name="adminlogin" id="adminlogin" action="{{ route('login') }}" method="POST">
                           @csrf
                           <div class="form-label-group">
                              <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Username" required autofocus>
                              <label for="inputEmail">Username</label>
                              @error('email')
                              <span class="invalid-feedback text-center" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-label-group">
                              <input type="password" id="inputPassword" name="password" class="form-control  @error('password') is-invalid @enderror"  placeholder="Password" required>
                              <label for="inputPassword">Password</label>
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <button class="btn btn-lg btn-success btn-block text-uppercase" name="submit" value="submit" id="submit" type="submit">Sign in</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <script type="text/javascript">
            $('#submit').click(function(){
               var inputEmail = $('#inputEmail').val();
               var inputPassword = $('#inputPassword').val();
                    if (inputEmail == '' || inputPassword == '') {
                       swal({
                      title: "Sorry!",
                      text: "Username & Password field is Required!",
                      icon: "error",
                      dangerMode: true,
            
                    });
            
                   return false;  
                     }
                 });
                
            
             
         </script> 
   </body>
   </body>
</html>