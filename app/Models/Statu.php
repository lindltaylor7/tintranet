<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    use HasFactory;
    
    //Relacion uno a uno Proceso-Subproceso
    public function project() 
    {
        return $this->belongsTo("App\Models\Project"); 
    }
     //Relacion uno a uno Proceso-Subproceso
     public function task() 
     {
         return $this->hasOne("App\Models\Task"); 
     }
      //Relacion uno a uno Proceso-Subproceso
    public function subtask() 
    {
        return $this->belongsTo("App\Models\Subtask"); 
    }

}
