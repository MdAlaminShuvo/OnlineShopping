<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        return "Hello from LearnController";
    }

    public function hello()
    {
        //
        return "Hello";
    }
}
