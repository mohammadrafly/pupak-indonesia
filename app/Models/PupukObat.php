<?php

namespace App\Models;

use CodeIgniter\Model;

class PupukObat extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pupukobat';
    protected $primaryKey       = 'id_pupuk';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_pupuk',
        'jenis_pupuk',
        'deskripsi',
        'berat',
        'harga',
        'picture',
        'created_at',
        'updated_at',
    ];

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

    function getTheKeyword($keyword)
    {
        $query = $this->db->table('pupukobat')
            ->select('
                pupukobat.*,
                pupukobat.picture as P_picture,
                pupukobat.id_pupuk as idPupuk,
                tanaman_group.*,
                tanaman_group.id as idTG,
                tanaman.*,
                tanaman.picture as T_picture
            ')
            ->join('tanaman_group', 'pupukobat.id_pupuk = tanaman_group.id_pupukobat')
            ->join('tanaman', 'tanaman_group.id_tanaman = tanaman.id_tanaman')
            ->like('nama_pupuk', $keyword)
            ->orLike('jenis_pupuk', $keyword)
            ->orLike('tanaman.nama_tanaman', $keyword)
            ->orLike('tanaman.jenis_tanaman', $keyword)
            ->get();
        return $query;
    }
}
