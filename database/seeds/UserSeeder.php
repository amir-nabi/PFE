<?php

use Illuminate\Database\Seeder;

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
        DB::table('users')->insert([
            'id'=>'1',
            'nom'=>'FS',
            'prenom'=>'Admin',
            'email'=>'admin@gmail.com',
            'role'=>'Administrateur',
            'password'=>bcrypt('admin')
        ]);
    }
}
