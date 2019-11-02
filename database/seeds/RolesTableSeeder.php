<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-11-02T15:07:48+00:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-02T15:23:50+00:00




use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Creating Admin Seeder:
      $role_admin = new Role();
      $role_admin->name = 'admin';
      $role_admin->description = 'An Administrator user';
      $role_admin->save();

      // Creating User Seeder:
      $role_user = new Role();
      $role_user->name = 'user';
      $role_user->description = 'An Ordinary user';
      $role_user->save();
    }
}
