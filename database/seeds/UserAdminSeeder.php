<?php

use Illuminate\Database\Seeder;
use App\User;

class UserAdminSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user = new User();
        $user->name = 'Administrator';
        $user->email = 'admin@psikotest.dev';
        $user->password = bcrypt('admin');
        $user->save();

        // Jadikan user ini sebagai admin
        $user->assignRole('Admin');
    }

}
