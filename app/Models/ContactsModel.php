<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactsModel extends Model
{
    protected $table      = 'contacts';
    protected $primaryKey = 'contacts_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'phone', 'email', 'bday'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
