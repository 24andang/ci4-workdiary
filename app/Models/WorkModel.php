<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkModel extends Model
{
    protected $table      = 'work';
    protected $primaryKey = 'id';

    protected $allowedFields = ['kegiatan', 'tanggal', 'keterangan'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getWork($id = null)
    {
        if ($id) {
            return $this->find($id, 'id');
        }

        return $this->findAll();
    }
}
