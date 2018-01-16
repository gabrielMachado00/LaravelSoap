<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
      Route::get('/Cadastro/Consumidor', 'CadastroController@AddConsumidor');
      
      Route::post('/Cadastro/Consumidor', 'CadastroController@InserirConsumidor');


    Route::get('/Cadastro/Adesao', 'AdesaoController@AddAdesao');
      
      Route::post('/Cadastro/Adesao', 'AdesaoController@InserirAdesao');
            
             Route::get('/Cadastro/Adesao', 'AdesaoController@Index');

             Route::get('/Login', 'LoginController@LoginAdd');


  Route::get('/CuideSe', 'CuideController@Cuide');


  Route::get('/VerLoja', 'MapsController@Import');
  
  Route::post('/VerLoja', 'MapsController@Import');
  


  Route::post('/LoginConsumidor', 'LoginConsumidorController@Login');

  Route::get('/LoginConsumidor', 'LoginConsumidorController@LoginConsumidor');


  Route::get('/Sobre', 'SobreController@Sobre');
  
  Route::post('/VerLoja', 'MapsController@Import');
  
  Route::get('/ProcureLoja', 'MapsController@getMapa');


Route::get('/home', 'HomeController@Home')->name('home');



Route::get('/home', 'HomeController@Home')->name('home');


	Route::get('export','MapsController@exportData');

	Route::post('export','MapsController@exportData');
