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
            'category'  => '1',
            'password'  =>bcrypt('123456'),
        ]);

         User::create([
            'name'      => 'provincial',
            'email'     => 'provincial@gmail.com',
            'category'  => '2',
            'password'  =>bcrypt('123456'),
        ]);

          User::create([
            'name'      => 'distrital',
            'email'     => 'distrital@gmail.com',
            'category'  => '3',
            'password'  =>bcrypt('123456'),
        ]);

                 User::create([
            'name'      => 'jurista',
            'email'     => 'jurista@gmail.com',
            'category'  => '4',
            'password'  =>bcrypt('123456'),
        ]);
    }
}
