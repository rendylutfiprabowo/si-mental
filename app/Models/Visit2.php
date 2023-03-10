<?php

namespace App\Models;

use CodeIgniter\Model;

class Visit2 extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'visit2';
    protected $primaryKey       = 'id_visit';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_agen', 'id_pelanggan', 'nomor_jastel', 'nama', 'contact', 'nama_agen', 'tanggal_visit', 'alamat', 'alamat_baru', 'STO', 'datel', 'hasil_visit', 'ket_visit'];


    public function getHvisit(){
        $builder = $this->db->table("visit2");
        // $builder->selectCount("nomor_jastel","Jumlah Customer");
        $builder->select("hasil_visit");
        $builder->selectCount("nomor_jastel", "total");
        $builder->groupBy("hasil_visit");
        $data = $builder->get()->getResult();
        return $data;
    }
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
}
