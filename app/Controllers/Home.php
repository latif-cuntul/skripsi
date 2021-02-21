<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        session()->set(['url' => "home"]);
        return view('home');
    }

    //--------------------------------------------------------------------

}
