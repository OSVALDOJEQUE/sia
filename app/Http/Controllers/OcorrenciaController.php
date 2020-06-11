<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ocorrencia;
 use GMaps;

class OcorrenciaController extends Controller
{
        public function index()
    {
        echo 'Teste';
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $config = array();

    $config['center'] = "-25.95059,32.60198";
    $config['zoom'] = '13';
    $config['map_height'] = '300px';
    $config['scrollwell'] = false;
    GMaps::initialize($config);

    $marker['position'] = "-25.95059,32.60198";;
    $marker['infowindow_content'] =  "-25.95059,32.60198";
    GMaps::add_marker($marker);
    $map = GMaps::create_map();


    if(!$ocorrencia = ocorrencia::find($id))
    	return view('errors.404');

    return view('admin.ocorrencias.show',compact('ocorrencia','map'));
    
    }

    public function estado($id,$estado)
    {


    	if(!$ocorrencia = ocorrencia::find($id))
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
        //
    }
}
