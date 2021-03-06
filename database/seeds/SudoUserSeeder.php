<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Carbon\Carbon;

class SudoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sudoRole = new Role();
        $sudoRole->name = 'Sudo';
        $sudoRole->save();

        $sudo = new User;
        $sudo->name = 'Super User';
        $sudo->username = 'sudo';
        $sudo->email = 'sudo@mis.theemcoe.org';
        $sudo->password = bcrypt('SuperSecretPassword');
        $sudo->dateOfBirth = Carbon::createFromDate(2017, 1, 26);
        $sudo->save();

        $sudo->roles()->attach($sudoRole->id);
    }
}
