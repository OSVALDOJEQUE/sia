

  
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        
        <!-- <title>@yield('title')-SIGAP</title> -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald"/>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto"/>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <style type="text/css">
        	    footer{
    margin-top: 0.5%; 
    width: 100%;
    padding-top: 1%;
    /* background-color: #4c6c71; */
    font-family:Oswald, Sans-serif; 
    text-transform:uppercase; 
    font-size:12px; 
    color:#6c757d; 
   
    }
           .center{ text-align: center;}
    
          h1{

            font-family:Oswald,sans-serif ;
            text-transform:uppercase; 
            font-size:16px; 
            font-weight:bold;
            color:#6c757c;
          }

          h2,
          h3,
          h4,
          h5,
          h6,
          .h1,
          .h2,
          .h3,
          .h4,
          .h5,
          .h6 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
          }
          label {
            display: inline-block;
            margin-bottom: 0;
            font-family:"Oswald", Sans-serif; 
            text-transform:uppercase; 
            color: #6c757c;
          }

          hr{

            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
          }

        </style>

 
        
    </head>
    <body>

      <div class="center">
        <h1> SIAJSR</h1>
        <p> Redefinição de senha</p>
    </div>
    	<div class="col-8" style="margin:auto; max-width: 720px;">
    		<div class="card" style="padding: 15px  box-shadow: 0 5px 12px 0 rgba(0, 0, 0, 0.12); border:0;">
      			<div class="card-body">
                <p>Caro(a) {{$data['name']}}.</p>
      					<p>Você está recebendo este e-mail porque recebemos o pedido de redefinição de senha para a sua conta. </p>
                <a class="btn btn-secondary btn-sm" href="{{route('passwordREset',$data['token'])}}">Redifinir senha</a><br>
                <p>Caso não solicitou uma alteração de senha, nenhuma acção adicional é necessaria</p>
      			</div>
      		</div>
 		</div>
  	</body>
</html>