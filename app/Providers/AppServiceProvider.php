<?php

namespace App\Providers;

use Code\Validator\Cpf;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('cpf', function ($attibute, $value, $parameters, $validator) {
            return (new Cpf())->isValid($value); // Validar CPF
        });

        Passport::hashClientSecrets();

    }
}
