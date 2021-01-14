<?php

namespace App\Models;

use CodeIgniter\Model;

class MinumanModel extends Model
{
    protected $table      = 'minuman';
    protected $primaryKey = 'minuman_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['minuman_nama', 'minuman_price', 'minuman_stock', 'minuman_image'];

    public function getMinuman($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['minuman_id' => $id])->first();
    }
    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
