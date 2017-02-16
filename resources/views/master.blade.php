<!--Start of Header-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta authors="Nephila Web Team">
        <meta poweredby = "Nephila Web Technology, Inc">
        <link href="{{ asset('/fontawesome/css/font-awesome.css') }}" rel="stylesheet">
        <!-- Styles -->    
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">  
        <link href="{{ asset('/jquery-ui/themes/ui-lightness/jquery-ui.css') }}" rel="stylesheet">
        <link href="{{ asset('/jquery-ui/themes/ui-lightness/theme.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/custom.css') }}" rel="stylesheet"> 
        <script src="{{asset('/js/jquery.min.js')}}"></script>
        <script src="{{asset('/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/jquery-ui/jquery-ui.js')}}"></script>

 </head>       
<!--End of Header-->
<!--Start of Body-->
<body>
   <!-- 
    <div class="container-fluid header" style="background-color: #ccc">
        <div class="col-md-1">
            <img src="{{url('images','xavierlogo.png')}}" class="img-responsive" alt="Xavier School Logo">
       </div>
        <div class="col-md-11">
            <h2>{{env('INSTITUTION')}}</h2>
        </div>
    </div>
   -->
@yield('content')
<!--End of Body-->
<!--Start of Footer-->
<div class="footer">
      <div class="container">
        <p class="text-muted"> Copyright {{env('CRYEAR')}}, {{env('INSTITUTION')}}  All Rights Reserved.<br />
        <a href="http://www.nephilaweb.com.ph">Powered by: Nephila Web Technology, Inc.</a></p>
      </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <!-- Placed at the end of the document so the pages load faster -->
<!--Start of Footer-->
 
</body>
</html>
