<?php

namespace App\Http\Controllers;

use App\Foo;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function service_container_test(Request $request)
    {
        app()->bind(Foo::class, function (Application $app) {
            $foo = new Foo();
            return $foo;
        });
        $foo = app()->make(Foo::class);
        $foo->test();
    }
}
