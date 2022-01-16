<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       
        User::factory()
        ->count(5)
        ->state(new Sequence(
            ['skill_level' => 1,"name"  => "Dev1"],
            ['skill_level' => 2,"name"  => "Dev2"],
            ['skill_level' => 3,"name"  => "Dev3"],
            ['skill_level' => 4,"name"  => "Dev4"],
            ['skill_level' => 5,"name"  => "Dev5"],
        ))
        ->create();
    }
}
