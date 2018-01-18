<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$group = new Group();
		$group->name = 'NW04';
		$group->hash = 'randomhash';
        $group->owner_name = 'Jeffrey Pieksma';
        $group->owner_email = 'jeffreypieksma@hotmail.com';
		$group->save();

    }
}
