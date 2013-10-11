<?php
class Edit_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Entry_model');
		date_default_timezone_set("PRC");
	}
	
    function index($id)
    {
		$data['title'] = 'Writing in Group';
		$data['login_user'] = $this->session->userdata('username');
		$this->load->view('header', $data);
        
		$data['query'] = $this->Entry_model->get_entry($id);
        $this->load->view('editview', $data);
        $this->load->view('footer');
    }
    
    function insert()
    {	$flag = $this->Entry_model->add_check();
	if($flag == 0){
		$this->Entry_model->insert_entry();
		}
		elseif($flag == '1'){
		 echo "<script>alert('The deadline is befroe current time!');window.location.href='../add_controller/index/0';</script>";
		 }
		 elseif($flag == '2'){
		 echo "<script>alert('Please enter the Subject!');window.location.href='../add_controller/index/0';</script>";
		 }
		 else{
		 echo "<script>alert('Please enter the Body!');window.location.href='../add_controller/index/0';</script>";
		 }
	}
    
    function update()
    {
		$this->Entry_model->update_entry();
	}
}
?>
