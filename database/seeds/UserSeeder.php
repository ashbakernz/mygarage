<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Ash Baker',
                'email' => 'ashbakernz@gmail.com',
                'password' => \Hash::make('lol12345')
            ]
        ];
        foreach ($data as $user) {
            User::create($user);
        }
    }
}
