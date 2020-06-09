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
      <a href="{{route('home')}}"><img src="{{asset('logo/logo-H.png')}}" style="max-width: 250px;"></a>
      <p/>
     
        <div class="direita" style="margin-bottom: 0;">
              <a href="{{route('home')}}" style="text-transform: capitalize;" ><i class="fas fa-fw fa-home"></i> Home</a>
          
              <a href="{{route('sair')}}" style="text-transform: capitalize;" ><i class="fa fa-fw fa-power-off"></i> Sair </a>

              
               <ul style="right:0;" class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledbdy="dropdownMenu">
                  <li> <a href="{{route('perfil')}}" class="dropdown-item"><i class="fa fa-fw fa-user"></i> Perfil </a> </li>
             
                  <li> <a href="{{route('sair')}}" class="dropdown-item"><i class="fa fa-fw fa-power-off"></i> Sair </a> </li>
              </ul>
                    
                  
             
        </div>
        
     </div> 

     
     <div class="corpo">
     	<div class="container" style="max-width: 50%;">
	     	<div class="col-12" style="text-align: center">
		     	<div class="card border">
					<div class="card-header">
				        <label style="padding: 5px;">Este Conteúdo não está disponível no momento</label>
				    </div>
				    <div class="card-body">
						<h6> O link que você seguiu pode ter expirado, ou a pagina pode estar visível apenas para um público no qual você não está incluído.</h6>
					</div>
				</div>
			</div>
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
        
  <script type="text/javascript">
    function back() {
       window.history.back();
    }

  </script>  
</body>
</html> 
