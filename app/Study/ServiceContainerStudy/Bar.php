<?php

namespace App\Study\ServiceContainerStudy;

use Illuminate\Support\Facades\Log;

class Bar
{
    public function log($message)
    {
        Log::info($message);
    }
}
