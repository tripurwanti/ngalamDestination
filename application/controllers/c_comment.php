<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class c_comment extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_comment');
	}


	//OLAH DATA COMMENT
	public function add_comment($id_wisata){
		$data = array(
			'id_user' => $this->session->userdata('id'),
			'id_data_wisata' => $id_wisata,
			'comment' => $this->input->post('message')
		);
		$this->m_comment->insert_comment($data);
		redirect(site_url('c_web/show_description/' .$id_wisata));
	}
	//END OLAH DATA COMMENT
}

?>
