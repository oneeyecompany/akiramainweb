<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class JasaWebsite extends Controller
{
    function index()
    {
        $data['title'] = 'AKIRA | JASA WEBSITE PROFESIONAL';
        $data['content'] = view('layout/jasa-pembuatan-website');
        $data['js'] = '';
        $data['css'] = '';
        echo view('layout/base', $data);
    }
}
