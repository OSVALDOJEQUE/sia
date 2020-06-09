<?php



Route::resource('users','UserController');


//Routas gerais
    // route::group(['middleware'=>'auth'], function (){
    // 	route::get('/painelPrincipal',['middleware'=>'check-permission:1|2|3|4','uses'=>'AdminController@index'])->name('home');
    // });php

    route::get('/painelPrincipal',['middleware'=>'auth','uses'=>'AdminController@home'])->name('home');


Route::get('/', function () {
    return view('auth.login');
});

//Rotas de Usuários
    Route::get('/ocorrencias/{id}',['middleware'=>'auth','uses'=>'OcorrenciaController@show'])->name('ocorrencia.mostrar');
    Route::get('/ocorrencias/{id}/{estado}',['middleware'=>'auth','uses'=>'OcorrenciaController@estado'])->name('ocorrencia.estado');


   // Rotas Auth
    route::group(['middleware'=>'auth'], function (){
        Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('login');
        })->name('sair');

        Route::get('/perfil',function(){
            return view('admin.users.perfil');
        })->name('perfil');
        route::get('/back','AdminController@back')->name('back'); 
        
        route::put('/{id}/update','UserController@perfilUpdate')->name('perfil.update');

    });


// Rotas do Auth
  
    Route::get('/login','AuthController@index')->name('login');
    Route::post('/login','AuthController@login')->name('login');
    Route::get('/senha/redefinir','AuthController@passwordEmail')->name('password.email');
    Route::post('/senha/redefinir','AuthController@sendEmailToken')->name('sendEmailToken');
    Route::get('/redefinir/senha/{token}','uthController@showpasswordREsetForm')->name('password.reset');
    Route::post('/redefinir/senha/{token}','AuthController@passwordREset')->name('passwordREset');


// Route::get('/home', 'HomeController@index')->name('home');
