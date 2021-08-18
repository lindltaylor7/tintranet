<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;
    protected $fillable = ['name','code'];
    //Realcion de uno a muchos Proceso-Subproces
    public function Subprocesses() 
    {
        return $this->hasMany("App\Models\Subprocess"); 
    }
    //Relacion de muchos a muchos Area-Procesos
    public function areas() 
    {
        return $this->belongsToMany("App\Models\Area"); 
    }    
}
