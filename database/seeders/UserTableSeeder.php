<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Entities\Admin\User;
use Database\factories\UserFactory;
use Illuminate\Support\Str;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {

       /*
        email
        username
        firstname
        lastname
        password
        email_verified_at
        start_date
        end_date
        */

        user::truncate();
        $root = new User();
        $root->email = 'root@ticket.com';
        $root->username = 'root';
        $root->firstname = 'Root';
        $root->password = 'Root@';
        $root->created_by = 1;
        $root->updated_by = 1;
        $root->save();

        $user = new User();
        $user->email = 'mangelt27@gmail.com';
        $user->username = 'mangelt27';
        $user->firstname = 'Miguel Angel';
        $user->lastname = 'Torres Diaz';
        $user->password = bcrypt('Sistemas1');
        $user->created_by = $root->id;
        $user->updated_by = $root->id;
        $user->save();

        User::factory(100)->create([
            'created_by'=> 4,
            'firstname'=>'asd'
        ]);


}
}
