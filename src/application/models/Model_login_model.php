<?php
	class Model_msg_model extends CI_Model {
		public function __construct()
    {
			$this->load->database();
    }
		public function get_name()
	{
			$Username=$this->input->post('Username');
			$Password=$this->input->post('Password');
			$query = $this->db->query('SELECT Username Password  FROM User');
			$row = $query->row();
			echo $row->Username;
			echo $row->Password;
	if($row('Usersname')=='$Username' and $row('Parsword')=='$Parsword') {
		echo "log in success ";
		echo "<a href='/messageboard/src/application/views/messageboard_message.php'>login</a>";
	}else{
		echo "Username is wrong or Password is worng ";
		echo "<a href='/messageboard/src/application/views/login_message.php'>return</a>";
	}
	}
}
?>