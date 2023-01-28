<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studycontroller extends Controller
{
    public function authorization() {
        return response()->json('authorization', 200);
    }
}
