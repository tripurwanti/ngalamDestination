<?php
class m_data_wisata extends CI_Model{


	//OLAH DATA DATABASE DATA WISATA
	public function get_all_data_wisata(){
		$this->db->select('*');
		$this->db->from('data_wisata');
		return $this->db->get();
	}

	public function get_wisata_by_category($category){
		$this->db->where('category',$category);
		$this->db->select('*');
		$this->db->from('data_wisata');
		return $this->db->get();
	}

	public function get_detail_wisata($id_wisata){
		$this->db->where('id',$id_wisata);
		$this->db->select('*');
		$this->db->from('data_wisata');
		return $this->db->get();
	}

	public function get_wisata_search($search){
		$this->db->select('*');
		$this->db->from('data_wisata');
		$this->db->like('nama', $search);
		return $this->db->get();
	}

	public function insert_data_wisata($data){
		$this->db->insert('data_wisata', $data);
	}

	public function update_data_wisata($id, $data){
		$this->db->where('id', $id);
		$this->db->update('data_wisata', $data);
	}

	public function delete_data_wisata($id_wisata){
		$this->db->where('id', $id_wisata);
		$this->db->delete('data_wisata');
	}
	//END OLAH DATA DATABASE DATA WISATA



	//OLAH DATA DATABASE FOTO WISATA
	public function get_foto_wisata($id_wisata){
		$this->db->where('id',$id_wisata);
		$this->db->select('*');
		$this->db->from('foto_wisata');
		return $this->db->get();
	}

	public function insert_foto_wisata($data){
		$this->db->insert('foto_wisata', $data);
	}

	public function update_foto_wisata($id, $data){
		$this->db->where('id_foto', $id);
		$this->db->update('foto_wisata', $data);
	}

	public function delete_foto_wisata($id_wisata){
		$this->db->where('id_foto', $id_wisata);
		$this->db->delete('foto_wisata');
	}

	public function delete_foto_wisata_by_tempat($id_wisata){
		$this->db->where('id', $id_wisata);
		$this->db->delete('foto_wisata');
	}
	//END OLAH DATA DATABASE FOTO WISATA
	


	//OLAH DATA DATABASE HISTORY
	public function insert_history($data){
		$this->db->insert('history_user', $data);
	}

	public function get_data_wisata_history_by_user($id_user){
		$this->db->select('history_user.*, data_wisata.nama, data_wisata.foto_profil, data_wisata.category');
		$this->db->from('history_user');
		$this->db->join('data_wisata', 'history_user.id_data_wisata = data_wisata.id');
		$this->db->where('id_user',$id_user);
		return $this->db->get();
	}

	public function update_history($id, $data){
		$this->db->where('id_history', $id);
		$this->db->update('history_user', $data);
	}

	public function delete_history_by_tempat($id_wisata){
		$this->db->where('id_data_wisata', $id_wisata);
		$this->db->delete('history_user');
	}

	public function delete_history_by_user($id_user){
		$this->db->where('id_user', $id_user);
		$this->db->delete('history_user');
	}

	public function delete_history($id_history){
		$this->db->where('id_history', $id_history);
		$this->db->delete('history_user');
	}
	//END OLAH DATA DATABASE HISTORY
	

	
	//OLAH DATA DATABASE FAVOURITE
	public function insert_favorite($data){
		$this->db->insert('favorite_user', $data);
	}

	public function get_all_favorite_by_user($id_user){
		$this->db->where('id_user',$id_user);
		$this->db->select('*');
		$this->db->from('favorite_user');
		return $this->db->get();
	}

	public function get_data_wisata_favorite_by_user($id_user){
		$this->db->select('favorite_user.*, data_wisata.nama, data_wisata.foto_profil, data_wisata.category, data_wisata.description, data_wisata.address, data_wisata.htm');
		$this->db->from('favorite_user');
		$this->db->join('data_wisata', 'favorite_user.id_data_wisata = data_wisata.id');
		$this->db->where('id_user',$id_user);
		return $this->db->get();
	}

	public function delete_favorite($id_favorite){
		$this->db->where('id_favorite', $id_favorite);
		$this->db->delete('favorite_user');
	}

	public function update_favorite($id, $data){
		$this->db->where('id_favorite', $id);
		$this->db->update('favorite_user', $data);
	}

	public function delete_favorite_by_tempat($id_wisata){
		$this->db->where('id_data_wisata', $id_wisata);
		$this->db->delete('favorite_user');
	}

	public function delete_favorite_by_user($id_user){
		$this->db->where('id_user', $id_user);
		$this->db->delete('favorite_user');
	}
	//END OLAH DATA DATABASE FAVORITE



	//OLAH DATA DATABASE WISHLIST
	public function insert_wishlist($data){
		$this->db->insert('wishlist_user', $data);
	}

	public function get_data_wisata_wishlist_by_user($id_user){
		$this->db->select('wishlist_user.*, data_wisata.nama, data_wisata.foto_profil, data_wisata.category, data_wisata.description, data_wisata.address, data_wisata.htm');
		$this->db->from('wishlist_user');
		$this->db->join('data_wisata', 'wishlist_user.id_data_wisata = data_wisata.id');
		$this->db->where('id_user',$id_user);
		return $this->db->get();
	}

	public function delete_wishlist($id_wishlist){
		$this->db->where('id_wishlist', $id_wishlist);
		$this->db->delete('wishlist_user');
	}


	public function update_wishlist($id, $data){
		$this->db->where('id_wishlist', $id);
		$this->db->update('wishlist_user', $data);
	}

	public function delete_wishlist_by_tempat($id_wisata){
		$this->db->where('id_data_wisata', $id_wisata);
		$this->db->delete('wishlist_user');
	}

	public function delete_wishlist_by_user($id_user){
		$this->db->where('id_user', $id_user);
		$this->db->delete('wishlist_user');
	}
	//END OLAH DATA DATABASE HISTORY
}
?>