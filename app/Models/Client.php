<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','email','status'];
    //relacion Unos A Muchos clients-proyectos
    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }


}
