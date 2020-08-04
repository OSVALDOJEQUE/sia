<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Auth, DB;
use App\Models\User;
use App\Models\Ocorrencia;
use App\Models\Jornalista;
use App\Notifications\Notificacao;
use App\Notifications\AlocarJurista;
use App\Mensage;
use App\Models\OcorrenciaUser;
use App\Models\Provincia;
use Notification;
use GMaps;

class OcorrenciaController extends Controller
{
        public function index(){
        if (Auth::user()->category==0){
        $ocorrencias = Ocorrencia::latest()->get();
        
        $novasOcorrencias = Ocorrencia::where('estado','Nova')->orderBy('created_at', 'desc')->get();

        $seguimentoOcorrencias = Ocorrencia::where('estado','Em Seguimento')->orderBy('created_at', 'desc')->get();

        $resolvidasOcorrencias = Ocorrencia::where('estado','Resolvida')->orderBy('created_at', 'desc')->get();

        $chatOcorrencias = DB::table('mensages')
                            ->join('ocorrencias', 'ocorrencias.id','=', 'mensages.ocorrencia_id')
                            ->select('mensages.id', 'mensages.emissor','mensages.conteudo','mensages.ocorrencia_id', 'mensages.created_at', 'ocorrencias.nome', 'ocorrencias.celular', 'ocorrencias.nivel')
                            ->latest('created_at')->get()->unique('ocorrencia_id');

        $jornalistas = DB::table('jornalistas')->select('nome','serie')->get();
        $users    = DB::table('users')->select('id','name')->where('category',12)->get();
     
                         
        return view('home' ,compact('ocorrencias','novasOcorrencias','seguimentoOcorrencias','resolvidasOcorrencias', 'chatOcorrencias','jornalistas','users'));
      }

      if (Auth::user()->category>=1 &&  Auth::user()->category<=11){
        
        $id = Auth::user()->category;

        $seguimentoOcorrencias =  Ocorrencia::where('estado','Em Seguimento')
                                  ->whereRaw('JSON_CONTAINS(provincial_encaminhado, \'{"id":"'.$id.'"}\')')->get();

        $resolvidasOcorrencias =  Ocorrencia::where('estado','Resolvida')
                                  ->whereRaw('JSON_CONTAINS(provincial_encaminhado, \'{"id":"'.$id.'"}\')')->get();

        $chatOcorrencias = DB::table('mensages')
                            ->join('ocorrencias', 'ocorrencias.id','=', 'mensages.ocorrencia_id')
                            ->where('mensages.destino',$id)
                            ->select('mensages.id', 'mensages.emissor','mensages.conteudo','mensages.ocorrencia_id', 'mensages.created_at', 'ocorrencias.nome', 'ocorrencias.celular', 'ocorrencias.nivel')
                            ->latest('created_at')->get()->unique('ocorrencia_id');


         return view('home' ,compact('seguimentoOcorrencias','resolvidasOcorrencias', 'chatOcorrencias'));
      }

        if (Auth::user()->category==12){
        
        $seguimentoOcorrencias =  Auth::user()->ocorrencias->where('estado','Em Seguimento');
        $resolvidasOcorrencias =  Auth::user()->ocorrencias->where('estado','Resolvida');

        $chatOcorrencias = DB::table('mensages')
                            ->join('ocorrencias', 'ocorrencias.id','=', 'mensages.ocorrencia_id')
                            ->where('mensages.destino',Auth::User()->id)
                            ->select('mensages.id', 'mensages.emissor','mensages.conteudo','mensages.ocorrencia_id', 'mensages.created_at', 'ocorrencias.nome', 'ocorrencias.celular', 'ocorrencias.nivel')
                            ->latest('created_at')->get()->unique('ocorrencia_id');
                            
         return view('home' ,compact('seguimentoOcorrencias','resolvidasOcorrencias', 'chatOcorrencias'));
      }



    }

