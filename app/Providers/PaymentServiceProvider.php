<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\paymentGateway\payment;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('payment', function(){
            return new payment();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
