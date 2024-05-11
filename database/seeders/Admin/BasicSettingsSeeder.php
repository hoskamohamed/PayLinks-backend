<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\BasicSettings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BasicSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'site_name'       => "PayLink",
            'site_title'      => "Collecting Payment Platform",
            'base_color'      => "#5b39c9",
            'secondary_color' => "#0a2540",
            'otp_exp_seconds' => "3600",
            'timezone'        => "Asia/Dhaka",
            'site_logo_dark'  => "5f1033c2-596b-46e8-b8ee-451ec5ce091a.webp",
            'site_logo'       => "9fd0f710-e0f2-4507-80fd-537e181f5689.webp",
            'site_fav_dark'   => "499b2d78-9e49-42b1-a39b-ca05cd2371a8.webp",
            'site_fav'        => "34dfd9ef-e6a2-467e-b22a-dd7563c5a6d1.webp",
            'user_registration'  => 1,
            'email_verification' => 1,
            'kyc_verification' => 1,
            'email_notification' => 1,
            'agree_policy'       => 1,
            'web_version'        => '2.0.1',
            'mail_config'       => [
                "method" => "smtp",
                "host" => "appdevs.net",
                "port" => "465",
                "encryption" => "ssl",
                "password" => "QP2fsLk?80Ac",
                "username" => "system@appdevs.net",
                "from" => "system@appdevs.net",
                "app_name" => "PayLink",
            ],
            'broadcast_config'  => [
                "method" => "pusher",
                "app_id" => "1539602",
                "primary_key" => "39079c30de823f783dbe",
                "secret_key" => "78b81e5e7e0357aee3df",
                "cluster" => "ap2"
            ],
            'push_notification_config'  => [
                "method" => "pusher",
                "instance_id" => "809313fc-1f5c-4d0b-90bc-1c6751b83bbd",
                "primary_key" => "58C901DC107584D2F1B78E6077889F1C591E2BC39E9F5C00B4362EC9C642F03F"
            ],
        ];

        BasicSettings::firstOrCreate($data);
    }
}
