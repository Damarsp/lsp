<?php

namespace App\Controllers;

use App\Models\KelasModel;

class Kelas extends BaseController
{
    public function index()
    {
        $modelKelas = new KelasModel();
        $data['kelas'] = $modelKelas->getKelas();
        $data['title'] = 'Dashboard Admin | Data Kelas';
        echo view('admin/kelas', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Kelas';
        echo view('crud-kelas/tambah', $data);
    }

    public function simpan()
    {
        $modelKelas = new KelasModel();
        $data = [
            'id_kelas' => $this->request->getVar('id_kelas'),
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'kopetensi_keahlian' => $this->request->getVar('kopetensi_keahlian'),
        ];
        $modelKelas->simpanKelas($data);
        return redirect()->to('/kelas');
    }

    public function ubah($id)
    {
        $modelKelas = new KelasModel();
        $data['kelas'] = $modelKelas->getKelas($id)->getRow();
        $data['title'] = 'Edit Data Kelas';
        echo view('crud-kelas/ubah', $data);
    }

    public function update()
    {
        $modelKelas = new KelasModel();
        $id = $this->request->getVar('id_kelas');
        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'kopetensi_keahlian' => $this->request->getVar('kopetensi_keahlian'),
        ];
        $modelKelas->update($id, $data);
        return redirect()->to('/kelas');
    }

    public function hapus($id)
    {
        $modelKelas = new KelasModel();
        $modelKelas->deleteKelas($id);
        return redirect()->to('/kelas');
    }
}
