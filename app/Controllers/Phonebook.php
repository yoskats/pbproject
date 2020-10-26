<?php namespace App\Controllers;


// use App\Config\Email;

use App\Models\ContactsModel;

class Phonebook extends BaseController
{
	public function index()
	{
		helper('form');
		$ContactsModel = new ContactsModel();
		$data = [
			'contacts' => $ContactsModel->findAll()
		];
		// if ($this->request->getMethod() == 'post') {
		// 	$ContactsModel->delete($id);
		// }
		
		// die(var_dump($contacts));

		return view('list_page', $data);
	}
	public function delete($id){
		$ContactsModel = new ContactsModel();
		if ($this->request->getMethod() == 'post') {
			$ContactsModel->delete($id);
		}
		return redirect()->to('/phonebook/index');
	}

	public function new()
	{
		$data = [];
		helper(['form']);
		if ($this->request->getMethod() == 'post') {
			$model = new ContactsModel();
			if ($model->save($_POST)) {
				return redirect()->to('/phonebook/index');
			} else{
				$data['errors'] = $model->errors();
			}
		}
		return view('new_page' , $data);
	}
	


	public function edit($id)
	{
		helper('form');
		$ContactsModel = new ContactsModel();
		$data = [
			'contact' => $ContactsModel->find($id),
			'errors'  => []
		];
		if ($this->request->getMethod() == 'post') {
			if ($ContactsModel->update($id, $_POST)) {
				return redirect()->to('/phonebook/index');
			} else {
				$data['errors'] = $ContactsModel->errors();
			}
		}
		return view('edit_page', $data);
	}

	public function show($id)
	{
		$ContactsModel = new ContactsModel();
		$data = [
			'contact' => $ContactsModel->find($id)
		];
		return view('show_page', $data);
	}

	public function login(){
		return view('login_page');
	}
	
	public function register()
	{
		return view('register_page');
	}
	

	

}