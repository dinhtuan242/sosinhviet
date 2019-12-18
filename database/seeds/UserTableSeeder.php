<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'     => 'Vũ Đình Tuân',
            'email'    => 'vudinhtuan242@gmail.com',
            'provider' => 'google',
            'provider_id' => '102165342196515019005',
            'role' => 'admin',
        ]);
    }
}
