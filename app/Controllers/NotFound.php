<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class NotFound extends Controller
{
    function index()
    {
        $data['title'] = 'AKIRA | 404 Maintance';
        $data['content'] = view('layout/maintance');
        $data['js'] = '';
        $data['css'] = '';
        echo view('layout/base', $data);
    }
}
