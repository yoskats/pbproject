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

		echo view('templates/header',);
		echo view('templates/navbar');
		echo view('list_page', $data);
		echo view('templates/footer');
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
		echo view('templates/header',);
		echo view('templates/navbar');
		echo view('new_page', $data);
		echo view('templates/footer');
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
		echo view('templates/header',);
		echo view('templates/navbar');
		echo view('edit_page', $data);
		echo view('templates/footer');
	}

	public function show($id)
	{
		$ContactsModel = new ContactsModel();
		$data = [
			'contact' => $ContactsModel->find($id)
		];
		echo view('templates/header',);
		echo view('templates/navbar');
		echo view('show_page',$data);
		echo view('templates/footer');
	}

	public function login(){

		$data = [];
		echo view ('templates/header',);
		echo view ('templates/navbar');
		echo view ('login_page');
		echo view ('templates/footer');
	}
	
	public function register()
	{
		echo view('templates/header',);
		echo view('templates/navbar');
		echo view('register_page');
		echo view('templates/footer');
	}
	

	

}