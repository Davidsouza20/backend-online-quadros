<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{	
		for ($i = 0; $i < 15; $i++)	{
		DB::table('carros')->insert([
            'marca' => Str::random(10),
            'modelo' => Str::random(10),
			'year' => 2019,
		
        ]);}
		
		
		
		
		//Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
