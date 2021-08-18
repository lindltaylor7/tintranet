<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name','status','project_id','user_id'];
    //Relacion uno a muchos Tareas-Usuarios
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
     //Relacion Morpheable FILES-TAREA
     public function files(){
        return $this->morphMany('App\Models\File','fileable');
    }
}
