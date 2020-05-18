<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\it_IT\Company as FakerIT;
use App\Vendor;
use App\Product;


class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker, FakerIT $fakerIT)
    {
      for ($i=0; $i < 5; $i++) {
        $newvendor = new Vendor;
        $newvendor->name = $faker->name;
        $newvendor->email = $faker->email;
        $newvendor->password = $faker->password;
        $newvendor->vat_id = $fakerIT->vatId();
        $newvendor->address = $faker->address;
        $newvendor->logo = "https://loremflickr.com/320/240";
        $newvendor->save();
      }
    }
}
