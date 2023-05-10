<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;



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

        $credentials = [
            'email'      => 'admin@admin.com',
            'password'   => 'password',
            'first_name' => 'Admin',
            'last_name'  => ' '
        ];



        $user = Sentinel::registerAndActivate( $credentials );

        #Create Role
        $role = Sentinel::findRoleByName('admin');
        $role->users()->attach($user);
    }
}
