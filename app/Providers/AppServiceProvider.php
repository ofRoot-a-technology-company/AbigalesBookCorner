<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // On application boot follow these commands
            // 1 Check if trinket user is in database
            // 2 if no, then create trinket user
            // 3 if yes, then do nothing
        // This code not being used yet
        // Initial Setup
        $username = 'trinket';
        $email = 'abbymcdaniel44@gmail.com';
        // This will be moved later
        $password = '1Ilovedimitrisomuch!';
        // Step 1
        $userExistsByGivenUserName = \App\Models\User::where('name', $username)->exists(); // produces true/false
        // Step 2
        if($userExistsByGivenUserName) {
            \App\Models\User::create([
                'name'  => $username,
                'email' => $email,
                'password' => $password
            ]);
        }

    }
}
