<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Macroprocess extends Model
{
    use HasFactory;

    //Realcion de uno a mucho Macroprocess-Process
    public function processes()
    {
        return $this->hasMany("App\Models\Process"); 
    }
    
}
