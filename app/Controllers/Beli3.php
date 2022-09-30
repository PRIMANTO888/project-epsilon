<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class beli3 extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'beli3/index';
        return view('layout', $data);
    }
    public function dashboard()
    {
        $data['main_view'] = 'beli3/dashboard';
        return view('layout', $data);
    }
}

