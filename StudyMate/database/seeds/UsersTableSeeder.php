<?php

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
        $this->seedAdmin();
    }

    public function seedAdmin(){
        $this->seedUser('admin', 'info@gmail.com', 0);
    }

    public function seedUser(String $name, String $email, int $role = null){
        DB::table('users')->insert([
            'name'      => $name,
            'email'     => $email,
            'password'  => bcrypt('password')
        ]);
    }
}
