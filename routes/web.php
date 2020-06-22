<?php


route::group(['middleware'=>'auth'], function (){
    
    route::group(['middleware'=>'check-permission:1'], function (){   
        Route::resource('users','UserController');
    });

});



//Routas gerais
    route::group(['middleware'=>'auth'], function (){
    	
        Route::get('/painelPrincipal',['middleware'=>'check-permission:1|2|3|4','uses'=>'OcorrenciaController@index'])->name('home');
      
    });


Route::get('/', function () {
    return view('auth.login');
});


//Rotas de Ocorrencias
    Route::get('/ocorrencias/{id}',['middleware'=>'auth','uses'=>'OcorrenciaController@show'])->name('ocorrencia.mostrar');
    Route::get('/ocorrencias/{id}/{estado}',['middleware'=>'auth','uses'=>'OcorrenciaController@estado'])->name('ocorrencia.estado');
    Route::post('/ocorrencias/{id}/remover','OcorrenciaController@destroy')->name('ocorrencia.remover');


   // Rotas Auth
    route::group(['middleware'=>'auth'], function (){
        Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('login');
        })->name('sair');

        Route::get('/perfil',function(){
            return view('admin.usuarios.perfil');
        })->name('perfil');
         
        route::put('users/{id}/update','UserController@update')->name('perfil.update');

    });


// Rotas do Auth
  
    Route::get('/login','AuthController@index')->name('login');
    Route::post('/login','AuthController@login')->name('login');
    Route::get('/senha/redefinir','AuthController@passwordEmail')->name('password.email');
    Route::post('/senha/redefinir','AuthController@sendEmailToken')->name('sendEmailToken');
    Route::get('/redefinir/senha/{token}','AuthController@showpasswordREsetForm')->name('password.reset');
    Route::post('/redefinir/senha/{token}','AuthController@passwordREset')->name('passwordREset');

