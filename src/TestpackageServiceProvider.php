<?php

namespace Testvendor\Testpackage;

use Illuminate\Support\ServiceProvider;

use Testvendor\Testpackage\Usaddress;

class TestpackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    protected $defer = false;
    public function register()
    {
       
        /*$app = $this->app ?: app();
        $this->app->bind(Usaddress::class, function () use ($app) {
            return new Usaddress();
        }); */
      $this->app->bind('cart', 'Testvendor\Testpackage\Usaddress');
      
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()

    {    

     //dd('HI');//$this->app->make('Testvendor\Testpackage\Usaddress');
        //$this->app->bind('Usaddress', 'Testvendor\Testpackage\Usaddress');
      

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        //
    }

    public function provides()
    {
        return ['Usaddress'];
    }
}
