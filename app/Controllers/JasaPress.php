<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class JasaPress extends Controller
{
    function index()
    {
        $data['title'] = 'AKIRA | JASA PUBLIKASI MEDIA MASSA';
        $data['content'] = view('layout/jasa-press-release');
        $data['js'] = '';
        $data['css'] = '';
        echo view('layout/base', $data);
    }
}
