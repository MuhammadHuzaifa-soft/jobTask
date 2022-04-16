<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          $skills = ['php' , 'laravel' , 'bootstrap' , 'javascript' , 'html' , 'css' , 'vue'];

          foreach($skills as $skill){
          DB::table('skills')->insert(['name' => $skill]);
          }
        // \App\Models\User::factory(10)->create();
    }
}