<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitModel extends Model
{
    protected $table = "visit";
    protected $primaryKey = "id_visit";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['nomor_jastel', 'nama', 'contact', 'nama_agen', 'tanggal_visit', 'alamat', 'alamat_baru', 'STO', 'datel', 'hasil_visit', 'ket_visit'];

    public function getAgen($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
