<?php namespace App\Controllers;

use CodeIgniter\Validation\Rules;

class AddUser extends BaseController
// {
// 	public function new()
// 	{
// 		$data = [];

// 		helper(['form']);

// 		if ($this->request->getMethod() == 'post'){
// 			$rules = [
// 				'name' => 'required|min_length[5]|max_length[20]',
// 				'phone_num' => 'required|min_length[9]|max_length[20]',
// 				'email' => 'required|min_length[10]|max_length[50]|valid_ email|is_unique[user.email]' ,
// 				'bday' => 'required|min_length[10]|max_length[20]', 
				
// 			];
// 			if (! $this->validate($rules)){
// 				$data['validation'] = $this->validator;
// 			}else{
// 				// go to data base
// 			}

// 		}


// 		return view('new_page');
// 	}

}