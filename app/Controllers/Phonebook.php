<?php namespace App\Controllers;

use App\Models\ContactsModel;

class Phonebook extends BaseController
{
	public function index()

	{
		$db = db_connect();
		$contact = new ContactsModel($db);
		$contact =[
			'name' => '',
			'phone'    => '', 
			'email' => '',
			'bday'    => ''

		];


		return view('list_page', $contact);
	}











	
	public function show($id)
	{
		return view('show_page', ['contact_id' => $id]);
	}

	public function new()
	{
		$data = [

		];
		



		helper(['form']);

		// if($_POST){
		// 	echo '<pre>';
		// 	 print_r($_POST);
		// 	echo '<pre>';
 
		// }






		if ($this->request->getMethod() == 'post') {

			$model = new ContactsModel();

			if ($model->save($_POST)) {

				return redirect()->to('/phonebook/index');

			} else{
				$data['errors'] = $model->errors();
			}
			
			





			
			// $rules = [
			// 	'name' => 'required|min_length[5]|max_length[20]',
			// 	'phone' => 'required|min_length[9]|max_length[20]',
			// 	'email' => 'required|valid_email',
			// 	'bday' => 'required|min_length[10]|max_length[20]',
			// ];
			
			// if ($this->validate($rules)) {
			// 	// if the validtion is past then go to database insertion

			// 	$model = new ContactsModel();
			// 	$model->save($_POST);

			// 	return redirect()->to('/phonebook/index');



			// 	// $data['validation'] = $this->validator;

			// } else {
			// 	 $data['validation'] = $this->validator;

				 
			// 	// return redirect()->route('Phonebook::new');
			// }
			
			
		}
		

		return view('new_page' , $data);
	}
	
	function success()
	{
		return 'the form validation past successfully';
	}


	public function edit($id)
	{
		return view('edit_page', ['contact_id' => $id]);
	}
	
}