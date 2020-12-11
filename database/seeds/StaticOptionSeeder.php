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
        set_static_option('session_lifetime', '');

        set_static_option('smtp_email_host', '');
        set_static_option('smtp_email_port', '');
        set_static_option('smtp_email_username', '');
        set_static_option('smtp_email_password', '');
        set_static_option('smtp_email_encryption', '');
        set_static_option('smtp_email_from_name', '');
        set_static_option('smtp_email_from_email', '');

        set_static_option('company_main_email', '');
        set_static_option('company_main_phone', '');

        set_static_option('website_logo', '');
        set_static_option('favicon', '');
        set_static_option('meta_image', '');
        set_static_option('we_accept', '');

        set_static_option('website_hero_bg_color', '');
        set_static_option('website_hero_bg_image', '');
        set_static_option('website_hero_bg_lines', ''); // enable | disable
        set_static_option('website_hero_bg_type', '');//image | color

        set_static_option('website_footer_credit', '');

    }
}
