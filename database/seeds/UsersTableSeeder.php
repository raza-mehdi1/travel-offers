<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('name', env('ADMIN_NAME'))->first();
        if(!$admin){
            User::create(
                [
                    'name'=>env('ADMIN_NAME'),
                    'email'=>env('ADMIN_EMAIL'),
                    'password'=>bcrypt(env('ADMIN_PASSWORD'))
                ]
            );
        }
    }
}
