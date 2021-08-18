<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Area extends Model
{

    use HasFactory; 
    
    protected $fillable = ['name','status','department_id'];


    //Relacion de uno a muchos inversa Departamento-Area
    public function department() {
        return $this->belongsTo("App\Models\Department");
    }
    //Relacion de uno a muchos Area-Usuarios
    public function users() 
    {
        return $this->hasMany("App\Models\User"); 
    }
    //Relacion muchos a muchos Area-Proyectos
    public function projects()
    {
        return $this->belongsToMany('App\Models\Projects');
    }
    //Relacion de uno a muchos Area-Usuarios
    public function processes() 
    {
        return $this->belongsToMany("App\Models\Process"); 
    }
}
