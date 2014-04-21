<?php

class Contacts_Model extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function get_contacts(){
		return $this->_db->select("SELECT * FROM ".PREFIX."contacts ORDER BY id");
	}

	public function get_contact($id){
		return $this->_db->select("SELECT * FROM ".PREFIX."contacts WHERE id =:id",array(':id' => $id));
	}

	public function insert($data){
		$this->_db->insert(PREFIX."contacts",$data);
	}

	public function update($data,$where){
		$this->_db->update(PREFIX."contacts",$data,$where);
	}

	public function delete($id){
		$this->_db->delete(PREFIX."contacts", array('id' => $id));
	}
}