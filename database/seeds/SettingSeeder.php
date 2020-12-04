<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new \App\Setting();
        $setting->key   =   'smtp_email_host';
        $setting->value =   '';
        $setting->save();

        $setting = new \App\Setting();
        $setting->key   =   'smtp_email_port';
        $setting->value =   '';
        $setting->save();
    }
}
