<?php

namespace App\Models;

use CodeIgniter\Model;

class Caring2 extends Model
{
    protected $table = "caring2";
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

    public function getProfk(){
        $builder = $this->db->table("caring2");
        // $builder->selectCount("nomor_jastel","Jumlah Customer");
        $builder->select("profil_kesepakatan");
        $builder->selectCount("nomor_jastel", "total");
        $builder->groupBy("profil_kesepakatan");
        $data = $builder->get()->getResult();
        return $data;
    }

    public function getReascall(){
        $builder = $this->db->table("caring2");
        // $builder->selectCount("nomor_jastel","Jumlah Customer");
        $builder->select("reasoncall");
        $builder->selectCount("nomor_jastel", "total");
        $builder->groupBy("reasoncall");
        $data = $builder->get()->getResult();
        return $data;
    }
}
