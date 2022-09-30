<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class login extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'login/index';
        return view('layout', $data);
    }
    public function dashboard()
    {
        $data['main_view'] = 'login/dashboard';
        return view('layout', $data);
    }
}

