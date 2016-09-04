<?php
class Messageboard extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('msg_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['msg'] = $this->msg_model->get_news();
		$data['title'] = 'News archive';
		$this->load->view('messageboard_message');
    }

    public function view($id = NULL)
    {
        $data['msg_item'] = $this->msg_model->get_msg($id);
		if (empty($data['msg_item']))
    {
			show_404();
    }

		$data['title'] = $data['msg_item']['title'];
		$this->load->view('messageboard_message');

    }
}
