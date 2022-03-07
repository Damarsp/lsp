<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pembayaran';
    protected $primaryKey       = 'id_pembayaran';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pembayaran', 'id_petugas', 'nisn', 'tgl_bayar', 'id_spp', 'jumlah_bayar'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getPembayaran($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_pembayaran' => $id]);
        }
    }

    public function simpanPembayaran($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatePembayaran($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, $id);
        return $query;
    }

    public function deletePembayaran($id)
    {
        $query = $this->db->table($this->table)->delete(['id_pembayaran' => $id]);
        return $query;
    }

    public function getPembayaranSiswa($nisn)
    {
        $builder = $this->db->table('siswa');
        $builder->select('spp.id_spp, spp.nominal');
        $builder->join('spp', 'spp.id_spp = siswa.id_spp');
        $builder->where('siswa.nisn', $nisn);

        return $builder->get();
    }
}
