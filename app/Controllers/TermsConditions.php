<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TermsConditions extends Controller
{
    function index()
    {
        $data['title'] = 'AKIRA | TERMS & CONDITIONS';
        $data['content'] = view('layout/terms');
        $data['js'] = '';
        $data['css'] = '';
        echo view('layout/base', $data);
    }
}
