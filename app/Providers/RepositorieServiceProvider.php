<?php

namespace CodeDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class RepositorieServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(

            'CodeDelivery\Repositories\CategoryRepository', // Isso está falando que toda as vezes que acessar o CategoryRepository ele var direcionar para CategoryRepositoryEloquent
                'CodeDelivery\Repositories\CategoryRepositoryEloquent'
        );
    }
}
