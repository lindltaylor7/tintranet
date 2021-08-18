<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

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

    public function areas()
    {
        return $this->belongsToMany('App\Models\Area');
    }
}
