<?php
class Medium_model extends CI_model
{
	
	public function tambahDataPengguna()
	{
		$data = [
			"id_user" => $this->input->post('id_user', true),
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
			"fullname" => $this->input->post('fullname',true)
		];
		//use query builder class to update data users based on id
		$this->db->where('id_user',$id_user);
		$this->db->update('users',$data);
	}
	

	public function cariDataPengguna()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data users based on keyword "id_user" 
        	$data = $this->db->like('id_user', $keyword)->get('users');

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
		$this->db->insert('post',$data);
	}

	
	//it works
	public function getAllPost()
	{
		$this->db->select('*,fullname');
		$this->db->from('post');
		$this->db->join('users','post.id_user=users.id_user');
		return $this->db->get()->result();
	}

	public function login_user($email, $password)
	{
    	$this->db->where('email',$email);
    	$this->db->where('password',$password);

    	$result = $this->db->get('users');
    	if($result->num_rows()==1){
        	return $result->row(0);
    	}else{
        	return false;
    	}
  	}

  	public function register_user($table,$data)
  	{
    	$insert = $this->db->insert($table, $data);
    	if ($insert){
      		return TRUE;
    	} else {
      		return FALSE;
    	}
  	}

  	public function getPostById($id_post)
	{
		$this->db->select('*,fullname');
		$this->db->from('post');
		$this->db->join('users','post.id_user = users.id_user');
		$this->db->where('id_post',$id_post);
		return $this->db->get()->result();
	}

	public function getUserByEmail($email)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email',$email);
		return $this->db->get()->result();
	}

	public function getUserById($id_user)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id_user',$id_user);
		return $this->db->get()->result();
	}

	public function getUserPost($id_user)
	{
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where('id_user',$id_user);
		return $this->db->get()->result();
	}

	public function deletePost($id_post)
	{
		$this->db->where('id_post',$id_post);
		$this->db->delete('post');
	}

	public function tambahStory($data)
	{
		$insert = $this->db->insert('post',$data);
		if ($insert) return TRUE;
		else return FALSE;
	}

	public function deleteUser($id_user)
	{
		$this->db->where('id_user',$id_user);
		$this->db->delete('post');
		$this->db->where('id_user',$id_user);
		$delete = $this->db->delete('users');
		if ($delete) return TRUE;
		else return FALSE;
	}

	public function editStory($data,$id_post)
	{
		$this->db->where('id_post',$id_post);
		$update = $this->db->update('post',$data);
		if ($update) return TRUE;
		else return FALSE;
	}

	
	public function editProfile($data,$id_user)
	{
		$this->db->where('id_user',$id_user);
		$update = $this->db->update('users',$data);
		if ($update) return TRUE;
		else return FALSE;
	}
}
