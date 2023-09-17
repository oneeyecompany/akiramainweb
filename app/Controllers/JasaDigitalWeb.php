<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class JasaDigitalWeb extends Controller
{
    function index()
    {
        $data['title'] = 'AKIRA | JASA DIGITAL SISTEM';
        $data['content'] = view('layout/jasa-digital-sistem');
        $data['js'] = '';
        $data['css'] = '';
        echo view('layout/base', $data);
    }
}
