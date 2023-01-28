<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitModel extends Model
{
    protected $table = "visit";
    protected $primaryKey = "id_visit";
    protected $returnType = "array";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_agen', 'nama_pelanggan', 'jumlah_pelanggan', 'hasil_visit'];

    public function getAgen($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
