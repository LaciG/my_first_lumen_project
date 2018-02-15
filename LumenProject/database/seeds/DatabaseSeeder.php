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
        // $this->call('UsersTableSeeder');
        //Itt hívom meg a seeds mappában létrehozott seeder.php fájlok call methodját
        $this->call('QuoteTableSeeder');
    }
}
