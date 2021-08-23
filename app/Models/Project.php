<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name','amount','start_date','final_date','delivery_date','status_id','url_product','client_id'];

    
  //Relaciion de muchos a muchos Proyecto-Usuarios
    //1 a muchos inversa
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    //muchos a muchos

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
    //Relacion inversa muchos a muchos Area-Proyectos

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }

     //Relacion uno a uno Proceso-Subproceso
     public function statu() 
     {
         return $this->hasOne("App\Models\Statu"); 
     }
}
