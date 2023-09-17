<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    function index()
    {
        $data['title'] = 'AKIRA | CORRECTLY CRAFT';
        $data['content'] = view('layout/index');
        $data['js'] = '';
        $data['css'] = '';
        echo view('layout/base', $data);
    }
}
