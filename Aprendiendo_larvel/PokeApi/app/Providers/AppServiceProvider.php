<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $baseUrl = env('API_ENDPOINT');
        $baseUrl = 'https://pokeapi.co/api/v2/pokemon/';
        $this->app->singleton(Client::class, function($app) use ($baseUrl){
            return new Client(['base_uri' => $baseUrl]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
