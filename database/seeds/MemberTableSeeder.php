<?php

use Illuminate\Database\Seeder;
use App\Member;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $member = new Member();
      $member->group_id = 1;
      $member->name = 'Jeffrey';
      $member->email = 'test@test.nl';
      $member->status = 0;
      $member->save();
    }
}


