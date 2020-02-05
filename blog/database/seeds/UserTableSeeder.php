<?php

use Illuminate\Database\Seeder;
use App\user;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create default entry for user to login
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@blog.com';
        $user->password = bcrypt('admin');
        $user->status = '1';
        $user->save();
    }
}