    public function estatisticas(){
            $provincias      = Provincia::all();
            $mc              = Provincia::find(1);
            $assaltos_mc     = $mc->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_mc    = $mc->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_mc     = $mc->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_mc    = $mc->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_mc   = $mc->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_mc      = $mc->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_mc    = $mc->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();




        
              $m         =Provincia::find(2);
            $assaltos_m     = $m->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_m    = $m->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_m     = $m->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_m    = $m->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_m   = $m->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_m      = $m->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_m    = $m->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $g              =Provincia::find(3);
            $assaltos_g     = $g->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_g    = $g->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_g     = $g->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_g    = $g->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_g   = $g->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_g      = $g->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_g    = $g->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();
            $i              =Provincia::find(4);
            $assaltos_i     = $i->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_i    = $i->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_i     = $i->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_i    = $i->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_i   = $i->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_i      = $i->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_i    = $i->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $ma             =Provincia::find(5);
            $assaltos_ma     = $ma->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_ma    = $ma->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_ma     = $ma->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_ma    = $ma->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_ma   = $ma->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_ma      = $ma->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_ma    = $ma->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $b              =Provincia::find(6);
            $assaltos_b     = $b->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_b    = $b->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_b     = $b->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_b   = $b->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_b  = $b->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_b     = $b->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_b   = $b->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $t              =Provincia::find(7);
            $assaltos_t     = $t->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_t    = $t->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_t     = $t->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_t   = $t->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_t  = $t->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_t     = $t->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_t   = $t->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $z             = Provincia::find(8);
            $assaltos_z    = $z->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_z   = $z->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_z    = $z->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_z   = $z->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_z  = $z->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_z     = $z->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_z   = $z->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();
            $na              =Provincia::find(9);
            $assaltos_na    = $na->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_na    = $na->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_na    = $na->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_na    = $na->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_na   = $na->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_na      = $na->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_na    = $na->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();


            $n              =Provincia::find(10);
            $assaltos_n     = $n->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_n    = $n->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_n    = $n->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_n    = $n->ocorrencias->where('nivel','Deteções')->count();
            $legislacoes_n   = $n->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_n      = $n->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_n    = $n->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $c              =Provincia::find(11);
            $assaltos_c     = $c->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_c    = $c->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_c    =  $c->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_c    = $c->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_c   = $c->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_c      = $c->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_c    = $c->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();
      
        return view('admin.ocorrencias.estatistica',compact('provincias',
          'assaltos_mc','agressoes_mc','censuras_mc','detencoes_mc','legislacoes_mc','ameacas_mc','violacoes_mc',
          'assaltos_m','agressoes_m','censuras_m','detencoes_m','legislacoes_m','ameacas_m','violacoes_m',
          'assaltos_g','agressoes_g','censuras_g','detencoes_g','legislacoes_g','ameacas_g','violacoes_g',
          'assaltos_i','agressoes_i','censuras_i','detencoes_i','legislacoes_i','ameacas_i','violacoes_i',
          'assaltos_ma','agressoes_ma','censuras_ma','detencoes_ma','legislacoes_ma','ameacas_ma','violacoes_ma',
          'assaltos_b','agressoes_b','censuras_b','detencoes_b','legislacoes_b','ameacas_b','violacoes_b',
          'assaltos_t','agressoes_t','censuras_t','detencoes_t','legislacoes_t','ameacas_t','violacoes_t',
          'assaltos_z','agressoes_z','censuras_z','detencoes_z','legislacoes_z','ameacas_z','violacoes_z',
          'assaltos_na','agressoes_na','censuras_na','detencoes_na','legislacoes_na','ameacas_na','violacoes_na',
          'assaltos_n','agressoes_n','censuras_n','detencoes_n','legislacoes_n','ameacas_n','violacoes_n',
          'assaltos_c','agressoes_c','censuras_c','detencoes_c','legislacoes_c','ameacas_c','violacoes_c'

        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

         $jornalista = Jornalista::where('serie',$request->serie)->first();

         $ocorrencia = $jornalista->ocorrencias()->create([
            'nome'          =>$jornalista->nome,
            'celular'       =>$jornalista->celular,
            'descricao'     =>$request->reason,
            'nivel'         =>$request->nivel,
            'imgURL'        =>$request->imageURL,
            'latitude'      =>$request->latitude,
            'longitude'     =>$request->longitude,
            'provincia_id'  =>$request->provincia
         ]);

         if ($ocorrencia && $request->jurista)
           User::find($request->jurista)->ocorrencias()->attach($ocorrencia->id);

         if ($ocorrencia && $request->ajax()){
            $users =User::where('category',0)->get();
            Notification::send($users, new Notificacao());
         }
         else
          return back()->with(['success'=>'Salvo com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$ocorrencia = Ocorrencia::find($id))
          return view('errors.404');

        $latlog= $ocorrencia->latitude.','.$ocorrencia->longitude;

        $config = array();
        $config['center'] = $latlog;
        $config['zoom'] = '13';
        $config['map_height'] = '300px';
        $config['scrollwell'] = false;
        GMaps::initialize($config);

        $marker['position'] =$latlog;
        $marker['infowindow_content'] = $latlog;
        GMaps::add_marker($marker);
        $map = GMaps::create_map();

       $users = DB::table('users')
                 ->where('category', 12)
                 ->get();
  
        return view('admin.ocorrencias.mostrar',compact('ocorrencia','map', 'users'));
    }

    public function estado($id,$estado)
    {
        if(!$ocorrencia = Ocorrencia::find($id))
            return view('errors.404');

        $ocorrencia->update([
            'estado' => $estado,
        ]);

        return back()->with(['success' => 'Marcado com sucesso']);
    }

     public function registarViolacao(Request $request, $id)
    {
        if(!$ocorrencia = Ocorrencia::find($id))
            return view('errors.404');

        $ocorrencia->update([
            'nivel' => $request->violacao
        ]);

        return redirect()->route('home')->with(['success' => 'Violação registada com sucesso']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public  function alocar(Request $request,$id){

        foreach (Ocorrencia::find($id)->juristas as $jurista) {
            if($jurista->id == $request->jurista)
              return back()->with(['warning'=>'O Jurista não pode ser alocado duas vezes na mesma ocorrência']);

        }

        $alocar = User::find($request->jurista)->ocorrencias()->attach($id);
        $mensagem = new Mensage();
        $mensagem->ocorrencia_id = $id;
        $mensagem->conteudo=$request->comentario;
        $mensagem->emissor = 0;
        $mensagem->destino=$request->jurista;
        $mensagem->nivel = 12;
        
        if($mensagem->save()){

            $this->estado($id,'Em Seguimento');
            $notificacao = Notification::send(User::find($request->jurista), new AlocarJurista());
            return back()->with(['success'=>'Alocado com sucesso']);
          }
    }

    public function confirmarProvincia(Request $request,$id){

        $ocorrencia =Ocorrencia::find($id)->update(['provincia_id'=>$request->provincia]);

        return back()->with(['success' => 'Confirmado com sucesso']);
    }

   public function partilhar(Request $request, $id){
    $ocorrencia  = Ocorrencia::find($id);
    $provincial_encaminhado = $ocorrencia->provincial_encaminhado;

    if($provincial_encaminhado)
      foreach ($provincial_encaminhado as $encaminhado) {
          if ($encaminhado['id'] == $request->permission)
            return redirect()->route('home')->with(['warning' => 'Está ocorrência já foi partilhada para este nível']);
      }
    
    $mensagem = new Mensage();

    $mensagem->ocorrencia_id = $id;
    $mensagem->conteudo=$request->comentario;
    $mensagem->emissor = Auth::user()->category;
    $mensagem->destino=$request->permission;
    $mensagem->nivel = $request->permission;

    if($mensagem->save()){
      $encaminhado[]['id']=$request->permission;
      $ocorrencia->provincial_encaminhado = $encaminhado;
      $ocorrencia->estado ='Em Seguimento';

    if($ocorrencia->update())
      $notificacao = Notification::send(User::where('category',$request->permission)->get(), new Notificacao());
      return redirect()->route('home')->with(['success' => 'Encaminhado com sucesso']);
    }
    
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function conversa($id)
    {
      
      $conversaProvincial = DB::table('mensages')
                    ->where('ocorrencia_id', $id)
                    ->whereBetween('nivel',[1,11])
                    ->get();


        $conversaJurista =  Mensage::where('ocorrencia_id',$id)
                          ->where('nivel', 12)
                          ->get();
                        
        $conversa = DB::table('mensages')
                          ->where('ocorrencia_id',$id)
                          ->where('nivel', Auth::user()->category)
                          ->get();




      return view('chat', compact('conversaProvincial', 'conversaJurista', 'id', 'conversa'));
    }

    public function enviarJurista(Request $request, $id){

      $ocorrencia = Ocorrencia::find($id);

      if($ocorrencia->juristas->isEmpty())
           return redirect()->back()->with('warning', 'Erro! Antes de enviar a mensagem, por favor, seleccione a ocorrência e, a seguir clique no botão "Alocar Jurista".');
    

      foreach ($ocorrencia->juristas as $jurista) {
          $mensagem = new Mensage();
          $mensagem->ocorrencia_id = $id;
          $mensagem->conteudo=$request->content;
          $mensagem->emissor = 0;
          $mensagem->destino=$jurista->id;
          $mensagem->nivel = 12;
          $save = $mensagem->save();            
      }
      
        return redirect()->back()->with('success', 'Mensagem enviada!');
    }


    public function enviarProvincial(Request $request, $id){

        $ocorrencia = Ocorrencia::find($id);
         if(!$ocorrencia->provincial_encaminhado)
           return redirect()->back()->with('warning', 'Erro! Antes de enviar a mensagem, por favor, seleccione a ocorrência e, a seguir clique no botão "Partilhar".');

         foreach ($ocorrencia->provincial_encaminhado as $encaminhado) {
          $mensagem = new Mensage();
          $mensagem->ocorrencia_id = $id;
          $mensagem->conteudo=$request->content;
          $mensagem->emissor = 0;
          $mensagem->destino=$encaminhado['id'];
          $mensagem->nivel =$encaminhado['id'];
           $save = $mensagem->save();
         }

          return redirect()->back()->with('success', 'Mensagem enviada!');     
    }

    public function enviarCentral(Request $request, $id){
      
      $mensagem = new Mensage();
      $mensagem->ocorrencia_id = $id;
      $mensagem->conteudo      = $request->content;
      $mensagem->emissor       = Auth::user()->category;
      $mensagem->destino       = 0;
      $mensagem->nivel         = Auth::user()->category;

      if($mensagem->save())
        return redirect()->back()->with('success', 'Mensagem enviada!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
       if(!$ocorrencia = Ocorrencia::find($id))
          return view('errors.404');
      
      $ocorrencia->delete();
      return response()->json(['success' => 'Removido com sucesso']);
    }
    
    public function update(Request $request, $id)
    {
        if(!$ocorrencia = Ocorrencia::find($id))
            return view('errors.404');

        $ocorrencia->update([
            'nivel'       => $request->violacao,
            'descricao'   => $request->descricao,
            'provincia_id'=>$request->provincia
        ]);

        return back()->with(['success' => 'Ocorrencia actualizada com sucesso']);
    }

}
