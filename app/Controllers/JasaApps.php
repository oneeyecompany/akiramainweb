<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class JasaApps extends Controller
{
    function index()
    {
        $data['title'] = 'AKIRA | JASA PEMBUATAN APLIKASI';
        $data['content'] = view('layout/jasa-pembuatan-aplikasi');
        $data['js'] = '';
        $data['css'] = '';
        echo view('layout/base', $data);
    }
}
