<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php
class Register extends CI_Controller {
	public function index()
	{
		$this->load->view('register_message');
	
	}
}