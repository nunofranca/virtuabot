<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Marcos Vinícius', 'email' => 'agroalves1994@hotmail.com', 'password' => bcrypt('123mudar')],
            ['name' => 'Josemar Quaresma', 'email' => 'mazopancada@hotmail.com', 'password' => bcrypt('123mudar')],
            ['name' => 'Nuno França', 'email' => 'alberttttojrfsa@gmail.com', 'password' => bcrypt('123mudar')]
        ];
        collect($users)->map(fn($user) => User::create($user));
    }
}
