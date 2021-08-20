<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',        
    ];
    //Relación de uno a muchos Department-Area
    public function areas () {
        return $this->hasMany("App\Models\Area");
    }

}
