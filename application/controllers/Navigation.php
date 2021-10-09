<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Navigation extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/mlogin');
		$this->load->model('mloging');
		$this->load->model('process_model');
		$this->load->model('user/muser');

		if (is_login() == '') {
			redirect(site_url() . 'login');
		}
	}

	public function index()
	{
		$this->load->view('template/header');
//		$this->load->view('users_upload');
		$this->load->view('template/footer');
	}

	public function users()
	{
		$this->load->view('template/header');
		$this->load->view('users_upload');
		$this->load->view('template/footer');
	}

	public function export()
	{
		$tax_id = $this->input->get_post('tax_id');
		$user_data = $this->process_model->select_where('user_data', array('tax_id' => $tax_id));

		$user_data = (array)$user_data->row();
		$file1_path = "#";
		$file2_path = "#";
		$file3_path = "#";
		if (isset($user_data['letter_confirm']))
			$file1_path = FrontEnd::BASE_URL.'letter_file/' . $user_data['letter_confirm'];

		if (isset($user_data['file_a']))
			$file2_path = FrontEnd::BASE_URL.'file1/' . $user_data['file_a'];

		if (isset($user_data['file_b']))
			$file3_path = FrontEnd::BASE_URL.'file2/' . $user_data['file_b'];



		$data['user_data'] = $user_data;
		$data['file1_path'] = $file1_path;
		$data['file2_path'] = $file2_path;
		$data['file3_path'] = $file3_path;

		$this->load->view('template/header');
		$this->load->view('export_files', $data);
		$this->load->view('template/footer');
	}

	public function reports()
	{
		$res = $this->process_model->get_statistics();
		$this->load->view('template/header');
		$this->load->view('report',$res);
		$this->load->view('template/footer');
	}

}
