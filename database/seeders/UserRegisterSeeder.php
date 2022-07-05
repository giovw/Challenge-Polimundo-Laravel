<?php

namespace Database\Seeders;

use App\Models\UserRegisters;
use Illuminate\Database\Seeder;

class UserRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRegisters::factory()->count(10)->create();

        // UserRegisters::create([
        //     'name' => 'Adina Barbosa',
        //     'email' => 'email@test.com',
        //     'country_data_id' => '1'
        // ]);
    }
}
