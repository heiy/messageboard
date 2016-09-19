<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php
class Judge extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login_model');
    }

	public function index()
	{
		$data['login']=$this->Model_login_model->get_name();
		$this->load->view('login_message',$data);

	}
}
?>
