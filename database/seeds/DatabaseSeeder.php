<?php

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
        // $this->call(UserSeeder::class);

        $images = 
        [
            ["id"=>1, "name"=>"girl1", "src"=>"images/girl-1.png"],
            ["id"=>2, "name"=>"girl2", "src"=>"images/girl-2.png"],
            ["id"=>3, "name"=>"girl3", "src"=>"images/girl-3.png"]
        ];

        DB::table('images')->insert($images);
    }
}
