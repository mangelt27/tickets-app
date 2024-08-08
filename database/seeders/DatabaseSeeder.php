<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\support\facades\Schema;
use Illuminate\Database\Eloquent\Model;
//use app\Models\Entities\Admin\User;
//use Database\Factories\UserFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
         public function run()
        {
            model::unguard();
         try
               {
                Schema::disableForeignKeyConstraints();
             $this->call(UserTableSeeder::class); //llamado a seed
            Schema::enableForeignKeyConstraints();
            }catch(\Throwable $th){
            return $th->getMessage();
            }

    /*         //model::unguard();
            Schema::disableForeignKeyConstraints();
            try {
                $this->call(UserTableSeeder::class);
                }catch(\Throwable $th){
                echo 'Error: ' . $th->getMessage();
                } finally {
                Schema::enableForeignKeyConstraints();
                }
 */
         }




}
