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

use App\User;

Route::get('/', function () {
    $usuario = User::create([
        'name' => 'Emelec',
        'email' => 'hola@gg.com',
        'password' => bcrypt('12345'),
        'gender' => 'm',
        'biography'=> 'Camepeon del Pais del Ecuador'

    ]);
    return "Usuario Guardado";
});


Route::get('/update', function () {
    $usuario = User::find(1);
    $usuario ->name='Fuerza Amarilla';
    $usuario ->email ='cambiado@nn.nn';
    $usuario ->save();


    return "Usuario Actualizado";
});
