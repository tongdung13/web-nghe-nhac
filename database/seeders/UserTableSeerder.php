<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "dung";
        $user->email = "omygood@gmail.com";
        $user->password = bcrypt("1234567");
        $user->level = "Admin";
        $user->save();
    }
}
