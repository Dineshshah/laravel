<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;
use App\contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact=contact::insert(['name'=>'humpty','adress'=>'ktm','Created_at'=>Carbon::now()->format('y-m-d h:i:s')]);
    }
}
