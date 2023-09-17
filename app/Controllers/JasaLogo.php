<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class JasaLogo extends Controller
{
    function index()
    {
        $data['title'] = 'AKIRA | JASA PEMBUATAN LOGO';
        $data['content'] = view('layout/jasa-pembuatan-logo');
        $data['js'] = '';
        $data['css'] = '';
        echo view('layout/base', $data);
    }
}
