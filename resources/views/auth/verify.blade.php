<!DOCTYPE html>
<html>
<title>SIGAP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('font/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald"/>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto"/>


<!-- Bootstrap CSS
		============================================ -->
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/estilo.css')}}">

<style type="text/css">
  .error{ color: #e3342f;
   font-size: 14px;
   text-transform: initial;
  }

  .error:hover{
    color: #e3342f;
  }

  .login{
  float: right;
  background: #f7b846;
  color: #fff;
  font-size: 1rem;
  padding: 4px;
  margin-top: 5px;
  line-height: 2px;
}
</style>
   
<body>
    
    <div style="text-align:center;">
        <img class="logo" style="max-width:250px" src="{{asset('logo/logo-v.png')}}">
    </div>

    
    
    <div class="col-lg-4 col-sm-4 col-xs-12" style="margin:auto">
    <div class="row">
            <div class="col-sm-12">
              <h1 style="border-bottom: 1px solid #f7b846; font-size: 25px;">Recuperação de Senha
                
                 <a class="login" href="#" onclick="back()" ><i class="fas fa-angle-double-left"></i> </a>
              </h1>
            </div>

      </div>
        <div class="card" style=" box-shadow: 0 5px 12px 0 rgba(0, 0, 0, 0.12); border:0;">
             @include('includes.alerts')
            <div class="card-body">
                <form id="login_form" action="{{route('reset.password')}}" method="post">
                     @csrf
                   <div class="form-group">
                       <label>Email</label>
                        <div class="form-single">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Introduza o email" />
                             <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                           <button class="btn btn-secondary btn-lg btn-block" >Enviar Link</button>
                    </div>
                </form>
                    
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