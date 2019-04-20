<?php
class Medium_model extends CI_model
{

	public function tambahDataPengguna()
	{
		$data = [
			"id_user" => $this->input->post('id_user', true),
			"fullname" => $this->input->post('fullname', true),
			"bio" => $this->input->post('bio', true),
			"photo" => $this->input->post('photo', true),
			"join_date" => $this->input->post('join_date', true),
			"following" => $this->input->post('following', true),
			"followers" => $this->input->post('followers', true),
		];

		//use query builder to insert $data to table "users"
		$this->db->insert('users',$data);
	}

	public function hapusDataPengguna($id_user)
	{
		//use query builder to delete data based on id 
		$this->db->where(array ('id_user'=> $id_user));
		$this->db->delete('users');
	}

	public function getPenggunaById($id_user)
	{
		//get data users based on id 
		$data = $this->db->select('*')->from('users')->where('id_user',$id_user)->get();
		return $data->row_array();
	}

	public function ubahDataPengguna($id_user)
	{
		$data = [
			"bio" => $this->input->post('bio', true),
			"photo" => $this->input->post('photo', true),
			"fullname" => $this->input->post('fullname', true),
		];
		//use query builder class to update data users based on id
		$this->db->where('id_user',$id_user);
		$this->db->update('users',$data);
	}

	public function cariDataPengguna()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data users based on keyword "id_user" 
        $data = $this->db->like('id_user', $keyword)
                ->get('users');

		return $data->result_array();
		//return data users that has been searched
	}

	public function tambahDataPost($id_user)
	{
		$data = [
			"id_post" => $this->input->post('id_post', true),
			"title" => $this->input->post('title', true),
			"content" => $this->input->post('content', true),
			"catagory" => $this->input->post('catagory', true),
			"date" => $this->input->post('date', true),
			"tagline" => $this->input->post('tagline', true),
			"photo" => $this->input->post('photo', true),
			"read_time" => $this->input->post('read_time', true),
		];

		//use query builder to insert $data to table "post"
		$this->db->where('id_user',$id_user);
		$this->db->insert('post',$data);
	}

	public function ubahDataPost($id_post)
	{
		$data = [
			"title" => $this->input->post('title', true),
			"content" => $this->input->post('content', true),
		];
		//use query builder class to update data post based on id_post
		$this->db->where('id_post',$id_post);
		$this->db->update('post',$data);
	}

	public function getPostById($id_post)
	{
		//get data post based on id 
		$data = $this->db->select('*')->from('post')->where('id_post',$id_post)->get();
		return $data->row_array();
	}
}
