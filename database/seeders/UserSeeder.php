<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::query()->create(['name' => 'Aurora','email'=>'auroratopojani@gmail.com']);
        User::query()->create(['name' => 'Shpresa','email'=>'shpresaz@gmail.com']);
        User::query()->create(['name' => 'Jocka','email'=>'jockae@gmail.com']);

    }
}
