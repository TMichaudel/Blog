<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	ini_set('display_errors', true);
	
	class User
	{
		private $_IDuser;
		private $_login;
		private $_password;
		private $_name;
		private $_firstName;
		private $_status;
		
		public function __construct ($IDuser, $login, $password, $name, $firstName, $status)
		{
			$this->_IDuser = $IDuser;
			$this->_login = $login;
			$this->_password = $password;
			$this->_name = $name;
			$this->_firstName = $firstName;
			$this->_status = $status;
		}
		
		public function getIDuser ()
		{
			return $this->_IDuser;
		}
		
		public function setIDuser ($IDuser)
		{
			$this->_IDuser = $IDuser;
		}
		
		public function getLogin ()
		{
			return $this->_login;
		}
		
		public function setLogin ($login)
		{
			$this->_login = $login;
		}
		
		public function getPassword ()
		{
			return $this->_password;
		}
		
		public function setPassword ($password)
		{
			$this->_password = $password;
		}
		
		public function getName ()
		{
			return $this->_name;
		}
		
		public function setName ($name)
		{
			$this->_name = $name;
		}
		
		public function getFirstName ()
		{
			return $this->_firstName;
		}
		
		public function setFirstName ($firstName)
		{
			$this->_firstName = $firstName;
		}
		
		public function getStatus ()
		{
			return $this->_status;
		}
		
		public function setStatus ($status)
		{
			$this->_status = $status;
		}
	}	
?>
