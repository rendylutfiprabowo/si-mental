<?php

namespace App\Models;

use CodeIgniter\Model;

class AgenModel extends Model
{
    protected $table = "agen";
    protected $primaryKey = "id_agen";
    protected $returnType = "array";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'jumlah_pelanggan', 'performance'];

    public function getAgen($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
