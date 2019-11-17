<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-11-02T15:07:34+00:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-17T11:03:32+00:00




use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Admin Role:
      $role_admin = Role::where('name', 'admin')->first();

      // User Role
      $role_user = Role::where('name', 'user')->first();

      // Admin User:
      $admin = new User();
      $admin->name = "Mo Che";
      $admin->email = "admin@mobookstore.ie";
      $admin->password = bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);

      // User User:
      $user = new User();
      $user->name = "John Jones";
      $user->email = "johnj@mobookstore.ie";
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      // One-to-Many User (Customer):
      $user = new User();
      $user->name = "Jesus Himself";
      $user->email = "j@mobookstore.ie";
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = "Bless Himself";
      $user->email = "b@mobookstore.ie";
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = "Johnny Boy";
      $user->email = "j.c@mobookstore.ie";
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = "No This Is Patrick";
      $user->email = "p@mobookstore.ie";
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);
    }
}
