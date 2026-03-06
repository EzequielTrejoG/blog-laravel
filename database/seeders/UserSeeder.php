<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'ezegom01@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();

        //Se usa el factory para crear 10 usuarios de prueba
        User::factory(10)->create();
    }
}
