<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_user = Role::where('name' , 'User')->first();
        $role_author = Role::where('name' , 'Author')->first();
        $role_admin = Role::where('name' , 'Admin')->first();


        $user = new User();
        $user->first_name = "visitor";
        $user->last_name = 'visitor';
        $user->email = 'visitor@gmail.com';
        $user->password = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->first_name = "admin";
        $admin->last_name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $author = new User();
        $author->first_name = "author";
        $author->last_name = 'author';
        $author->email = 'author@gmail.com';
        $author->password = bcrypt('author');
        $author->save();
        $author->roles()->attach($role_author);
    }
}
