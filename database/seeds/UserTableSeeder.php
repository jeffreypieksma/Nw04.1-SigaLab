<?php
use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Jeffrey';
        $user->email = 'jeffreypieksma@hotmail.com';
        $user->is_admin = 1;
        $user->password = bcrypt('admin');
        $user->save();

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->is_admin = 1;
        $user->password = bcrypt('admin');
        $user->save();
    }
}