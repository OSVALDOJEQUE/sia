<!DOCTYPE html>
<html>
<title>@yield('title')-SIAJSR</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('font/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald"/>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto"/>


<!-- Bootstrap CSS
		============================================ -->
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/auth.css')}}">

   
<body class="slide" onload="document.body.style.opacity='1'">
    
   
    <div class="col-lg-3 col-sm-6 col-xs-12" style="margin:100px auto 0 auto;">
           <img src="{{asset('logo/logo-v.png')}}" class="logo-v">
        <div class="card login-box">
             @include('includes.alerts')
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>

<!-- js -->
<!-- <script src="{{asset('js/app.js')}}"></script> -->
<script src="{{asset('plugins/jquery/jquery.js')}}"></script>  
<script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>  
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation.js')}}"></script>

</body>
</html>