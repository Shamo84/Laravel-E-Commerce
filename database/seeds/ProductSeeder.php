<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $cut = ["Princess", "Cushion", "Asscher", "Radiant", "Emerald", "Round", "Oval", "Marquise", "Pear", "Half Moon", "Triangle", "Straight Trillion", "Curved Trillion", "Calf", "Heart cut"];
      $materials = ["gold", "silver", "carbon"];
      for ($i=0; $i < 30; $i++) {
        $newproducts = new Product;
        $newproducts->material = $materials[rand(0, 2)];
        $newproducts->carat = rand(25, 10000) / 100;
        $newproducts->color = $faker->colorName;
        $newproducts->cut = $cut[rand(0, count($cut) - 1)];
        $newproducts->purity = rand(1, 10)/10;
        $newproducts->origin = $faker->countryCode;
        $newproducts->save();
      }
    }
}
