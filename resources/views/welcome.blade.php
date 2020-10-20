<style>


    body{
    position: absolute;
    margin: 0;
    text-align: center;

    box-sizing: border-box;
    width: 100%;
    height: 100%;
}




</style>

<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/v3/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Oct 2020 09:26:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Serial Number | Application</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="hold-transition sidebar-mini">
  
    <div class="container-fluid" >
        <div class="row">
          <!-- left column -->
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Confirm your serial numbers here</h3>
              </div>
              @if (Session::has('success'))
              <div class="alert alert-success">{{Session::get('success')}} </div>
               @elseif(Session::has('error'))
               <div class="alert alert-error">{{Session::get('error')}}</div>
               @endif
              <form method="POST" action="{{ route('confirm_sno') }}">
                {{ csrf_field() }}
                
                <div class="card-body">
                    <div class="form-group">
                        <label for="serialnumber">Serial Number</label>
                        <input type="text" id="serialnumber" name="serialnumber" class="form-control" placeholder="Enter Serial Number"
                               required="required"/>
                    </div>
                    <button type="submit" class="btn btn-success">Confirm</button>
                </div>
                    
                 



                  
                   
              </form>
            </div>

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

<!-- jQuery -->
<!-- Bootstrap 4 -->
<script type="text/javascript">
$(document).ready(function () {
  setTimeout(function(){      
    $(".alert").hide();
}, 3000);
});






</script>
</body>

</html>
