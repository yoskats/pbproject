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

   // protected $useTimestamps = true;


    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


     protected $validationRules    = [
        'name' => 'required|min_length[5]|max_length[20]',
        'phone' => 'required|min_length[9]|max_length[20]',
        'email' => 'required|valid_email',
        'bday' => 'required|min_length[10]|max_length[20]',
     ];






    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
