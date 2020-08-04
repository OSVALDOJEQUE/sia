<?php


route::group(['middleware'=>'auth'], function (){
    
    route::group(['middleware'=>'check-permission:0'], function (){   
        Route::resource('users','UserController');
        Route::resource('jornalistas','JornalistaController');
        Route::get('ocorrenciaExport','ExportController@ocorrencias')->name('ocorrencia.exportar');
        Route::get('jornalistaExport','ExportController@jornalistas')->name('jornalista.exportar');
        Route::get('estatisticaImprimir','ExportController@estatisticas')->name('estatistica.imprimir');
    });

});



//Routas gerais
    route::group(['middleware'=>'auth'], function (){
        Route::get('/painelPrincipal','OcorrenciaController@index')->name('home');
      
    });


Route::get('/', function () {
    return view('auth.login');
});


   //Rotas de Ocorrencias
    Route::get('/ocorrencias/{id}/mostrar',['middleware'=>'auth','uses'=>'OcorrenciaController@show'])->name('ocorrencia.mostrar');
    Route::get('/ocorrencias/estatisticas',['middleware'=>'auth','uses'=>'OcorrenciaController@estatisticas'])->name('ocorrencia.estatisticas');
    Route::post('ocorrencias','OcorrenciaController@store')->name('ocorrencia.store');
    Route::Delete('/ocorrencias/{id}','OcorrenciaController@destroy')->name('ocorrencia.remover');
    Route::post('/partilharocorrencia/{id}','OcorrenciaController@partilhar')->name('partilhar');
    Route::post('/alocarjurista/{id}','OcorrenciaController@alocar')->name('alocar');
    Route::post('/confirmarProvincia/{id}','OcorrenciaController@confirmarProvincia')->name('confirmarProvincia');
    Route::post('/editar/{id}','OcorrenciaController@update')->name('ocorrencia.editar');
    Route::get('/mensagens/{id}', 'OcorrenciaController@conversa')->name('chat');
    Route::post('enviarmensagem/distrital/{id}', 'OcorrenciaController@enviarDistrital')->name('msg_distrital');
    Route::post('enviarmensagem/provinvial/{id}', 'OcorrenciaController@enviarProvincial')->name('msg_provincial');
    Route::post('enviarmensagem/jurista/{id}', 'OcorrenciaController@enviarJurista')->name('msg_jurista');
    Route::post('enviarmensagem/central/{id}', 'OcorrenciaController@enviarCentral')->name('msg_central');
    Route::get('/ocorrencias/{id}/{estado}/mudar',['middleware'=>'auth','uses'=>'OcorrenciaController@estado'])->name('ocorrencia.estado');




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

    Route::get('/login','AuthController@index')->name('login');
    Route::post('/login','AuthController@login')->name('login');
    Route::get('/senha/redefinir','AuthController@passwordEmail')->name('password.email');
    Route::post('/senha/redefinir','AuthController@sendEmailToken')->name('sendEmailToken');
    Route::get('/redefinir/senha/{token}','AuthController@showpasswordREsetForm')->name('password.reset');
    Route::post('/redefinir/senha/{token}','AuthController@passwordREset')->name('passwordREset');
    

