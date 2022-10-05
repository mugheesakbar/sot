<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $User1 = User::create([
            'name' => 'mughees',
            'email' => 'mughees@sot.com',
            'password' => Hash::make('12345678') ,
        ]);
        $User1->assignRole('admin');

        $User2 = User::create([
            'name' => 'ali',
            'email' => 'ali@sot.com',
            'password' => Hash::make('11223344') ,
        ]);
        $User1->assignRole('student');

        $User1 = User::create([
            'name' => 'usama',
            'email' => 'usama@sot.com',
            'password' => Hash::make('111222333') ,
        ]);
        $User1->assignRole('instructor');
    }
}
