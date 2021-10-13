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
		redirect('reports');
	}

	public function users()
	{
		$this->load->view('template/header');
		$business_units = $this->process_model->select_all("business_units");
		$data['business_units'] = $business_units;
		$this->load->view('users_upload',$data);
		$this->load->view('template/footer');
	}

	public function export()
	{
		$tax_id = $this->input->get_post('tax_id');
		$business_unit = $this->input->get_post('business_unit');
		$user_data = $this->process_model->get_user_upload_record($tax_id, $business_unit);
		$business_units = $this->process_model->select_all("business_units");

		$user_data = (array)$user_data->row();
		$file1_path = "#";
		$file2_path = "#";
		$file3_path = "#";

		if($user_data) {
			if (($user_data['letter_confirm']))
				$file1_path = FrontEnd::BASE_URL . 'letter_file/' . $user_data['letter_confirm'];

			if (($user_data['file_a']))
				$file2_path = FrontEnd::BASE_URL . 'file1/' . $user_data['file_a'];

			if (($user_data['file_b']))
				$file3_path = FrontEnd::BASE_URL . 'file2/' . $user_data['file_b'];
		}

		$data['user_data'] = $user_data;
		$data['file1_path'] = $file1_path;
		$data['file2_path'] = $file2_path;
		$data['file3_path'] = $file3_path;
		$data['business_units'] = $business_units;

		$this->load->view('template/header');
		$this->load->view('export_files', $data);
		$this->load->view('template/footer');
	}

	public function reports()
	{
		$business_unit = $this->input->get_post('business_unit');

		if(!$business_unit){
			$business_unit = 1;
		}

		$res = $this->process_model->get_statistics($business_unit);
		$user_data = $this->process_model->select_where('user_data',array('business_unit'=>$business_unit));
		$business_units = $this->process_model->select_all("business_units");
		$res['user_data'] = $user_data;
		$res['business_units'] = $business_units;

		$this->load->view('template/header');
		$this->load->view('report', $res);
		$this->load->view('template/footer');
	}

}
