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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    @stack('css')
   

<body style="opacity: 0; transition: opacity 0.8s; -webkit-transition: 0.8s;" onload="document.body.style.opacity='1'">

  <div id="app">
     <div class="navbar">
      <a href="{{route('home')}}"><img src="{{asset('logo/logo-h.png')}}" class="logo-h"></a>
      <br><br>
     
        <div class="direita" style="margin-bottom: 0;">
              <a href="{{route('home')}}" style="text-transform: capitalize;" ><i class="fas fa-fw fa-home"></i> Home</a>
                <a class="dropdown-toggle" style="text-transform: capitalize;"  data-toggle="dropdown">
                {{ Auth::user()->name}} 
              </a >
               <ul style="right:0;" class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledbdy="dropdownMenu">
                  <li> <a href="{{route('perfil')}}" class="dropdown-item"> Perfil </a> </li>
                  <li> <a href="{{route('sair')}}" class="dropdown-item">Sair </a> </li>
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
            Copyright © {{date('Y')}} - Todos os direitos reservados
        </div>
      </footer>

    <!-- bootstrap js
  ============================================ -->
  <script src="{{asset('js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
  <script>

      @if(Session::has('success'))
         swal("{{ Session::get('success') }}", "Alerta", "success");
      @endif

       @if(Session::has('warning'))
         swal("{{ Session::get('warning') }}", "Alerta", "warning");
      @endif


  </script>
  <script type="text/javascript">
    function back() {
       window.history.back();
    }
   
  </script>

  @stack('scripts')
  
</body>
</html> 
