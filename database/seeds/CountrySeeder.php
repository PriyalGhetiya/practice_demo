<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = [
            ['name' => 'India'] ,
            ['name' => 'Australlia'] ,
            ['name' => 'Japan'] ,
            ['name' => 'UK'] ,
            ['name' => 'Finland'] ,
        ];
        
        Country::insert($country);
    }
}
