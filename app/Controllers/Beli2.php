<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class beli2 extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'beli2/index';
        return view('layout', $data);
    }
    public function dashboard()
    {
        $data['main_view'] = 'beli2/dashboard';
        return view('layout', $data);
    }
}

