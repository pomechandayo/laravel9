<?php

namespace App\Http\Controllers;

use App\Study\ServiceContainerStudy\Foo;
use App\Service\CalculatorService;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;

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
        $foo->log1();
    }

    public function tax(Request $request) {
        return CalculatorService::newInstance(0)->tax($request->input('price'))->get_result();
    }
}
