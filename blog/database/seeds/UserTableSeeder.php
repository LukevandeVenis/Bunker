<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = 'Joggum';
        $user->password = bcrypt('pass1234');
        $user->email = 'testeroni@example.nl';
        $user->save();
        $user->assign('admin');
    }
}
