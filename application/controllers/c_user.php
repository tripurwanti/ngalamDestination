<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class c_user extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_user');
		$this->load->model('m_data_wisata');
	}


	//OLAH DATA USER
	public function index(){
		$user = $this->session->userdata('username');
		if (isset($user)) {
			$this->show_profile_user();
		}
		else{
			redirect(base_url());
		}
	}

	public function login_user(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->m_user->get_all_user()->result();
		$ada = false;
		foreach ($user as $key) {
			if (($key->username == $username) && ($key->password == md5($password))) {
				$ada = true;
				$data_session = array(
					'username' => $username,
					'id' => $key->id,
					'jenis' => 'user'
				);
				$this->session->set_userdata($data_session);
			}
		}
		if ($ada) {
			redirect(site_url('c_user'));
		} else {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger">
				<h4>Maaf Username atau password anda salah</h4>
				</div>');    
			redirect(base_url());
		}		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function edit_user(){
		$data = array(
			'fullname' => $this->input->post('fullname'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
		$this->m_user->update_data_user($this->session->userdata('id'), $data);
		redirect(site_url('c_user'));
	}

	public function registrasi(){
		$data = array(
			'fullname' => $this->input->post('fullname'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
		$this->m_user->insert_data_user($data);
		redirect(site_url('c_web'));
	}

	public function aksi_upload(){
		$config['upload_path']          = './asset/css_web_user/images/profil/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			echo $this->upload->display_errors();
		}else{
			$data = $this->upload->data();
			$data_user = array(
				'foto_profil' => $data['file_name']
			);
			$this->m_user->update_data_user($this->session->userdata('id'), $data_user);
			redirect(site_url('c_user'));
		}
	}

	public function forget_pass(){
		$config = [
               'useragent' => 'CodeIgniter',
               'protocol'  => 'smtp',
               'mailpath'  => '/usr/sbin/sendmail',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'noreplytestmau@gmail.com',   // Ganti dengan email gmail Anda.
               'smtp_pass' => 'noreply@gmail',             // Password gmail Anda.
               'smtp_port' => 465,
               'smtp_keepalive' => TRUE,
               'smtp_crypto' => 'SSL',
               'wordwrap'  => TRUE,
               'wrapchars' => 80,
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'validate'  => TRUE,
               'crlf'      => "\r\n",
               'newline'   => "\r\n",
           ];
		$this->load->library('email', $config);
		$username = $this->input->post('username');
		$user = $this->m_user->get_all_user()->result();
		$ada = false;
		$email;
		$username;
		$pass;
		foreach ($user as $key) {
			if (($key->username == $username)) {
				$ada = true;
				$email = $key->email;
				$username = $key->username;
				$pass = $key->password;
			}
		}
		if ($ada) {
			$this->email->to('mrendra25@gmail.com');
			$this->email->from('noreplytestmau@gmail.com','Jurnalweb');
			$this->email->subject('Akun Anda');
			$this->email->message('Username anda : ' .$username .'<br />' .'Password : ' .$pass);
			$this->email->send();
			echo "string";
		} else {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger">
				<h4>Maaf Username tidak ada</h4>
				</div>');    
			redirect(base_url());
		}
	}
	//END OLAH DATA USER



	//OLAH DATA HISTORY WISATA USER
	public function add_history($id_wisata){
		$data = array(
			'id_user' => $this->session->userdata('id'),
			'id_data_wisata' => $id_wisata,
			'time_visit' => date('l d F Y')
		);
		$this->m_data_wisata->insert_history($data);
		redirect(site_url('c_user/show_history'));
	}

	public function show_history(){
		$user['data_akun'] = $this->m_user->get_data_user($this->session->userdata('id'))->row();
		$user['data_wisata_history'] = $this->m_data_wisata->get_data_wisata_history_by_user($this->session->userdata('id'))->result();
		$user['foto_profil'] = $user['data_akun']->foto_profil;
		if (($user['foto_profil']) == NULL) {
			$user['foto_profil'] = 'default_picture.png';
		}
		$this->load->view('views_User/history', $user);
	}

	public function delete_history($id_history){
		$this->m_data_wisata->delete_history($id_history);
		redirect(site_url('c_user/show_history'));
	}
	//END OLAH DATA HISTORY WISATA USER



	//OLAH DATA FAVORITE WISATA USER
	public function add_favorite($id_wisata){
		$favorite_wisata = $this->m_data_wisata->get_all_favorite_by_user($this->session->userdata('id'))->result();
		$visited = false;
		foreach ($favorite_wisata as $key) {
			if (($key->id_data_wisata == $id_wisata)) {
				$visited = true;
			}
		}
		if ($visited) {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger">
				<h4>Tempat wisata sudah ada di favorite anda</h4>
				</div>');    
			redirect(site_url('c_user'));
		} else {
			$data = array(
				'id_user' => $this->session->userdata('id'),
				'id_data_wisata' => $id_wisata
			);
			$this->m_data_wisata->insert_favorite($data);
			redirect(site_url('c_user'));
		}		
	}

	public function show_profile_user(){
		$user['data_akun'] = $this->m_user->get_data_user($this->session->userdata('id'))->row();
		$user['data_wisata_favorite'] = $this->m_data_wisata->get_data_wisata_favorite_by_user($this->session->userdata('id'))->result();
		$user['foto_profil'] = $user['data_akun']->foto_profil;
		if (($user['foto_profil']) == NULL) {
			$user['foto_profil'] = 'default_picture.png';
		}
		$this->load->view('views_User/profile', $user);
	}

	public function delete_favorite($id_favorite){
		$this->m_data_wisata->delete_favorite($id_favorite);
		redirect(site_url('c_user'));
	}
	//END OLAH DATA FAVORITE WISATA USER



	//OLAH DATA Wishlist WISATA USER
	public function show_wishlist(){
		$user['data_akun'] = $this->m_user->get_data_user($this->session->userdata('id'))->row();
		$user['data_wisata_wishlist'] = $this->m_data_wisata->get_data_wisata_wishlist_by_user($this->session->userdata('id'))->result();
		$user['foto_profil'] = $user['data_akun']->foto_profil;
		if (($user['foto_profil']) == NULL) {
			$user['foto_profil'] = 'default_picture.png';
		}
		$this->load->view('views_User/wishlist', $user);
	}

	public function add_wishlist($id_wisata){
		$wishlist_wisata = $this->m_data_wisata->get_data_wisata_wishlist_by_user($this->session->userdata('id'))->result();
		$visited = false;
		foreach ($wishlist_wisata as $key) {
			if (($key->id_data_wisata == $id_wisata)) {
				$visited = true;
			}
		}
		if ($visited) {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger">
				<h4>Tempat wisata sudah ada di wishlist anda, mohon hapus terlebih dahulu jika ingin menambahkan data yang baru</h4>
				</div>');  
			redirect(site_url('c_user/show_wishlist'));
		} else {
			$data = array(
				'id_user' => $this->session->userdata('id'),
				'id_data_wisata' => $id_wisata
			);
			$this->m_data_wisata->insert_wishlist($data);
			redirect(site_url('c_user/show_wishlist'));
		}	
	}

	public function delete_wishlist($id_wishlist){
		$this->m_data_wisata->delete_wishlist($id_wishlist);
		redirect(site_url('c_user/show_wishlist'));
	}
	//END OLAH DATA Wishlist WISATA USER
}

?>
