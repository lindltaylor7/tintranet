<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','code','subprocess_id'];

    //Relacion inversa de uno a muchos Subproceso-Actividades   
    public function subprocess() 
    {
        return $this->belongsTo("App\Models\Subprocess"); 
    }
}
