<?php

namespace App\Controllers;

use App\Models\DataSppModel;

class DataSpp extends BaseController
{
    public function index()
    {
        $modelDataSpp = new DataSppModel();
        $data['spp'] = $modelDataSpp->getDataSpp();
        $data['title'] = 'Dashboard Admin | Data Spp';
        echo view('admin/dataspp', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Spp';
        echo view('crud-dataspp/tambah', $data);
    }

    public function simpan()
    {
        $modelDataSpp = new DataSppModel();
        $data = [
            'id_spp' => $this->request->getVar('id_spp'),
            'tahun' => $this->request->getVar('tahun'),
            'nominal' => $this->request->getVar('nominal'),
        ];
        $modelDataSpp->simpanDataSpp($data);
        return redirect()->to('/dataspp');
    }

    public function ubah($id)
    {
        $modelDataSpp = new DataSppModel();
        $data['spp'] = $modelDataSpp->getDataSpp($id)->getRow();
        $data['title'] = 'Edit Data Spp';
        echo view('crud-dataspp/ubah', $data);
    }

    public function update()
    {
        $modelDataSpp = new DataSppModel();
        $id = $this->request->getVar('id_spp');
        $data = [
            'tahun' => $this->request->getVar('tahun'),
            'nominal' => $this->request->getVar('nominal'),
        ];
        $modelDataSpp->update($id, $data);
        return redirect()->to('/dataspp');
    }

    public function hapus($id)
    {
        $modelDataSpp = new DataSppModel();
        $modelDataSpp->deleteDataSpp($id);
        return redirect()->to('/dataspp');
    }
}
