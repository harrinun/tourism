<?php

use App\Tour\Entities\Extra;
use App\Tour\Entities\Role;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class,1)->create();
        factory(Role::class,3)->create();

        User::first()->attachRole(Role::where('name','admin')->first()->id);
        //factory(Extra::class,4)->create();
    }
}
