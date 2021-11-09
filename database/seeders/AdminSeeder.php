<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usr = Admin::where('email','admin@gmail.com')->first();
        if(is_null($usr)){

        $admin = new Admin();
        $admin->name = "Laravel Multiauth";
        $admin->email = "admin@gmail.com";
        $admin->password = Hash::make('password');
        $admin->save();
        $admin->assignRole('superadmin');
        }

    }
}
