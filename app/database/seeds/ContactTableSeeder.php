<?php

class ContactTableSeeder extends Seeder {

  public function run() {

    
$faker = Faker\Factory::create();
  DB::statement('delete from contacts');
 DB::statement('ALTER TABLE contacts AUTO_INCREMENT = 1');
for ($i = 1; $i < 10001; $i++)
{
  DB::table('contacts')->insert(array(
    'record_id' => $i,
    'title' => $faker->prefix,
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'dob' => $faker->date,
    'company_name' => $faker->company,
    'position_id' => null,
    'income' => $faker->randomNumber(5),
    'dependants' => null,
    'marital_state_id' => null,
    'residential_state_id' => null,
    'email' => $faker->email,
    'website' => $faker->url,
    'image' => $faker->imageUrl(100, 100, "people")."?".$faker->randomNumber(5),
    'created_at' => date('Y-m-d H:i:s')
  ));
}

  }
}
?>
