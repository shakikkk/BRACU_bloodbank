<?php
	namespace App\Models;
	class User
	{
		public $first_name;
		public $last_name;

		public function setFirstName($firstName)
		{
			$this->first_name = trim($firstName);
		}
		public function setLastName($lastName)
		{
			$this->last_name = trim($lastName);
		}
		public function getFirstName()
		{
		return $this->first_name;
		}
		public function getLastName()
		{
		return $this->last_name;
		}
		}
