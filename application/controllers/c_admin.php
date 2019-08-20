<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
/**
*
*/
class c_admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_user');
		$this->load->model('m_admin');
		$this->load->model('m_data_wisata');
		$this->load->model('m_comment');
	}

	public function index(){
		$this->load->view('views_Admin/home');
	}

	//OLAH DATA ADMIN
	public function login_admin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$admin = $this->m_admin->get_all_admin()->result();
		$ada = false;
		foreach ($admin as $key) {
			if (($key->username == $username) && ($key->password == md5($password))) {
				$ada = true;
				$data_session = array(
					'username' => $username,
					'id' => $key->id,
					'jenis' => 'admin'
				);
				$this->session->set_userdata($data_session);
			}
		}
		if ($ada) {
			redirect(site_url('c_admin/show_dashboard'));
		} else {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger">
				<h4>Maaf Username atau password anda salah</h4>
				</div>');    
			redirect(site_url('c_admin'));
		}	
	}

	public function show_dashboard(){
		$data['data_admin'] = $this->m_admin->get_data_admin($this->session->userdata('id'))->row();
		$this->load->view('views_Admin/dashboard', $data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('c_admin'));
	}

	public function show_all_admin(){
		$data['data_admin'] = $this->m_admin->get_data_admin($this->session->userdata('id'))->row();
		$data['data_all_admin'] = $this->m_admin->get_all_admin()->result();
		$this->load->view('views_Admin/data_admin', $data);
	}

	public function show_add_admin(){
		$data['data_admin'] = $this->m_admin->get_data_admin($this->session->userdata('id'))->row();
		$this->load->view('views_Admin/tambah_admin', $data);
	}

	public function show_edit_admin(){
		$data['data_admin'] = $this->m_admin->get_data_admin($this->session->userdata('id'))->row();
		$this->load->view('views_Admin/edit_admin', $data);
	}

	public function add_admin(){
		$data = array(
			'fullname' => $this->input->post('fullname'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$this->m_admin->insert_data_admin($data);
		redirect(site_url('c_admin/show_all_admin'));
	}

	public function delete_admin($id_admin){
		$this->m_admin->delete_data_admin($id_admin);
		redirect(site_url('c_admin/show_all_admin'));
	}

	public function edit_admin(){
		$data = array(
			'fullname' => $this->input->post('fullname'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$this->m_admin->update_data_admin($this->session->userdata('id'), $data);
		redirect(site_url('c_admin/show_dashboard'));
	}

	public function upload_foto_admin(){
		$config['upload_path']          = './asset/css_admin/images_admin/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('upload_file')){
			$error = array('error' => $this->upload->display_errors());
			echo $this->upload->display_errors();
		}else{
			$data = $this->upload->data();
			$data_user = array(
				'foto_profil' => $data['file_name']
			);
			$this->m_admin->update_data_admin($this->session->userdata('id'), $data_user);
			redirect(site_url('c_admin/show_dashboard'));
		}
	}
	//END OLAH DATA ADMIN



	//OLAH DATA USER
	public function show_all_user(){
		$data['data_admin'] = $this->m_admin->get_data_admin($this->session->userdata('id'))->row();
		$data['data_user'] = $this->m_user->get_all_user()->result();
		$this->load->view('views_Admin/data_user', $data);
	}

	public function show_edit_user($id_user){
		$data['data_admin'] = $this->m_admin->get_data_admin($this->session->userdata('id'))->row();
		$data['data_user'] = $this->m_user->get_data_user($id_user)->row();
		$this->load->view('views_Admin/edit_user', $data);
	}

	public function show_add_user(){
		$data['data_admin'] = $this->m_admin->get_data_admin($this->session->userdata('id'))->row();
		$this->load->view('views_Admin/tambah_user', $data);
	}

	public function add_user(){
		$data = array(
			'fullname' => $this->input->post('fullname'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
		$this->m_user->insert_data_user($data);
		redirect(site_url('c_admin/show_all_user'));
	}

	public function delete_user($id_user){
		$this->m_data_wisata->delete_history_by_user($id_user);
		$this->m_data_wisata->delete_favorite_by_user($id_user);
		$this->m_data_wisata->delete_wishlist_by_user($id_user);
		$this->m_comment->delete_comment_by_user($id_user);
		$this->m_user->delete_data_user($id_user);
		redirect(site_url('c_admin/show_all_user'));
	}

	public function edit_user($id_user){
		$data = array(
			'fullname' => $this->input->post('fullname'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
		$this->m_user->update_data_user($id_user, $data);
		redirect(site_url('c_admin/show_all_user'));
	}

	public function upload_foto_user($id_user){
		$config['upload_path']          = './asset/css_web_user/images/profil/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('upload_file')){
			$error = array('error' => $this->upload->display_errors());
			echo $this->upload->display_errors();
		}else{
			$data = $this->upload->data();
			$data_user = array(
				'foto_profil' => $data['file_name']
			);
			$this->m_user->update_data_user($id_user, $data_user);
			redirect(site_url('c_admin/show_all_user'));
		}
	}
	//END OLAH DATA USER



	//OLAH DATA WISATA
	public function show_all_wisata(){
		$data['data_admin'] = $this->m_admin->get_data_admin($this->session->userdata('id'))->row();
		$data['data_wisata'] = $this->m_data_wisata->get_all_data_wisata()->result();
		$this->load->view('views_Admin/data_wisata', $data);
	}

	public function show_grafik_wisata(){
		$data['data_admin'] = $this->m_admin->get_data_admin($this->session->userdata('id'))->row();
		$data['data_wisata'] = $this->m_data_wisata->get_all_data_wisata()->result();
		$category = array();
		$htm = array();
		foreach ($data['data_wisata'] as $key) {
			$category[] = $key->nama;
			$htm[] = intval($key->htm);
		}
		$data['category'] = json_encode($category);
		$data['htm'] = json_encode($htm);
		$this->load->view('views_Admin/grafik_wisata', $data);
	}

	public function show_realtime_grafik_wisata(){
		$data['data_wisata'] = $this->m_data_wisata->get_all_data_wisata()->result();
		$category = array();
		$htm = array();
		foreach ($data['data_wisata'] as $key) {
			$category[] = $key->nama;
			$htm[] = intval($key->htm);
		}
		$data['category'] = json_encode($category);
		$data['htm'] = json_encode($htm);
		date_default_timezone_set('Asia/Jakarta');
		$data['last_update'] = date('d F Y H:i:s a');
		$this->load->view('views_Admin/realtime_grafik', $data);
	}

	public function show_add_wisata(){
		$data['data_admin'] = $this->m_admin->get_data_admin($this->session->userdata('id'))->row();
		$this->load->view('views_Admin/tambah_wisata', $data);
	}

	public function add_wisata(){
		$data = array(
			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'description' => $this->input->post('description'),
			'nomor_telp' => $this->input->post('nomor_telp'),
			'htm' => $this->input->post('htm'),
			'address' => $this->input->post('address'),
			'category' => $this->input->post('category'),
			'jam_operasional' => $this->input->post('jam_operasional'),
			'location' => $this->input->post('location'),
			'last_update' => date('d F Y')
		);
		$this->m_data_wisata->insert_data_wisata($data);
		redirect(site_url('c_admin/show_all_wisata'));
	}

	public function delete_wisata($id_wisata){
		$this->m_data_wisata->delete_history_by_tempat($id_wisata);
		$this->m_data_wisata->delete_favorite_by_tempat($id_wisata);
		$this->m_data_wisata->delete_wishlist_by_tempat($id_wisata);
		$this->m_data_wisata->delete_foto_wisata_by_tempat($id_wisata);
		$this->m_comment->delete_comment_by_tempat($id_wisata);
		$this->m_data_wisata->delete_data_wisata($id_wisata);
		redirect(site_url('c_admin/show_all_wisata'));
	}

	public function edit_wisata($id_wisata){
		$data = array(
			'nama' => $this->input->post('nama'),
			'description' => $this->input->post('description'),
			'nomor_telp' => $this->input->post('nomor_telp'),
			'htm' => $this->input->post('htm'),
			'address' => $this->input->post('address'),
			'category' => $this->input->post('category'),
			'jam_operasional' => $this->input->post('jam_operasional'),
			'location' => $this->input->post('location'),
			'last_update' => date('d F Y')
		);
		$this->m_data_wisata->update_data_wisata($id_wisata, $data);
		redirect(site_url('c_admin/show_all_wisata'));
	}

	public function show_edit_wisata($id_wisata){
		$data['data_admin'] = $this->m_admin->get_data_admin($this->session->userdata('id'))->row();
		$data['data_wisata'] = $this->m_data_wisata->get_detail_wisata($id_wisata)->row();
		$this->load->view('views_Admin/edit_wisata', $data);
	}

	public function upload_foto_profil_wisata($id_wisata, $category){
		$config['upload_path']          = './asset/css_web_user/images/tourism/' .$category .'/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('upload_file')){
			$error = array('error' => $this->upload->display_errors());
			echo $this->upload->display_errors();
		}else{
			$data = $this->upload->data();
			$data_user = array(
				'foto_profil' => $data['file_name']
			);
			$this->m_data_wisata->update_data_wisata($id_wisata, $data_user);
			redirect(site_url('c_admin/show_all_wisata'));
		}
	}

	public function upload_foto_wisata($id_wisata, $category){
		$config['upload_path']          = './asset/css_web_user/images/tourism/' .$category .'/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('upload_file')){
			$error = array('error' => $this->upload->display_errors());
			echo $this->upload->display_errors();
		}else{
			$data = $this->upload->data();
			$data_user = array(
				'foto' => $data['file_name'],
				'id' => $id_wisata
			);
			$this->m_data_wisata->insert_foto_wisata($data_user);
			redirect(site_url('c_admin/show_all_wisata'));
		}
	}
	//END OLAH DATA WISATA



}
?>
