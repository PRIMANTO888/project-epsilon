<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class product extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\services::session();
    }

    public function index()
    {
        if (!$this->session->get('user_id')) {
            $this->session->setFlashdata('danger','Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $data['main_view'] = 'product/index';
        return view('layout', $data);
    }
    
    public function dashboard()
    {
        if (!$this->session->get('user_id')) {
            $this->session->setFlashdata('danger','Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        
        $data['main_view'] = 'product/dashboard';
        return view('layout', $data);
    }
}

