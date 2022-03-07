<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Staff extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard Petugas';
        return view('staff/index', $data);
    }
}
