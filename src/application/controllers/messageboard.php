<?php
class Messageboard extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_msg_model');
    }
    public function index()
    {
        $data['msg'] = $this->Model_msg_model->get_msg();
		$this->load->view('messageboard_message',$data);
    }
}
