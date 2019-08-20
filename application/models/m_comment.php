<?php
class m_comment extends CI_Model{


	//OLAH DATA DATABASE COMMENT
	public function get_all_comment(){
		$this->db->select('*');
		$this->db->from('comment');
		return $this->db->get();
	}

	public function get_comment_by_user($id_user){
		$this->db->where('id_user',$id_user);
		$this->db->select('*');
		$this->db->from('comment');
		return $this->db->get();
	}

	public function get_comment_by_wisata($id_wisata){
		$this->db->select('comment.*, user.username');
		$this->db->from('comment');
		$this->db->join('user', 'comment.id_user = user.id');
		$this->db->where('id_data_wisata',$id_wisata);
		return $this->db->get();
	}

	public function get_comment_by_id($id_comment){
		$this->db->where('id',$id_comment);
		$this->db->select('*');
		$this->db->from('comment');
		return $this->db->get();
	}

	public function insert_comment($data){
		$this->db->insert('comment', $data);
	}

	public function update_comment($id_comment, $data){
		$this->db->where('id', $id_comment);
		$this->db->update('comment', $data);
	}

	public function delete_comment($id_comment){
		$this->db->where('id', $id_comment);
		$this->db->delete('comment');
	}

	public function delete_comment_by_tempat($id_wisata){
		$this->db->where('id_data_wisata', $id_wisata);
		$this->db->delete('comment');
	}

	public function delete_comment_by_user($id_user){
		$this->db->where('id_user', $id_user);
		$this->db->delete('comment');
	}
	//END OLAH DATA DATABASE COMMENT
}
?>