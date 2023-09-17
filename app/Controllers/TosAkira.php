<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TosAkira extends Controller
{
    function index()
    {
        $data['title'] = 'AKIRA | TOS AKIRA';
        $data['content'] = view('layout/ketentuan-order');
        $data['js'] = '';
        $data['css'] = '';
        echo view('layout/base', $data);
    }
}
