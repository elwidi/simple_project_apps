<?php

namespace App\Controllers;

use App\Libraries\ClientAPI;


class Home extends BaseController
{
    public function __construct(){
        // $ClientApi = new ClientAPI();
		// $ClientApi->doCurl();
    }

    
    public function index()
    {
        return view('welcome_message');
    }

    public function pages(){
        return view('dashboard');
    }

}
