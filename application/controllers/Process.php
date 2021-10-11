<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Process extends CI_Controller
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

	private function set_flash_data($msg, $alert_type = "alert-success")
	{
		$this->session->set_flashdata('msg', $msg);
		$this->session->set_flashdata('alert_type', $alert_type);
	}

	public function save_users()
	{

//		var_dump($_FILES);

		$csv = $_FILES['users']['tmp_name'];
		$handle = fopen($csv, "r");
		$cutomer_imported = array();
		while (($row = fgetcsv($handle, 10000, ",")) != FALSE) {
			//            print_r($row);
			$cutomer_imported[] = $row;
		}

		if (sizeof($cutomer_imported) > 1) {
			unset($cutomer_imported[0]);

			foreach ($cutomer_imported as $key => $value) {

				$email_1 = explode(",", $value[10]);
				$email_2 = explode(",", $value[11]);

				$saving_billing_data = array(
					'supplier_number' => $value[0],
					'company_name' => $value[1],
					'tax_id' => $value[3],
					'email_remit' => $email_1[0],
					'email' => $email_2[0],
					'created_at' => date('Y-m-d H:i:s')
				);
				$this->process_model->delete_where('user_master_data', array('supplier_number' => $value[0]));
				$this->process_model->insert('user_master_data', $saving_billing_data);

			}

			$this->set_flash_data("Customer data inserted Successfully");
		}

		redirect('users');
	}


}
