<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Privacy extends Controller
{
    function index()
    {
        $data['title'] = 'AKIRA | PRIVACY & POLICY';
        $data['content'] = view('layout/privasi');
        $data['js'] = '';
        $data['css'] = '';
        echo view('layout/base', $data);
    }
}
