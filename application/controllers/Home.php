<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	private $email_admin = array('riyan@undiksha.ac.id', 'vina.velina@undiksha.ac.id');

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function getEmail()
	{
		return $this->email_admin;
	}
	public function index()
	{
		$this->data['title'] = "Beranda";
		$this->data['header'] = 1;
		// Loading views
		$this->load->view('master/header', $this->data);
		$this->load->view('page/index', $this->data);
		$this->load->view('master/footer', $this->data);
	}
	public function daftar_buku()
	{
		$this->data['title'] = "Daftar Buku";
		$this->data['header'] = 2;
		// Loading views
		$this->load->view('master/header', $this->data);
		$this->load->view('page/daftar_buku', $this->data);
		$this->load->view('master/footer', $this->data);
	}
	public function layanan_konseling()
	{
		$this->data['title'] = "Layanan Konseling";
		$this->data['header'] = 2;
		$this->load->view('master/header', $this->data);
		$this->load->view('page/layanan_konseling', $this->data);
		$this->load->view('master/footer', $this->data);
	}
	public function layanan_belajar()
	{
		$this->data['title'] = "Layanan Belajar";
		$this->data['header'] = 2;
		$this->load->view('master/header', $this->data);
		$this->load->view('page/layanan_belajar', $this->data);
		$this->load->view('master/footer', $this->data);
	}
	public function kontak()
	{
		$this->data['title'] = "Kontak";
		$this->data['header'] = 3;
		// Rules/aturan form validation
		$this->form_validation->set_rules('name', 'Nama Wajib Diisi', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Wajib Diisi', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject Wajib Diisi', 'trim|required');
		$this->form_validation->set_rules('message', 'Pesan Wajib Diisi', 'trim|required|max_length[200]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('master/header', $this->data);
			$this->load->view('page/kontak', $this->data);
			$this->load->view('master/footer', $this->data);
		} else {
			if (!empty($_POST)) {

				// Konfigurasi Send Email
				$config = [
					'protocol'  => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_user' => 'ganatech.id@gmail.com',
					'smtp_pass' => '-ganatech2020-',
					'smtp_port' => 465,
					'mailtype'  => 'html',
					'charset'   => 'utf-8',
					'crlf' 		=> "\r\n",
					'newline' 	=> "\r\n"
				];
				// Load library email dan konfigurasinya
				$this->load->library('email', $config);

				// Send Email
				$this->load->library('encrypt');
				$this->email->clear();
				$this->email->from($_POST['email'], "Dari [ " . $_POST['name'] . " ]");
				$this->email->to($this->getEmail());
				$this->email->subject($_POST['subject'] . '- Help Desk Toko Kamu');
				$this->email->message($_POST['message']);
				$this->email->set_newline("\r\n");
				if ($this->email->send()) {
					$this->session->set_flashdata('berhasil', 'Email Berhasil Dikirimkan');
					redirect('home/kontak', 'refresh');
				} else {
					// echo $this->email->print_debugger();
					$this->session->set_flashdata('gagal', '500 - Internal Server Error');
					redirect('home/kontak', 'refresh');
				}
			} else {
				echo "Gagal";
			}
		}
	}
}