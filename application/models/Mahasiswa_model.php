<?php
 // MUHAMMAD DAFA PRIMA AJI 1301174161

class Mahasiswa_model extends CI_model
{

	public function getAllMahasiswa()
	{
		//use query builder to get data table "mahasiswa"
		$data = $this->db->get("mahasiswa");
		return $data->result_array();
	}

	public function tambahDataMahasiswa()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert('mahasiswa',$data);
	}

	public function hapusDataMahasiswa($id)
	{
		//use query builder to delete data based on id 
		$this->db->where(array ('id'=> $id));
		$this->db->delete('mahasiswa');
	}

	public function getMahasiswaById($id)
	{
		//get data mahasiswa based on id 
		$data = $this->db->select('*')->from('mahasiswa')->where('id',$id)->get();
		return $data->row_array();
	}

	public function ubahDataMahasiswa($id)
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];
		//use query builder class to update data mahasiswa based on id
		$this->db->where('id',$id);
		$this->db->update('mahasiswa',$data);
	}

	public function cariDataMahasiswa()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
        $data = $this->db->like('nama', $keyword)
                ->or_like('jurusan', $keyword)
                ->or_like('nim', $keyword)
                ->or_like('email', $keyword)
                ->get('mahasiswa');

		return $data->result_array();
		
		//return data mahasiswa that has been searched
	}
}
