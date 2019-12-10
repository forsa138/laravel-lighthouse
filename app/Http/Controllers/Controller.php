<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Save(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $data = array('name'=>$name,'email'=>$email,'password'=>$password);

        DB::table('users')->insert($data);


        $cia_name = $request->input('cia_name');
        $cia_web = $request->input('cia_web');
        $platform = $request->post('platform_id');
        $category = $request->post('category_id');

        //comentario nuevo

        $dataCia = array('cia_name'=>$cia_name,'cia_web'=>$cia_web,'platform_id'=>$platform,'category_id'=>$category);

        DB::table('_companies')->insert($dataCia);

        return redirect()->to('/');


    }

/*    public function insert(Request $request)
    {
        //return $request->all();

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $data = array('name'=>$name,'email'=>$email,'password'=>$password);

        DB::table('users')->insert($data);

        return redirect()->to('/');
    }*/

//    public function insertCia(Request $req)
//    {
//
//        $cia_name = $req->input('cia_name');
//        $cia_web = $req->input('cia_web');
//        $platform = $req->input('platform_id');
//        $category = $req->input('category_id');
//
//
//        $dataCia = array('cia_name'=>$cia_name,'cia_web'=>$cia_web,'platform_id'=>$platform,'category_id'=>$category);
//
//        DB::table('_companies')->insert($dataCia);
//
//        return redirect()->to('/mailmessage');
//    }

/*    public function insertPlatform(Request $request)
    {
        $id_platform= $request->input('id_platform');

        $dataPlatform= array('id_platform'=>$id_platform);
        DB::table('_companies')->insert($dataPlatform);

    }*/

/*    public function insertCategories(Request $request)
    {
        $id_category= $request->input('id_category');

        $dataCategory= array('id_platform'=>$id_category);
        DB::table('_companies')->insert($dataCategory);

    }*/

}
