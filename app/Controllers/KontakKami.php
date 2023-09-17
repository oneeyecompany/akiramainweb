<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class KontakKami extends Controller
{
    function index()
    {
        $data['title'] = 'AKIRA | TENTANG KAMI';
        $data['content'] = view('layout/kontak-kami');
        $data['js'] = '';
        $data['css'] = '';
        echo view('layout/base', $data);
    }
}
