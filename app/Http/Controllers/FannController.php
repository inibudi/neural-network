<?php

namespace App\Http\Controllers;


class FannController extends Controller
{

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Realiza o treinamento da rede neural
     */
    public function train()
    {

        
        die('train');
    }

    /**
     * Realiza o teste da rede neural treinada
     */
    public function test()
    {
        die('test');
    }
}
