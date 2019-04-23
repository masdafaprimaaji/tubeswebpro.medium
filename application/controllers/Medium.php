<?php

class Medium extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Medium_model');
		$this->load->helper(array('url','form','file','date'));
	}

	public function index()
	{
		$data['post'] = $this->Medium_model->getAllPost();
		$this->load->view('v_home',$data);
	}

	public function addStory($id_user)
	{
		$data['user'] = $this->Medium_model->getUserById($id_user);
		$this->load->view('v_addstory',$data);
	}

	public function tambahStory($id_user)
	{
		$title = $this->input->post('title');
		$tagline = $this->input->post('tagline');
		$content = $this->input->post('content');
		$category = $this->input->post('category');

		$data_insert = array(
			'id_user' => $id_user,
			'title' => $title,
			'content' => $content,
			'category' => $category,
			'date' => date("y-m-d"),
			'tagline' => $tagline,
			'read_time' => 5
		);

		$insertData = $this->Medium_model->tambahStory($data_insert);

		if ($insertData) redirect('Medium/story/'.$id_user);
		else redirect('Medium/addStory/'.$id_user);

	}

	public function profile($id_user)
	{
		$data['user'] = $this->Medium_model->getUserById($id_user);
		$data['post'] = $this->Medium_model->getUserPost($id_user);
		$this->load->view('v_profile',$data);
	}

	public function deleteProfile($id_user)
	{
		$delete = $this->Medium_model->deleteUser($id_user);
		if ($delete) redirect('Medium/index');
		else redirect('Medium/profile'.$id_user);
	}
	public function story($id_user)
	{
		$data['user'] = $this->Medium_model->getUserById($id_user);
		$data['post'] = $this->Medium_model->getUserPost($id_user);
		$this->load->view('v_story',$data);
	}

	public function deletePost($id_post,$id_user)
	{
		$this->Medium_model->deletePost($id_post);
		$data['user'] = $this->Medium_model->getUserById($id_user);
		$data['post'] = $this->Medium_model->getUserPost($id_user);
		$this->load->view('v_story',$data);
	}

	public function editStory($id_post,$id_user)
	{
		$data['user'] = $this->Medium_model->getUserById($id_user);
		$data['post'] = $this->Medium_model->getPostById($id_post);
		$this->load->view('v_editstory',$data);
	}

	public function editPost($id_post,$id_user)
	{
		$title = $this->input->post('title');
		$tagline = $this->input->post('tagline');
		$content = $this->input->post('content');
		$category = $this->input->post('category');

		$data_insert = array(
			'title' => $title,
			'content' => $content,
			'category' => $category,
			'tagline' => $tagline
		);

		$updateData = $this->Medium_model->editStory($data_insert,$id_post);

		if ($updateData) redirect('Medium/story/'.$id_user);
		else redirect('Medium/editStory/'.$id_post.'/'.$id_user);
	}

	public function editProfile($id_user)
	{
		$data['user'] = $this->Medium_model->getUserById($id_user);
		$this->load->view('v_editprofil',$data);
	}

	public function editUser($id_user)
	{
		$fullname = $this->input->post('fullname');
		$bio = $this->input->post('bio');

		$data = array (
			'fullname' => $fullname,
			'bio' => $bio
		);

		$update = $this->Medium_model->editProfile($data,$id_user);
		if ($update) redirect('Medium/profile/'.$id_user);
		else redirect('Medium/editProfile/'.$id_user);
	}

	public function detailPost($id_post,$id_user)
	{
		$data['post'] = $this->Medium_model->getPostById($id_post);
		$data['user'] = $this->Medium_model->getUserById($id_user);
		$this->load->view('v_detail_post_loggedin',$data);
	}

	public function detailPostUnlogged($id_post)
	{
		$data['post'] = $this->Medium_model->getPostById($id_post);
		$this->load->view('v_detail_post',$data);
	}

	public function signup()
	{
		$this->load->view('v_signup');
	}

	public function signupEmail()
	{
		$this->load->view('v_signup_email');
	}

	public function signin()
	{
		$this->load->view('v_signin');
	}

	public function signinEmail()
	{
		$this->load->view('v_signin_email');
	}

	public function cek_login()
	{
		$email = $this->input->post('email');
    	$password = $this->input->post('password');

    	$login = $this->Medium_model->login_user($email, $password);

	    if ($login) {
	      	redirect('Medium/loggedin/'.$email);
	    } else {
	      	redirect('Medium/signinEmail');
	    }
	}

	public function register()
  	{
    	$email = $this->input->post('email');
    	$password = $this->input->post('password');
    	$fullname = $this->input->post('fullname');
    	$table = 'users';

    	$data_insert = array (
    		'email' => $email,
      		'password' => $password,
      		'fullname' => $fullname,
      		'join_date' => date("y-m-d"),
      		'following' => 0,
      		'followers' => 0
    	);

    	$register = $this->Medium_model->register_user($table, $data_insert);

    	if ($register) {
      		redirect('Medium/signin');
    	} else {
    		redirect('Medium/signupEmail');
    	}
  	}

	public function loggedin($email)
	{
		$data['post'] = $this->Medium_model->getAllPost();
		$data['user'] = $this->Medium_model->getUserByEmail($email);
		$this->load->view('v_home_loggedin',$data);
	}

	public function logout()
  	{
    	$this->session->sess_destroy();
    	redirect('Medium/index');
  	}

}
