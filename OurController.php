<?php

class OurGroup {
	
	private $firstName;
	private $lastName;
	
	public function__construct($firstName, $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}
	
	public function show() {
	echo "Hello, {$this->firstName} {$this->lastName}";
	}
}