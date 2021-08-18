<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name','amount','start_date','final_date','delivery_date','status','client_id'];

    public function client()
    {
        return $this->hasOne('App\Models\Client');
    }
  //Relaciion de muchos a muchos Proyecto-Usuarios
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion inversa muchos a muchos Area-Proyectos
    public function areas()
    {
        return $this->belongsToMany('App\Models\Area');
    }
     //Relacion Morpheable FILES-proyecto
     public function files(){
        return $this->morphMany('App\Models\File','fileable');
    }
}
