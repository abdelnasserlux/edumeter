<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $adminRole = Role::create(['name'=>'admin','display_name'=>'Administrator','description'=>'system Administrator','allowed_route'=>'admin']);
        $userRole = Role::create(['name'=>'user','display_name'=>'Student','description'=>'Student','allowed_route'=>null]);
        $parentRole = Role::create(['name'=>'parent','display_name'=>'Parent','description'=>'Parent','allowed_route'=>null]);

    }
}
