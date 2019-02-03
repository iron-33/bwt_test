<?php

Class Model_Feedback Extends Model_Base {
	
	public $id;
	public $name;
	public $message;
	public $email;
	
	public function fieldsTable(){
		return array(
			'id' => 'Id',
			'name' => 'name',
			'message' => 'message',
			'email' => 'email'
		);
	}
	
}