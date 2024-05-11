<<<<<<<< Update Guide >>>>>>>>>>>  

Immediate Older Version: 2.0.0
Current Version: 2.1.0

Feature Update:
1. Installer Issue Fixed
2. Payment demo mode restriction remove
3. Mail From Address Add
4. Razorpay Update
4. Perfect Money Payment Gateway

Please User Those Command On Your Terminal To Update Full System
1. To Run project Please Run This Command On Your Terminal
    composer update && composer dumpautoload

2. To Update Database Please Run The command On Your Terminal
    -> php artisan db:seed --class=Database\\Seeders\\V2_1_0\\PaymentGateWaySeeder

3. To Update Feature
    -> php artisan db:seed --class=Database\\Seeders\\UpdateFeatureSeeder

