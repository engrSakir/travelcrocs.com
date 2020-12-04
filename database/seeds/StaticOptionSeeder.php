<?php

use Illuminate\Database\Seeder;

class StaticOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        set_static_option('smtp_email_host', '');
        set_static_option('smtp_email_port', '');
        set_static_option('smtp_email_username', '');
        set_static_option('smtp_email_password', '');
        set_static_option('smtp_email_encryption', '');
        set_static_option('smtp_email_from_name', '');
        set_static_option('smtp_email_from_email', '');
    }
}
