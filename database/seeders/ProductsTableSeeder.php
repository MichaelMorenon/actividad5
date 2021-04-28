<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =faker::create();

        for ($i=0;$i<=20;$i++){

        Product::create([
           'name'=>$faker->company,
           'nit'=>$faker->name,
           'address'=>$faker->address,
           'logo'=>$faker->imageUrl()
        ]);
        }
    }
}
