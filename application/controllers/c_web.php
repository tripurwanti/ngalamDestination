<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
class c_web extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_data_wisata');
		$this->load->model('m_comment');
	}
	
	public function index(){
		$this->show_home();
	}

	public function show_home(){
		$this->load->view('views_Web/index');
	}

	public function show_category($category){
		$data['data_wisata_by_category'] = $this->m_data_wisata->get_wisata_by_category($category)->result();
		$data['category'] = $category;
		if ($category == "Natural") {
			$data['icon'] = "1pegunungan.png";
		}elseif ($category == "Waterpark") {
			$data['icon'] = "3waterpark.png";
		}elseif ($category == "Recreation") {
			$data['icon'] = "4tamanrekreasi.png";
		}
		$this->load->view('views_Web/category', $data);
	}

	public function show_description($id_tempat_wisata){
		$data['data_wisata_detail'] = $this->m_data_wisata->get_detail_wisata($id_tempat_wisata)->row();
		$data['data_wisata_detail_foto'] = $this->m_data_wisata->get_foto_wisata($id_tempat_wisata)->result();
		$data['data_comment'] = $this->m_comment->get_comment_by_wisata($id_tempat_wisata)->result();
		$data['counter'] = 0;
		$this->load->view('views_Web/description', $data);
	}

	public function show_search(){
		$search = $this->input->post('search');
		$data['data_wisata_search'] = $this->m_data_wisata->get_wisata_search($search)->result();
		$data['keywords'] = $search;
		$this->load->view('views_Web/search', $data);
	}

	public function show_destination(){
		$data['data_wisata'] = $this->m_data_wisata->get_all_data_wisata()->result();
		$data['counter'] = 0;
		$this->load->view('views_Web/destination', $data);
	}

	public function show_gallery($id_tempat_wisata){
		$data['data_wisata_detail'] = $this->m_data_wisata->get_detail_wisata($id_tempat_wisata)->row();
		$data['data_wisata_detail_foto'] = $this->m_data_wisata->get_foto_wisata($id_tempat_wisata)->result();
		$this->load->view('views_Web/gallery', $data);
	}

	public function show_about(){
		$this->load->view('views_Web/about');
	}

	public function show_username_verif(){
		$this->load->view('views_Web/verifikasi_username');
	}
}
?>
