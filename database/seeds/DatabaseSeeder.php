<?php

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
      $this->call(UserTableSeeder::class);
      $this->call(WorkshopTableSeeder::class);
      $this->call(CompetenceTableSeeder::class);
      $this->call(MemberTableSeeder::class);
      $this->call(GroupTableSeeder::class);
    }
}