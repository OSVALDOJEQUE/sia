<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jornalista;
use DataTables;
use DB;


class JornalistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

           if ($request->ajax()) {
            $data = Jornalista::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        if ($row->estado =='Pendente'|| $row->estado =='Reprovado' )
                            $btn ='<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" title="Aprovar" class="aprovar"><i class="fas fa-check"></i></a>';
                        else
                           $btn ='';


                        $btn =$btn.'<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" title="Editar" class="editJornalista"><i class="far fa-edit"></i></a>';
                
                           // $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" title="Reprovar" class="btn btn-sm removerJornalista"><i class="far fa-trash-alt"> </i></a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

        }
        return view('admin.jornalistas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jornalista = new Jornalista();
        
        $jornalista->nome       = $request->name;
        $jornalista->celular    = $request->celular;
        $jornalista->email      = $request->email;
        $jornalista->contacto   = $request->contacto;
        $jornalista->entidade   = $request->entidade;
        $jornalista->modelo     = $request->modelo;
        $jornalista->plataforma = $request->plataforma;
        $jornalista->uuid       = $request->uuid;
        $jornalista->versao     =$request->versao;
        $jornalista->fabrico    =$request->fabrico;
        $jornalista->serie      =$request->serie;
        
        if ($jornalista->save())
            return 1;
        else
            return 0;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $jornalista = Jornalista::find($id);
        return response()->json($jornalista);
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
        if ($request->nome) {
            Jornalista::find($id)->update([
                'nome'      =>  $request->nome,
                'celular'   =>  $request->celular,
                'email'     =>  $request->email,
                'contacto'  =>  $request->contacto,
                'entidade'  =>  $request->entidade
            ]);

         return response()->json(['success'=>'Actualizado com sucesso.']);
        }  
        Jornalista::find($id)->update(['estado'=>'Aprovado']);
        return response()->json(['success'=>'Aprovado com sucesso.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jornalista::find($id)->delete();
        return response()->json(['success'=>'Removido com sucesso.']);
    }


    public function verifyMobile(Request $request){
        
        $resposta = 0;
        $jornalistas = DB::table('jornalistas')->get();
        
        foreach ($jornalistas as $jornalista)
        {
            //if ($jornalista->modelo==$request->modelo && $jornalista->plataforma==$request->plataforma && $jornalista->uuid==$request->uuid && $jornalista->versao==$request->versao && $jornalista->fabrico==$request->fabrico && $jornalista->serie==$request->serie){
            if ($jornalista->serie==$request->serie){
                if($jornalista->estado=='Aprovado') {
                    $resposta = 1;
                    break;
                } elseif($jornalista->estado=='Pendente') {
                    $resposta = 2;
                    break;
                }
            }
            else{
               $resposta = 3;
              
            }
        }
        return $resposta;
        
    }
    

}
