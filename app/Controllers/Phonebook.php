<?php namespace App\Controllers;

use App\Models\ContactsModel;

class Phonebook extends BaseController
{
	public function home()
	{
		if (logged_in()){
			return redirect()->to('/list');
		}
		else{
			return view('home_page');
		}
	}

	public function about()
	{
		if (logged_in()) {
			return redirect()->to('/list');
		} else {
			return view('about_us_page');	
		}
	}	
	
	public function list()
	{
		if (logged_in()){
			helper('form');
			$ContactsModel = new ContactsModel();
			$data = [
				'contacts' => $ContactsModel->where('user_id' , user_id())->findAll()
			];

			return view('list_page', $data);
		} else{
			return redirect()->to('/');	

		}
	}


	public function delete($id){
		$ContactsModel = new ContactsModel();
		if ($this->request->getMethod() == 'post') {
			$ContactsModel->delete($id);
		}
		return redirect()->to('/list');
	}

	public function new()
	{
		if (logged_in()) {
			$data = [];
			helper(['form']);
			if ($this->request->getMethod() == 'post') {
				$model = new ContactsModel();
				if ($model->save($_POST)) {
					return redirect()->to('/list');
				} else{
					$data['errors'] = $model->errors();
				}
			}
			return view('new_page', $data);
		}else{
			return redirect()->to('/');	
		}
	}
	


	public function edit($id)
	{
		if (logged_in()){
			helper('form');
			$ContactsModel = new ContactsModel();
			$data = [
				'contact' => $ContactsModel->find($id),
				'errors'  => []
			];

			if ($data['contact']['user_id'] !== user_id()){
				return redirect()->to('/list');
			}

			if ($this->request->getMethod() == 'post') {
				if ($ContactsModel->update($id, $_POST)) {
					return redirect()->to('/list');
				} else {
					$data['errors'] = $ContactsModel->errors();
				}
			}
			return view('edit_page', $data);
		} else{
			return redirect()->to('/');	

		}
	}


	public function show($id)
	{
		if (logged_in()){
			$ContactsModel = new ContactsModel();
			$data = [
				'contact' => $ContactsModel->find($id)
			];
				if ($data['contact']['user_id'] !== user_id()){
				return redirect()->to('/list');
			}
			return view('show_page',$data);
		} else{
			return redirect()->to('/');	
		}
	}



	

	

}