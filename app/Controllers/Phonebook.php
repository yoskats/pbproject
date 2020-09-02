<?php namespace App\Controllers;

class Phonebook extends BaseController
{
	public function index()
	{
		return view('list_page');
	}

	public function show($id)
	{
		return view('show_page', ['contact_id' => $id]);
	}

	public function new()
	{
		$data = [];
		
		helper('form');

		if ($this->request->getMethod() == 'post') {
			$rules = [
				'name' => 'required|min_length[5]|max_length[20]',
				'phone_num' => 'required|min_length[9]|max_length[20]',
				'email' => 'required|min_length[10]|max_length[50]|valid_email|is_unique[user.email]',
				'bday' => 'required|min_length[10]|max_length[20]',
			];
			
			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;

			} else {
				// return redirect()->route('Phonebook::new');
				return view('new_page');

			}
		}
		

		return view('new_page' , $data);
	}


	public function edit($id)
	{
		return view('edit_page', ['contact_id' => $id]);
	}
	
}