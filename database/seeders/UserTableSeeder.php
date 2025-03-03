<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::insert([
                [
                    'name' => 'Edgar',
                    'email' => 'edgar.gabrielyan.tw@gmail.com',
                    'isAdmin' => true,
                    'password' => Hash::make('Password123!'),
                    'address' => '150 E Olive Ave',
                ],
                [
                    'name' => 'Arsen',
                    'email' => 'arsen.nanyan@gmail.com',
                    'isAdmin' => false,
                    'password' => Hash::make('Password123!'),
                    'address' => '101 N Victory Blvd',
                ],
            ]
        );
    }
}
