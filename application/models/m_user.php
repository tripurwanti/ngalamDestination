<?php  ?>
<?php
class m_user extends CI_Model{

	function get_all_user(){
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get();
	}

	function get_data_user($id){
		$this->db->where('id',$id);
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get();
	}

	function insert_data_user($data){
		$this->db->insert('user', $data);
	}

	function update_data_user($id, $data){
		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	function delete_data_user($id){
		$this->db->where('id', $id);
		$this->db->delete('user');
	}
}
?>