<?php

namespace Database\Seeders;

use App\Http\Model\User;
use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[
            [
            'name' =>'ade',
            'email' =>'ade@example.com',
            'role' =>'user',
            'password' =>bcrypt('123456')
            ],
            [
                'name' =>'admin',
                'email' =>'admin@example.com',
                'role' =>'admin',
                'password' =>bcrypt('admin123')
            ],
        ];

        foreach($userData as $key => $val){
            ModelsUser:: create($val);
        }

    }
}