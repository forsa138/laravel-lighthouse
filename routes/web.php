<?php
use App\Mail\TestEmail;

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
//home de app.roier.ai
Route::get('/', function () {
    return view('masterPage');
});

Route::get('/prueba',function (){
    return view('welcome');
});

//INSERTAR DATOS
//Route::post('/insert', 'Controller@insert'); //datos de usuario
//Route::post('/insertCia','Controller@insertCia');
//Route::post('/insertCategory','Controller@insertCategories');
//Route::post('/insertPlatform','Controller@insertPlatform');

##### insertData (user-cia juntos)
Route::post('/save', 'Controller@Save');

//ruta a form de creacion de usuario directo
Route::get('user',function (){
    return view('inc.userData');
});

##### NUEVA INTERFAZ STEPPERS
Route::get('form2', function (){
   return view('form2');
});

//ruta a form de registro de Empresa
Route::get('ciadata',function(){
    return view('inc.companyData');
});

//form de envio de informacion al email
Route::get('/mailmessage',function(){
    return view('inc.sendEmail');
});

//acceso registrase con google
Route::get('/login', 'Auth\LoginController@redirectToProvider');
Route::get('/auth/google/callback', 'Auth\LoginController@handleProviderCallback');


####Ruta de prueba lighthouse
Route::get('light',function (){
    return view('lighthouse');
});

//corre proceso de lighthouse
Route::get('report', 'Report\LighthouseController@report');

//envio de correo
//Route::get('/testmail', function (){
//
//    Mail::send('mail.emailTest',[], function ($message){
//        $message->from('contacto@roier.ai', 'Contacto');
//        $message->bcc('franco@roier.ai','Franco')->subject('Prueba de correo');
//
//
//    });
//
//    return redirect('/mailmessage');
//
////    $data = ['message' => 'This is a test!'];
////
////    Mail::to('franco@roier.ai')->send(new TestEmail($data));
//
//});

