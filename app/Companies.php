<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{

    protected $fillable = [
        'user_id','cia_name','cia_web','platform_id', 'category_id'
    ];


    public  function user(){
        return $this->belongsTo(User::class); //pertenece a un usuario
    }

    public function category(){
        return $this->belongsTo(ClassModel::class); //pertenece a una categoria
    }

    public function platform(){
        return $this->belongsTo(PlatformModel::class); //pertenece a una plataforma
    }


}
