<?php

namespace App\Controllers;

use App\Models\DataPetugasModel;

class DataPetugas extends BaseController
{
    public function index()
    {
        $model = new DataPetugasModel();
        $data = [
            'title' => 'Dashboard Admin | Data Petugas',
            'petugas' => $model->getPetugas()
        ];
        return view('admin/datapetugas', $data);
    }
}
