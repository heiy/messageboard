<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php
class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login_message');
	}
}
?>
