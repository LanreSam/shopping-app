<?php

    namespace App\paymentGateway;

    class paymentFacade{
        protected static function getFacadeAccessor()
        {
            return 'payment';
        }
    }
