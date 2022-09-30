<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class beli1 extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'beli1/index';
        return view('layout', $data);
    }
    public function dashboard()
    {
        $data['main_view'] = 'beli1/dashboard';
        return view('layout', $data);
    }
}

