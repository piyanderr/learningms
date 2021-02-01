<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Learning;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Learning::create ([

            'name' => 'Maraya Guzman',
            'email' => 'maraya.guzman@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(12),
        ]);

    }
}
