<?php

namespace App\Study\ServiceContainerStudy;

use Illuminate\Support\Facades\Log;

class Foo
{
  public function test() {
    Log::info('Test message1.');
    Log::info('Test message2.');
  }
}