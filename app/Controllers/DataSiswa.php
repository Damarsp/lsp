<?php

namespace App\Controllers;

use App\Models\DataSiswaModel;

class DataSiswa extends BaseController
{
    public function index()
    {
        $modelDataSiswa = new DataSiswaModel();
        $data['siswa'] = $modelDataSiswa->getDataSiswa();
        $data['title'] = 'Dashboard Admin | Data Siswa';
        echo view('admin/datasiswa', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Dashboard Admin | Data Siswa';
        return view('crud-datasiswa/tambah', $data);
    }

    public function simpan()
    {
        $modelDataSiswa = new DataSiswaModel();
        $data = [
            'nisn'       => $this->request->getVar('nisn'),
            'nis'        => $this->request->getVar('nis'),
            'nama'       => $this->request->getVar('nama'),
            'id_kelas'   => $this->request->getVar('id_kelas'),
            'alamat'     => $this->request->getVar('alamat'),
            'no_telp'    => $this->request->getVar('no_telp'),
            'kode_tarif' => $this->request->getVar('kode_tarif'),
        ];
        $modelDataSiswa->simpanDataSiswa($data);
        return redirect()->to('/datasiswa');
    }

    public function ubah($id)
    {
        $modelDataSiswa = new DataSiswaModel();
        $data['title'] = 'Edit Siswa | Data Siswa';
        $data['siswa'] = $modelDataSiswa->getDataSiswa($id)->getRow();
        echo view('crud-datasiswa/ubah', $data);
    }

    public function update()
    {
        $modelDataSiswa = new DataSiswaModel();
        $id = $this->request->getVar('nisn');
        $data = [
            'nisn'       => $this->request->getVar('nisn'),
            'nis'        => $this->request->getVar('nis'),
            'nama'       => $this->request->getVar('nama'),
            'id_kelas'   => $this->request->getVar('id_kelas'),
            'alamat'     => $this->request->getVar('alamat'),
            'no_telp'    => $this->request->getVar('no_telp'),
            'kode_tarif' => $this->request->getVar('kode_tarif'),
        ];
        $modelDataSiswa->update($id, $data);
        return redirect()->to('/datasiswa');
    }

    public function hapus($id)
    {
        $modelSiswa = new DataSiswaModel();
        $modelSiswa->deleteDataSiswa($id);
        return redirect()->to('/datasiswa');
    }
}
