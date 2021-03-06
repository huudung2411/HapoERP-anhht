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
        $this->call([
            AbsencesTableSeeder::class,
            AdminsTableSeeder::class,
            HolidaysTableSeeder::class,
            ReportOTsTableSeeder::class,
            UsersTableSeeder::class,
            ReportsTableSeeder::class,
            RollCallsTableSeeder::class,
            SalariesTableSeeder::class,
            DepartmentRoleTableSeeder::class,
            DepartmentTableSeeder::class,
            UserRoleTableSeeder::class,
        ]);
    }
}
