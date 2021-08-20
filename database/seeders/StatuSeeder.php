<?php

namespace Database\Seeders;

use App\Models\Statu;
use Illuminate\Database\Seeder;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statu::create([
            'name' => 'Nuevo',
            'type' => '1',
            'color' => 'info'
        ]);
        Statu::create([
            'name' => 'Pendiente',
            'type' => '1',
            'color' => 'danger'
        ]);
        Statu::create([
            'name' => 'En ejecución',
            'type' => '1',
            'color' => 'warning'
        ]);
        Statu::create([
            'name' => 'Culminado',
            'type' => '1',
            'color' => 'success'
        ])
        ;
        Statu::create([
            'name' => 'Entregado',
            'type' => '1',
            'color' => 'primary'
        ])
        ;
        Statu::create([
            'name' => 'Pendiente',
            'type' => '2',
            'color' => 'info'
        ])
        ;
        Statu::create([
            'name' => 'En ejecución',
            'type' => '2',
            'color' => 'warning'
        ])
        ;
        Statu::create([
            'name' => 'Completado',
            'type' => '2',
            'color' => 'success'
        ]);
        Statu::create([
            'name' => 'Estancado',
            'type' => '2',
            'color' => 'danger'
        ]);    
    }
}
