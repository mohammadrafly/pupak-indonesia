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
            ->like('nama_pupuk', $keyword)
            ->orLike('jenis_pupuk', $keyword)
            ->orLike('created_at', $keyword)
            ->get();
        return $query;
    }
}
