<?php

namespace App\Models;

use CodeIgniter\Model;

class DetPel extends Model
{
    protected $table = "pelanggan";
    protected $primaryKey = "id_pelanggan";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['nomor_jastel', 'contact', 'nama', 'hasil_greeting', 'profil_kesepakatan', 'agen_pengelola', 'produk', 'alamat', 'STO', 'datel', 'statuscall', 'tanggal', 'reasoncall', 'penerima_telpon', 'hub_ybs', 'kendala_pelanggan', 'hasil_caring',];

    public function getPelanggan($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
