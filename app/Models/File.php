<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name','clsf','url'];

    protected $guarded = [];

    use HasFactory;

    public function fileable()
    {
        return $this->morphTo();
    }
}
