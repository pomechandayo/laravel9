<?php

namespace App\Http\Controllers;

class Studycontroller extends Controller
{
    public function authorization()
    {
        return response()->json('authorization', 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
}
