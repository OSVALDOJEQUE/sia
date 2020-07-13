  
<!DOCTYPE html>
<html>
    <head>
      
        
        <title>SAJ</title>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald"/>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto"/>
        <style type="text/css">
             .border-border{
      border-bottom: 1px solid #cecece;
    }
     
     .center{
        text-align: center;
      }
      .upercase{
        text-transform: uppercase;
      }

    h1{
      font-size: 16px;
    }
         
        
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin-top: 0;
      margin-bottom: 0.5rem;
       font-weight: 400;
    }

    p {
      margin-top: 0;
      margin-bottom: 1rem;
    }

    img {
      vertical-align: middle;
      border-style: none;
    }

    h1,
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
      line-height: 1.2;
    }

    h2,
    .h2 {
      font-size: 1.8rem;
    }

    h3,
    .h3 {
      font-size: 1.575rem;
    }

    h4,
    .h4 {
      font-size: 1.35rem;
    }

    h5,
    .h5 {
      font-size: 1.01rem;
    }

    h6,
    .h6 {
      font-size: 0.8rem;
    }

    strong {
      font-weight: bolder;
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

    .text-nowrap {
      white-space: normal;
    }

    .table{
      width: 100%;
      margin-bottom: 1rem;
      color: #212529;
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 0px solid #dee2e6;
    }

    .table td {
      padding: 10px;
      vertical-align: middle;
      border-top: 1px solid #dee2e6;
    }

    .table th{
      padding: 0.75rem;
      vertical-align: middle;
      border-top: 0px solid #dee2e6;
    }

    .table th, .table td {
      padding: 0.5rem;
      font-family: Oswald;
      font-size: 12px;
      vertical-align: middle;
      border-top: 1px solid #dee2e6;
     }

    .table-bordered th,
    .table-bordered td {
      border: 1px solid #dee2e6;
    }

    .table{
        border-collapse: collapse;
      }

    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.01);
    }
    .corpo{
      width: 728px;
     margin: 0 auto 0 auto;
      }
        </style>   
    </head>
    <body>
        <div class="center upercase">
        <h1>
           MISA Moçambique<br>
        </h1>

        <br>
    <h5>Estatística das Ocorrências</h5>
    </div>
    <br>
     <div class="corpo">
       <table class="table table-striped table-bordered">
            <thead>
              <tr>
               <th width="50px">Violação</th>
               <th>Maputo Cidade</th>
               <th>Maputo Província</th>
               <th>Gaza</th>
               <th>Inhambane</th>
               <th>Manica</th>
               <th>Beirra</th>
               <th>Tete</th>
               <th>Zambézia</th>
               <th>Nampula</th>
               <th>Niassa</th>
               <th>Cabo Delegado</th>
              </tr> 
            </thead>
            <tbody>
              <tr>
                <td>Agressões físicas</td>
                <td>{{$agressoes_mc}}</td>
                <td>{{$agressoes_m}}</td>
                <td>{{$agressoes_g}}</td>
                <td>{{$agressoes_i}}</td>
                <td>{{$agressoes_ma}}</td>
                <td>{{$agressoes_b}}</td>
                <td>{{$agressoes_t}}</td>
                <td>{{$agressoes_z}}</td>
                <td>{{$agressoes_na}}</td>
                <td>{{$agressoes_n}}</td>
                <td>{{$agressoes_c}}</td>
              </tr>
              <tr>
                <td>Assaltos</td>
                <td>{{$assaltos_mc}}</td>
                <td>{{$assaltos_m}}</td>
                <td>{{$assaltos_g}}</td>
                <td>{{$assaltos_i}}</td>
                <td>{{$assaltos_ma}}</td>
                <td>{{$assaltos_b}}</td>
                <td>{{$assaltos_t}}</td>
                <td>{{$assaltos_z}}</td>
                <td>{{$assaltos_na}}</td>
                <td>{{$assaltos_n}}</td>
                <td>{{$assaltos_c}}</td>
              </tr>

              <tr>
                <td>Censuras</td>
                <td>{{$censuras_mc}}</td>
                <td>{{$censuras_m}}</td>
                <td>{{$censuras_g}}</td>
                <td>{{$censuras_i}}</td>
                <td>{{$censuras_ma}}</td>
                <td>{{$censuras_b}}</td>
                <td>{{$censuras_t}}</td>
                <td>{{$censuras_z}}</td>
                <td>{{$censuras_na}}</td>
                <td>{{$censuras_n}}</td>
                <td>{{$censuras_c}}</td>
              </tr>

              <tr>
                <td>Detenções</td>
                <td>{{$detencoes_mc}}</td>
                <td>{{$detencoes_m}}</td>
                <td>{{$detencoes_g}}</td>
                <td>{{$detencoes_i}}</td>
                <td>{{$detencoes_ma}}</td>
                <td>{{$detencoes_b}}</td>
                <td>{{$detencoes_t}}</td>
                <td>{{$detencoes_z}}</td>
                <td>{{$detencoes_na}}</td>
                <td>{{$detencoes_n}}</td>
                <td>{{$detencoes_c}}</td>
              </tr>

              <tr>
                <td>Legislações</td>
                <td>{{$legislacoes_mc}}</td>
                <td>{{$legislacoes_m}}</td>
                <td>{{$legislacoes_g}}</td>
                <td>{{$legislacoes_i}}</td>
                <td>{{$legislacoes_ma}}</td>
                <td>{{$legislacoes_b}}</td>
                <td>{{$legislacoes_t}}</td>
                <td>{{$legislacoes_z}}</td>
                <td>{{$legislacoes_na}}</td>
                <td>{{$legislacoes_n}}</td>
                <td>{{$legislacoes_c}}</td>
              </tr>

              <tr>
                <td>Ameaças</td>
                <td>{{$ameacas_mc}}</td>
                <td>{{$ameacas_m}}</td>
                <td>{{$ameacas_g}}</td>
                <td>{{$ameacas_i}}</td>
                <td>{{$ameacas_ma}}</td>
                <td>{{$ameacas_b}}</td>
                <td>{{$ameacas_t}}</td>
                <td>{{$ameacas_z}}</td>
                <td>{{$ameacas_na}}</td>
                <td>{{$ameacas_n}}</td>
                <td>{{$ameacas_c}}</td>
              </tr>

              <tr>
                <td>Violações públicas da liberdade de expressão</td>
                <td>{{$violacoes_mc}}</td>
                <td>{{$violacoes_m}}</td>
                <td>{{$violacoes_g}}</td>
                <td>{{$violacoes_i}}</td>
                <td>{{$violacoes_ma}}</td>
                <td>{{$violacoes_b}}</td>
                <td>{{$violacoes_t}}</td>
                <td>{{$violacoes_z}}</td>
                <td>{{$violacoes_na}}</td>
                <td>{{$violacoes_n}}</td>
                <td>{{$violacoes_c}}</td>
              </tr>
              <tr>
                <td>Total</td>
                @forelse($provincias as $provincia)
                  <td>{{$provincia->ocorrencias->count()}}</td>
                @empty

                @endforelse
              </tr>

            </tbody>
          </table>  
     </div>

    </body>
</html>
