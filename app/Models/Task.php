<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name','start_date','final_date','project_id','user_id','status_id'];
    //Relacion uno a muchos Tareas-Usuarios
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
     //Relacion Morpheable FILES-TAREA
     public function files(){
        return $this->morphMany('App\Models\File','fileable');
    }
     //Relacion uno a muchos Tareas-Usuarios
     public function project()
     {
         return $this->belongsTo('App\Models\Project');
     }
<<<<<<< HEAD

     //QueryScopes
    public function scopeCompleted($query,$project_id){
        return $query->where('status','Completado')->where('project_id',$project_id);
    }
=======
      //Relacion uno a uno Proceso-Subproceso
      public function statu() 
      {
          return $this->belongsTo("App\Models\Statu"); 
      }
>>>>>>> 8cdec295813b8c3c5bd59995092adc2d26a14f0e
}
