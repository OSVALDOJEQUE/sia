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
use App\Notifications\Notificacao;
use Notification;
use GMaps;

class OcorrenciaController extends Controller
{
        public function index()
    {
       $users = User::all();

        $ocorrencias = Ocorrencia::all();

        $novasOcorrencias = Ocorrencia::where('estado','Nova')->get();

        $seguimentoOcorrencias = Ocorrencia::where('estado','Em Seguimento')->get();

        $resolvidasOcorrencias = Ocorrencia::where('estado','Resolivida')->get();

        return view('home' ,compact('users','ocorrencias','novasOcorrencias','seguimentoOcorrencias','resolvidasOcorrencias'));
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

        $img        = str_replace('data:image/jpeg;base64,', '',$request->imageURL);
        $img        = str_replace(' ', '+',$img);
        $data       = base64_decode($img);
        $nameFile   = datetime().'.png';

         Storage::disk('Evidencias')->put($nameFile,$data);
         $ocorrencia = new Ocorrencia;
        
         $ocorrencia->nome = $request->name;
         $ocorrencia->celular = $request->telefone;
         $ocorrencia->descricao = $request->reason;
         $ocorrencia->nivel = $request->nivel;
         $ocorrencia->imgURL = $nameFile;
         $ocorrencia->latitude = $request->latitude;
         $ocorrencia->longitude = $request->longitude;

         
         
         if ($ocorrencia->save()){

            $users =User::where('category',1);

            Notification::send($users, new Notificacao());

         }
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

        return view('admin.ocorrencias.show',compact('ocorrencia','map'));
    
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
