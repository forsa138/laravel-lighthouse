<?php

namespace App\Http\Controllers;


use App\Mail\TestEmail;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function Save(Request $req)
    {

        // guardar informacion en tabla Cia de BD (post)
        $cia_name = $req->input('cia_name');
        $cia_web = $req->input('cia_web');
        $platform = $req->post('platform_id');
        $category = $req->post('category_id');
        $user_email = $req->post('user_email');

        $dataCia = array('user_email'=>$user_email,'cia_name'=>$cia_name,'cia_web'=>$cia_web,'platform_id'=>$platform,'category_id'=>$category);

        DB::table('_companies')->insert($dataCia);

        // ejecucion microservicio lighthouse (get)
        $url = $cia_web;
        $endpoint="localhost:3000/report/".urlencode($url);
        $client = new Client();
        $res = $client->getAsync($endpoint);
        $data=$res->wait()->getBody();
        $obj = json_decode($data, true);

        //medicion de performnace
        $performance = $obj['data']['categories']['performance']['score'];

        //medicion de accessibility
        $accessibility = $obj['data']['categories']['accessibility']['score'];

        //medicion best-practices
        $best_practices = $obj['data']['categories']['best-practices']['score'];

        //medicion seo
        $seo = $obj['data']['categories']['seo']['score'];

        //medicion PWA
        $pwa = $obj['data']['categories']['pwa']['score'];


        // envio de correo con info de lighthouse

        $msg = ['message'=>'Performance: '.$performance .
                            'Accessibility: '.$accessibility.'<br>' .
                            'Best Practices: '.$best_practices.'<br>'.
                            'SEO: '.$seo.'<br>'.
                            'Progressive Web App: '.$pwa.'<br>'];

        Mail::to($user_email)->send(new TestEmail($msg));

        //echo $msg;
        return redirect('/');
    }




    public static function Last(){

        $user= User::all('id');
        $id=$user->last(); // muestra el ultimo ID de usuario creado en la BD
        return $id['id'];

        //suma +1 al id del array
//        $u = User::orderBy('id','desc')->select('id')->firstOrFail();
//        $id = $u->id + 1;
//        return $id;
    }

    public static function getEmail(){

        $user= User::orderBy('id','desc')->select('email')->firstOrFail();
        return $user['email'];

//        $user =Auth::user();
//        return $user->name;

    }


    //REGISTRAR DATOS DE USUARIO EN LA BD
//    public function insert(Request $request)
//    {
//        //return $request->all();
//
//        $name = $request->input('name');
//        $email = $request->input('email');
//        $password = $request->input('password');
//
//        $data = array('name'=>$name,'email'=>$email,'password'=>$password);
//
//        DB::table('users')->insert($data);
//
//        return redirect()->to('/pruebaCia');
//    }

}
