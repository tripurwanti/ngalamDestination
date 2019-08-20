<?php  ?>
<?php
class m_admin extends CI_Model{

	function get_all_admin(){
		$this->db->select('*');
		$this->db->from('admin');
		return $this->db->get();
	}

	function get_data_admin($id){
		$this->db->where('id',$id);
		$this->db->select('*');
		$this->db->from('admin');
		return $this->db->get();
	}

	function insert_data_admin($data){
		$this->db->insert('admin', $data);
	}

	function update_data_admin($id, $data){
		$this->db->where('id', $id);
		$this->db->update('admin', $data);
	}

	function delete_data_admin($id){
		$this->db->where('id', $id);
		$this->db->delete('admin');
	}
}
?>