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
        $exist = User::where('name', ['Developer'])->get();
        
        if (count($exist) == 0) {
            $exist = User::create([
                'name' => 'Developer',
                'email' => 'dev@email.com',
                'password' => bcrypt('@mhdnfd@au$')
            ]);
        }
    }
}
