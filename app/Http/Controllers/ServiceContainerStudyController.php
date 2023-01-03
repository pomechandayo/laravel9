<?php

namespace App\Http\Controllers;

use App\Study\ServiceContainerStudy\Foo;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

class ServiceContainerStudyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Foo $foo)
    {
        // app()->bind(Foo::class, function (Application $app) {
        //     $foo = new Foo();
        //     return $foo;
        // });
        $foo = app()->make(Foo::class);
        $foo->log1();
    }
}
