<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class Pembayaran extends BaseController
{
    public function index()
    {
        $pembayaran = new PembayaranModel();
        $data = [
            'title' => 'Data Pembayaran',
            'pembayaran' => $pembayaran->getPembayaran()
        ];
        return view('admin/pembayaran', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Pembayaran';
        echo view('crud-pembayaran/tambah', $data);
    }

    public function simpan()
    {
        $pembayaran = new PembayaranModel();
        $data = [
            'id_pembayaran' => $this->request->getVar('id_pembayaran'),
            'id_petugas'    => $this->request->getVar('id_petugas'),
            'nisn'          => $this->request->getVar('nisn'),
            'tgl_bayar'     => $this->request->getVar('tgl_bayar'),
            'id_spp'        => $this->request->getVar('id_spp'),
            'jumlah_bayar'  => $this->request->getVar('jumlah_bayar'),
        ];
        $pembayaran->simpanPembayaran($data);
        return redirect()->to('/pembayaran');
    }

    public function bayar($id = null)
    {
        $pembayaran = new PembayaranModel();
        $pembayaran->where('id_pembayaran', $id);
        return redirect()->to('/pembayaran');
    }

    public function update()
    {
        $pembayaran = new PembayaranModel();
        $id = $this->request->getVar('id_pembayaran');
        $data = [
            'id_petugas'    => $this->request->getVar('id_petugas'),
            'nisn'          => $this->request->getVar('nisn'),
            'tgl_bayar'     => $this->request->getVar('tgl_bayar'),
            'id_spp'        => $this->request->getVar('id_spp'),
            'jumlah_bayar'  => $this->request->getVar('jumlah_bayar'),
        ];
        $pembayaran->where('id_pembayaran', $id)->set($data)->update();
        return redirect()->to('/history');
    }

    public function hapus($id)
    {
        $pembayaran = new PembayaranModel();
        $pembayaran->deletePembayaran($id);
        return redirect()->to('/pembayaran');
    }

    public function get_pembayaran_id($nisn)
    {
        $option = "";
        $pembayaran = new PembayaranModel();
        $data = $pembayaran->getPembayaranSiswa($nisn)->getResultArray();

        foreach ($data as $row) {
            $option .= "<option value='" . $row['id_spp'] . "' selected>" . $row['id_spp'] . "</option>";
        }

        echo $option;
    }

    public function get_pembayaran_nominal($nisn)
    {
        $option = "";
        $pembayaran = new PembayaranModel();
        $data = $pembayaran->getPembayaranSiswa($nisn)->getResultArray();

        foreach ($data as $row) {
            $option .= "<option value='" . $row['nominal'] . "' selected>" . $row['nominal'] . "</option>";
        }

        echo $option;
    }
}
