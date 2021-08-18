<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subprocess extends Model
{
    use HasFactory;
    protected $fillable = ['name','code','process_id','area_id'];
    //Relacion inversa de uno a muchos Proceso-Subproceso
    public function process() 
    {
        return $this->belongsTo("App\Models\Process"); 
    }
    //Relacion de uno a muchos Subproceso-Actividades
    public function activities() 
    {
        return $this->hasMany("App\Models\Activity"); 
    }
}
