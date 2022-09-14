<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()

    {

        Admin::query()->create([
            'name' => 'Show'
        ]);
        Admin::query()->create([
            'name' => 'Store'
        ]);
        Admin::query()->create([
            'name' => 'Delete'
        ]);


    }
}
