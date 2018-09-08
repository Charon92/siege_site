<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Tom Pegler',
        'username' => 'charon',
        'email'    => 'tpegler92@gmail.com',
        'password' => Hash::make('Bl4ck4rr0w$1'),
    ));
}
}
