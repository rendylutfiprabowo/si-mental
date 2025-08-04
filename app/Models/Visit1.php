<?php

namespace App\Models;

use CodeIgniter\Model;

class Visit1 extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'visit1';
    protected $primaryKey       = 'id_visit';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_agen', 'id_pelanggan', 'nomor_jastel', 'nama', 'contact', 'nama_agen', 'tanggal_visit', 'alamat', 'alamat_baru', 'STO', 'datel', 'hasil_visit', 'ket_visit'];

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
