<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'admin',
            'title' => 'Administrator',
        ]);

        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'user',
            'title' => 'gebruiker',
        ]);

        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'moderator',
            'title' => 'Beheerder',
        ]);
    }
}
