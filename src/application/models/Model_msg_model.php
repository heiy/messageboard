<?php
	class Model_msg_model extends CI_Model {
		public function __construct()
    {
			$this->load->database();
    }
	
		public function get_msg($id=FALSE)
	{
			if ($id === FALSE)
    {
				$query = $this->db->get('msg');
				return $query->result_array();
    }

			$query = $this->db->get_where('msg', array('id' => $id));
			return $query->row_array();
	}
}
?>

