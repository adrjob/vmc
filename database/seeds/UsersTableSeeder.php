<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'id' => 1,
            'name' => 'Saleh',
            'email' => 'saleh@salehabdul.com',
            'role_id' => 1,
        ]);

//         factory(App\User::class)->create([
//             'id' => 2,
//             'name' => 'Creator',
//             'email' => 'creator@white.com',
//             'role_id' => 2,
//             'picture' => '../white/img/lora.jpg'
//         ]);

        factory(App\User::class)->create([
            'id' => 3,
            'name' => 'Adrian',
            'email' => 'adrian@salehabdul.com',
            'role_id' => 3,
        ]);
    }
}
