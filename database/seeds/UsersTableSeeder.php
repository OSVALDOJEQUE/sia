<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'central',
            'email'     => 'central@gmail.com',
            'category'  => '0',
            'password'  =>bcrypt('123456'),
        ]);

         User::create([
            'name'      => 'Osvaldo Jeque',
            'email'     => 'osvaldojeque@gmail.com',
            'category'  => '1',
            'password'  =>bcrypt('123456'),
        ]);

          User::create([
            'name'      => 'Antonio Morais',
            'email'     => 'spid404@gmail.com',
            'category'  => '12',
            'password'  =>bcrypt('123456'),
        ]);

        User::create([
            'name'      => 'Andrade Manjate',
            'email'     => 'am.manjate@outlook.com',
            'category'  => '12',
            'password'  =>bcrypt('123456'),
        ]);
    }
}
