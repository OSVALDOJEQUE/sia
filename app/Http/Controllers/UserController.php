<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DataTables;

class UserController extends Controller
{
    private $user;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(User $user){
        $this->user = $user;
    }

    public function index(Request $request){
       
        if ($request->ajax()) {
            $data = User::where('id','!=',Auth::User()->id)->latest();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('nivel', function($row){
                       if($row->category==0)
                        return 'Central';
                       if($row->category>0 && $row->category<12)
                        return 'Provincial';
                       else
                        return 'Jurista';
                    })
                    ->addColumn('provincia', function($row){
                        return $row->getCategory($row->category);
                    })
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Editar" class="editUser"><i class="far fa-edit"></i></a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm deleteUser"><i class="far fa-trash-alt"> </i></a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action','nivel','provincia'])
                    ->make(true);
                    
        }

        return view('admin.usuarios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.usuarios.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id        = $request->id;

          request()->validate([
          'name'      => 'required|min:3|max:50',
          'email'     => "required|unique:users,email,{$id},id",
          'category'  => 'required',
        ]);


        $password  = bcrypt($request->password);
        if ($id !='') {
           $password =User::find($id)->password;
        }
    
      User::UpdateOrCreate(
            ['id'        => $request->id],
            ['name'      => $request->name,
            'email'     => $request->email,
            'category'  => $request->category,
            'password'  => $password
        ]);        
   
        return response()->json(['success'=>'Salvo com sucesso.']);
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
        $user = User::find($id);
        return response()->json($user);
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
         request()->validate([
          'name'      => 'required|min:3|max:50',
          'email'     => "required|unique:users,email,{$id},id",
        ]);

        $password  =$password =Auth::User()->password; 
        
        if ($request->password)
           $password = bcrypt($request->password);

        Auth::User()->Update([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $password
        ]);

        return redirect()->to('perfil')->with(['success'=>'Actualizado com sucesso.']);
    
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->user->find($id)->delete();
        return response()->json(['success' => 'Removido com sucesso']);
    }
}
