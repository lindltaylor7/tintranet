<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Goal
 *
 * @property $id
 * @property $description
 * @property $start_date
 * @property $final_date
 * @property $desired_quantity
 * @property $unit_asigment
 * @property $partial_quantity
 * @property $area_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Goal extends Model
{
    
    static $rules = [
		'description' => 'required',
		'start_date' => 'required',
		'final_date' => 'required',
		'desired_quantity' => 'required',
		'unit_asigment' => 'required',
		'partial_quantity' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','start_date','final_date','desired_quantity','unit_asigment','partial_quantity','area_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Models\Area', 'id', 'area_id');
    }
    

}
