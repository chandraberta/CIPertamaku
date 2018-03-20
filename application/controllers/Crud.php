<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function_construct()
	{
		parent::_construct();

	}

	public function index(){
		$data['komentar'] = $this->db->get('komen');
		$this->load->view('home', $data)
	}

	public function add()
	{

	}

	public function update($id = NULL)
	{

	}

	public function delete ($id = NULL)
	{

	}
}