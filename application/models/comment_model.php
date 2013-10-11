<?php
class Comment_model extends CI_Model {

    var $id = '';
    var $eid = '';
    var $uname = '';
    var $body = '';
    var $time = '';

    function __construct()
    {
        parent::__construct();
    }
    
	function get_comment($eid)
    {
		$query = $this->db->get_where('comments', array('eid' => $eid));
		return $query->result();
	}

    function insert_comment()
    {
        $this->eid = $_POST['eid'];
        $this->uname = $this->session->userdata('username');
        $this->body = $_POST['body'];
        $this->time = date("Y-m-d H:i:s",time());

        $this->db->insert('comments', $this);
        redirect('one_controller/index/'.$_POST['eid']);
    }
	function  drop_comment($eid,$id){
	    $sql = "DELETE FROM comments WHERE eid = " . $eid . " and  id = " . $id . " ;";
		$result = mysql_query($sql);
		 redirect('one_controller/index/'.$eid);

	  }
}
?>
