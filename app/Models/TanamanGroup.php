<?php

namespace App\Models;

use CodeIgniter\Model;

class TanamanGroup extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tanaman_group';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_tanaman',
        'id_pupukobat'
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

    public function joinTanamanPupuk($id)
    {
        $query = $this->db->table('tanaman_group')
            ->select('
                tanaman.nama_tanaman,
                tanaman.jenis_tanaman
            ')
            ->join('tanaman', 'tanaman_group.id_tanaman = tanaman.id_tanaman', 'left')
            ->join('pupukobat', 'tanaman_group.id_pupukobat = pupukobat.id_pupuk', 'left')
            ->where('id_pupukobat', $id)
            ->get();
        return $query;
    }
}
