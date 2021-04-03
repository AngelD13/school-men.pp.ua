<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facade\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Автор не визначений',
                'email' => 'angel@mirnew.net',
                'password' => bcrypt(Str::random(16),)
            ],
            [
                'name' => 'Автор',
                'email' => 'adm@mirnew.net',
                'password' => bcrypt(Str::random(16),)
            ]
        ];

        \DB::table('users')->insert($data);
    }
}
