<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function nama()
    {
        return json_encode(['nama' => 'Sheyla Utari']);
    }
}
