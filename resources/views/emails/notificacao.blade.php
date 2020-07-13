<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        
        <!-- <title>@yield('title')-SIGAP</title> -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald"/>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto"/>
        <link rel="stylesheet" href="{{asset('css/email.css')}}">

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

          .link{
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
            position: relative;
            -webkit-text-size-adjust: none;
            border-radius: 4px;
            color: #fff;
            display: inline-block;
            overflow: hidden;
            text-decoration: none;
            background-color: #2d3748;
            border-bottom: 8px solid #2d3748;
            border-left: 18px solid #2d3748;
            border-right: 18px solid #2d3748;
            border-top: 8px solid #2d3748;
          }

        </style>
   
    </head>
    <body>

      <div class="center">
        <h1> SAJ</h1>
        <p>Nova Ocorrência</p>
    </div>
    	<div class="col-8" style="margin:auto; max-width: 720px;">
    		<div class="card" style="padding: 15px  box-shadow: 0 5px 12px 0 rgba(0, 0, 0, 0.12); border:0;">
      			<div class="card-body">
                <p>Caro(a) Gestor do MISA,</p>
      					<p>Acaba de entrar uma ocorrência no SAJ. Queira, por favor, aceder a sua conta, clicando <a class="btn btn-secondary btn-sm" href="{{route('login')}}">aqui.</a></p>
                
                <p></p>
      			</div>
      		</div>
 		</div>
  	</body>
</html>