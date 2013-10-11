<?php
class Rollback_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
    function index($id)
    {
		$sql = "DELETE FROM version_ctrl WHERE entry_id = " . $id . " ORDER BY version_id DESC LIMIT 1;";
		$result = mysql_query($sql);
		redirect('one_controller/index/' . $id);
    }
}
?>