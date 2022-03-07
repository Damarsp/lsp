<?php

namespace App\Controllers;

use App\Models\DataSiswaModel;

class Siswa extends BaseController
{
    public function index()
    {
        $users = new \Myth\Auth\Models\UserModel();
        $data['users'] = $users->findAll();
        return view('pelanggan/home', $data);
    }
}
