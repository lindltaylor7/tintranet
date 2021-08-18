<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;


    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'type',
        'status',
        'area_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'status',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relacion Morpheable FILES-USUARIOS
    public function files(){
        return $this->morphMany('App\Models\File','fileable');
    }
   //Relacion inversa Areas-Usuarios
    public function area() {
        return $this->belongsTo("App\Models\Area"); 
    }
    //Relacion inversa TAREAS-USUARIO
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
    //Relacion inversa muchos a muchos Proyecto-Usuarios
    public function projects()
    {
        return $this->belongsToMany('App\Models\Project');
    }
    
}
