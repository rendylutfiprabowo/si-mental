<?php

namespace App\Models;

use CodeIgniter\Model;

class AgenModel extends Model
{
    protected $table = "agenobc";
    protected $primaryKey = "id_agen";
    protected $returnType = "array";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'jumlah customer'];

    public function getAgen($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
