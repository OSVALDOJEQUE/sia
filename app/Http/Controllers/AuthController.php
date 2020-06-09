<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Mail;
use Hash;
use Carbon\Carbon;
use App\User;
use DB;
use Illuminate\Support\Str;
use App\notifications\ResetPassword;

class AuthController extends Controller
{
    

    private $user;

    public function __construct(User $user){
        $this->user=$user;
    }

    public function index(){

        return view('auth.login');
    }
    
    public function login(Request $request){
           
        request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $credentials=[ $fieldType=>$request->email,'password'=>$request->password]; 
    
        if(Auth::attempt($credentials)){
              return redirect()->intended('painelPrincipal');
             }
        else
         return redirect()->back()->with('error','As credenciais informadas não correspondem com nossos registros.');

    }


    public function passwordEmail(){
        return view('auth.passwords.email');
    }


     public function sendEmailToken(Request $request){

        Request()->validate([
            'email' => 'required|email'
        ]);

     	$user = User::where('email',$request->email)->first();

     	if(!$user) return redirect()->back()->with(['error' =>'Não conseguimos encontrar nenhum usuário com o endereço de e-mail informado.']);
     	
     	DB::table('password_resets')->insert([
     		'email' 	=> $request->email,
     		'token' 	=> Str::random(60) ,
     		'created_at'=>Carbon::now()
     	]);

     	$tokenData = DB::table('password_resets')->where('email',$request->email)->first();

     	$token  = $tokenData->token;
     	$email      = $request->email;

        $data = [
            'token' => $token,
            'name' =>$user->name,
        ];


         $user->notify(new ResetPassword($data));

         return redirect()->back()->with(['success'=>'Enviamos um link para redefinir a sua senha por e-mail.']);
    }

    public function showpasswordREsetForm($token){

    	$tokenData = DB::table('password_resets')->where('token',$token)->first();

    	if(!$tokenData) return redirect()->to('login')->with(['error' => 'Esse código de redefinição de senha é inválido.']);

    	return view('auth.passwords.reset',compact('token'));

    }

     public function passwordREset(Request $request, $token){

         request()->validate([
           'password'          =>'min:6|max:64',
        ]);
        
        $password  = $request->password;
        $tokenData = DB::table('password_resets')->where('token',$token)->first();

        $user = User::where('email',$tokenData->email)->first();

     	if(!$user) return redirect()->to('login');

     	$user->password = Hash::make($password);
     	$user->update();

     	DB::table('password_resets')->where('email',$user->email)->delete();

     	return redirect()->to('login')->whith(['success'=>'Sua senha foi redefinida!']);
    }
}
