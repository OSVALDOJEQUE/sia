<!DOCTYPE html>
<html>
<title>@yield('title') -SIAJSR</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('font/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald"/>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto"/>

<!-- Estilo
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">

<!-- Bootstrap============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<!-- toastr  -->
    <link href="{{asset('plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    @stack('css')
   

<body style="opacity: 0; transition: opacity 0.8s; -webkit-transition: 0.8s;" onload="document.body.style.opacity='1'">

  <div id="app">
     <div class="navbar">
      <a href="{{route('home')}}"><img src="{{asset('logo/logo-H.png')}}" style="max-width: 250px;"> SIAJSR</a>
      <br>
     
        <div class="direita" style="margin-bottom: 0;">
              <a href="{{route('home')}}" style="text-transform: capitalize;" ><i class="fas fa-fw fa-home"></i> Home</a>
      
              <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                  <i class="far fa-bell"></i>
              </a>

                <a class="dropdown-toggle" style="text-transform: capitalize;"  data-toggle="dropdown">
                {{ Auth::user()->name}} 
              </a >
               <ul style="right:0;" class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledbdy="dropdownMenu">
                  <li> <a href="{{route('perfil')}}" class="dropdown-item"><i class="fa fa-fw fa-user"></i> Perfil </a> </li>
             
                  <li> <a href="{{route('sair')}}" class="dropdown-item"><i class="fa fa-fw fa-power-off"></i> Sair </a> </li>
              </ul>
                    
                  
             
        </div>
        
     </div> 

     
     <div class="corpo">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h1 style="border-bottom: 1px solid #d6d5d1;">@yield('titulo')
                
                 <a class="btn-back" href="#" onclick="back()" ><i class="fas fa-angle-double-left"></i> </a>
              </h1>
            </div>

      </div>
            @yield('content')
        </div>
     </div>
   </div>

     
     
      <footer>
        <div class="footer-area">
            Copyright © 2020 - Todos os direitos reservados
        </div>
      </footer>

    <!-- bootstrap js
  ============================================ -->
  <script src="{{asset('js/app.js')}}"></script>
        
  <script type="text/javascript" src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

  <script>

      @if(Session::has('success'))
          toastr.success("{{ Session::get('success')}}");
      @endif

       @if(Session::has('info'))
           toastr.warning("{{ Session::get('info') }}");
      @endif


      @if(Session::has('error'))
          toastr.error("{{ Session::get('error') }}");
      @endif

      @if(Session::has('warning'))
           toastr.warning("{{ Session::get('warning') }}");
      @endif

      @if ($messages = Session::get('errors'))
        @foreach($messages as $message)
           toastr.error("{{$message}}");
        @endforeach

    @endif 



  </script>
  <script type="text/javascript">
    function back() {
       window.history.back();
    }
   
  </script>

  

  <script type="text/javascript">
        $(document).ready(function () {
            //Disable whole page
            $(this).bind('cut copy paste', function (e) {
                e.preventDefault();
            });
        });
    </script>

  @stack('scripts')
  
</body>
</html> 
