<?php
class User_model extends CI_Model {

    var $name = '';
    var $password = '';
    var $email = '';
    var $profile = '';

    function __construct()
    {
        parent::__construct();
    }
    
    function add_user()
    {
		$this->name = $_POST['name'];
        $this->password = $_POST['password'];
        $this->email = $_POST['email'];
        $this->profile = $_POST['profile'];
        
        $this->db->insert('users', $this);
	}
	
	function login_check()
	{
		$query = $this->db->get_where('users', array('name' => $_POST['name'], 'password' => $_POST['password']));
		return $query->row();
	}
}
?>
