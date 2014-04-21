<?php

class Contacts extends Controller {

	private $_contacts;

	public function __construct(){
		parent::__construct();

		$this->_contacts = $this->loadModel('contacts_model');

		if(Session::get('loggin') == false){
			url::redirect('admin/login');
		}
	}	

	public function contacts(){

		$data['title'] = 'Contacts';
		$data['contacts'] = $this->_contacts->get_contacts();

		$this->view->rendertemplate('header',$data);
		$this->view->render('contacts/contacts',$data);
		$this->view->rendertemplate('footer',$data);	
	}

	public function add(){

		if(isset($_POST['submit'])){

			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];

			if(empty($firstName)){
				$error[] = 'Please enter the first name';
			}

			if(empty($lastName)){
				$error[] = 'Please enter the last name';
			}

			if(!isset($error)){

				$postdata = array(
					'firstName' => $firstName,
					'lastName' => $lastName
				);
				$this->_contacts->insert($postdata);
				Url::redirect('contacts');

			}
		}

		$data['title'] = 'Add Conntact';

		$this->view->rendertemplate('header',$data);
		$this->view->render('contacts/add',$data,$error);
		$this->view->rendertemplate('footer',$data);	
	}

	function edit($id){

		if(isset($_POST['submit'])){

			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];

			if(empty($firstName)){
				$error[] = 'Please enter the first name';
			}

			if(empty($lastName)){
				$error[] = 'Please enter the last name';
			}

			if(!isset($error)){

				$postdata = array(
					'firstName' => $firstName,
					'lastName' => $lastName
				);
				$where = array('id' => $id);
				$this->_contacts->update($postdata, $where);
				Url::redirect('contacts');

			}
		}

		$data['title'] = 'Edit';
		$data['row'] = $this->_contacts->get_contact($id);

		$this->view->rendertemplate('header',$data);
		$this->view->render('contacts/edit',$data,$error);
		$this->view->rendertemplate('footer',$data);	
	}

	function delete($id){

		$this->_contacts->delete($id);
		Url::redirect('contacts');

	}

}