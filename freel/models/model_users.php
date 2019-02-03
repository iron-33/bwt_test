<?php

Class Model_Users Extends Model_Base {
	
	public $id;
	public $name;
	public $password;
	public $email;
	
	public function fieldsTable(){
		return array(
			'id' => 'Id',
			'name' => 'name',
			'password' => 'password',
			'email' => 'email'
		);
	}
	
}