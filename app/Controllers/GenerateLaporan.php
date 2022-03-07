<?php

namespace App\Controllers;

use App\Models\GenerateLaporanModel;

class GenerateLaporan extends BaseController
{
    public function index()
    {
        $modelGenerateLaporan = new GenerateLaporanModel();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $generatelaporan = $modelGenerateLaporan->search($keyword);
        } else {
            $generatelaporan = $modelGenerateLaporan;
        }
        $data['history'] = $generatelaporan->getGenerateLaporan();
        echo view('admin/generatelaporan', $data);
    }

    public function print()
    {
        $modelGenerateLaporan = new GenerateLaporanModel();
        $data['history'] = $modelGenerateLaporan->getGenerateLaporan();
        echo view('admin/print', $data);
    }
}
