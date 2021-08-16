<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    use HasFactory; 
    
    protected $fillable = ['name','status','department_id'];

    public function department() {
        return $this->belongsTo("App\Models\Department");
    }
    
    public function users() {
        return $this->hasMany("App\Models\User"); 
    }
}
