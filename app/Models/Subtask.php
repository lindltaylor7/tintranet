<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    use HasFactory;
    protected $fillable = ['name','status','task_id'];

    //Relacion Morpheable FILES-SUBTAREA
    public function files(){
     return $this->morphMany('App\Models\File','fileable');
    }
     //Relacion uno a uno Proceso-Subproceso
     public function statu() 
     {
         return $this->hasOne("App\Models\Statu"); 
     }

}
