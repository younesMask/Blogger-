<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([

            'name' => 'younes maskouf',
            'email' => 'younes@gml.me',
            'password' => bcrypt('steefire'),
            'admin' => 1
        ]);

        App\Profile::create([

            'user_id' => $user->id,

            'about' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, perferendis. ',

            'avatar' => 'upload/avatar/1.jpg',
            
            'facebook' => 'facebook.com',

            'youtube' => 'youtube.com'
        ]); 
    }
}
