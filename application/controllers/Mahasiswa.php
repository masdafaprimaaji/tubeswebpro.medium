<?php
 // MUHAMMAD DAFA PRIMA AJI 1301174161

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		$this->load->model('Mahasiswa_model');
		//load library form validation
		$this->load->library('Form_validation');
	}

	public function index()
	{

		$data['judul'] = 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$data['judul'] = 'Form Tambah Data Mahasiswa';

		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nim','NIM','required');
		$this->form_validation->set_rules('email','Email','required');



		//conditon in form_validation, if user input form = false, then load page "tambah" again
		if($this->form_validation->run() == FALSE){
			$this->load->view('mahasiswa/tambah');
		}
		//else, when successed {
		else {
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash','added success');
			redirect('mahasiswa');
		}
		//call method "tambahDataMahasiswa" in Mahasiswa_model
		//use flashdata to to show alert "added success"
		//back to controller mahasiswa }
	}

	public function hapus($id)
	{
		//call method hapusDataMahasiswa with parameter id from mahasiswa_model
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('mahasiswa');
		//use flashdata to show alert "dihapus"
		//back to controller mahasiswa

	}


	public function ubah($id)
	
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$data['judul'] = 'Form Ubah Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Elektro', 'DKV', 'MBTI'];

		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');


		//conditon in form_validation, if user input form = false, then load page "ubah" again
		if ($this->form_validation->run() == FALSE) { 
			$this->load->view('mahasiswa/ubah', $data); 
		} 

		//else, when successed {
		else {  
			$this->Mahasiswa_model->ubahDataMahasiswa($id);
			$this->session->set_flashdata('flash', 'data changed successfully');
			redirect('mahasiswa');
		}
		//call method "ubahDataMahasiswa" in Mahasiswa_model
		//use flashdata to to show alert "data changed successfully"
		//back to controller mahasiswa }
	}
}
