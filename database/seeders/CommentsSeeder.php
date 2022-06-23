<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Ali',
                'email' => 'ali@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Mohamed',
                'email' => 'mohamed@gmail.com',
                'password' => Hash::make('123456'),
            ],

        ];
        foreach($users as $key => $user){
            User::create($user);
        };
    }
}
