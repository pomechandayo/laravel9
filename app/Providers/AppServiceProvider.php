<?php

namespace App\Providers;

use App\Repository\AdminRepository;
use App\Repository\AdminRepositoryInterface;
use App\Repository\UserRepository;
use App\Repository\UserRepositoryInterface;
use App\Service\UserService;
use App\Study\ServiceContainerStudy\Bar;
use App\Study\ServiceContainerStudy\BlowfishEncrypter;
use App\Study\ServiceContainerStudy\Foo;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Log::info('register');
        app()->bind(Foo::class, function () {
            $foo = new Foo(new Bar);
            Log::info('register foo');

            return $foo;
        });
        // app()->bind(UserRepositoryInterface::class, function () {
        //     return new UserRepository();
        // });
        app()->when(UserService::class)
             ->needs(UserRepositoryInterface::class)
             ->give(UserRepository::class);

        $this->app->bind(
            AdminRepositoryInterface::class,
            AdminRepository::class,
        );

        // $this->app->singleton(
        //     'encrypter',
        //     function ($app) {
        //         $config = $app->make('config')->get('app');

        //         return new BlowfishEncrypter($this->parseKey($config));
        //     }
        // );
    }

    public function parseKey(array $config)
    {
        if (Str::startsWith($key = $this->key($config), $prefix = 'base64:')) {
            $key = base64_decode(Str::after($key, $prefix));
        }

        return $key;
    }

    protected function key(array $config)
    {
        return tap(
            $config['key'],
            function ($key) {
                if (empty($key)) {
                    throw new MissingAppKeyException;
                }
            }
        );
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
