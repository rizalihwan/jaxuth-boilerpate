<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rizal Ihwan Sulaiman',
            'email' => 'rizalihwan94@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
