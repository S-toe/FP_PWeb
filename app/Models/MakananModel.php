<?php

namespace App\Models;

use CodeIgniter\Model;

class MakananModel extends Model
{
    protected $table      = 'makanan';
    protected $primaryKey = 'makanan_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['makanan_nama', 'makanan_price', 'makanan_stock', 'makanan_image'];

    public function getMakanan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['makanan_id' => $id])->first();
    }

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
