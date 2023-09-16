<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'masyarakat',
                'email'=>'masyarakat@gmail.com',
                'role'=>'masyarakat',
                'password'=>bcrypt('masyarakat123')
            ],
            [
                'name'=>'petugas',
                'email'=>'petugas@gmail.com',
                'role'=>'petugas',
                'password'=>bcrypt('petugas123')
            ],
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('admin123')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
