<?php

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Service $service)
    {
        $service->create(['name' => 'Barba']);
        $service->create(['name' => 'Cabelo e Barba']);
        $service->create(['name' => 'Corte']);
        $service->create(['name' => 'Pezinho']);
        $service->create(['name' => 'Progressiva']);
        $service->create(['name' => 'Relaxamento']);
        $service->create(['name' => 'Sobrancelha na Navalha']);
    }
}
