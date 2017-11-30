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



      Route::post('/Login', 'LoginController@Login');

            


             Route::get('/Sobre', 'SobreController@Sobre');
            
Route::get('/', function () {
    return view('welcome');
});





Route::get('/home', 'HomeController@Home')->name('home');
