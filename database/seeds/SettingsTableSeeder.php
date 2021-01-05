<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'laravel blog',
            'addres' => 'morroco, marrakech',
            'contact_number' => '06 66 66 66 66',
            'contact_email' => 'bloger@me.com'
        ]);
    }
}
