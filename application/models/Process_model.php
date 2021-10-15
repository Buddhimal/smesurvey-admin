<?php

defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Created by PhpStorm.
 * User: Buddhimal Gunasekara
 * Date: 9/25/2019
 * Time: 10:20 PM
 */
class Process_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function query($query)
	{
		return $this->db->query($query);
	}

	public function generate_group_number()
	{
		$this->db->select("id");
		$this->db->from("sirikatha_loan_group");
		$this->db->limit(1);
		$this->db->order_by('id', "DESC");
		$result = $this->db->get();
		if ($result->num_rows() == 0)
			$rowcount = 0;
		else {
			$rowcount = $result->row()->id;
		}
		$rowcount++;
		if ($rowcount < 10) $group_number = "GRP0000" . $rowcount;
		else if ($rowcount < 100) $group_number = "GRP000" . $rowcount;
		else if ($rowcount < 1000) $group_number = "GRP00" . $rowcount;
		else if ($rowcount < 10000) $group_number = "GRP0" . $rowcount;
		else $group_number = "GRP" . $group_number;


		return $group_number;
	}

	public function insert($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function select_all($table)
	{
		$res = $this->db->select('*')->from($table)->get();
		return $res;
	}

	public function select_where($table, $where)
	{
		return $this->db->select('*')->from($table)->where($where)->get();
	}

	public function delete_where($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_user_upload_record($tax_id = '', $business_unit =''){

		return $this->db->query("
			SELECT * FROM user_data WHERE business_unit = '$business_unit' AND (tax_id = '$tax_id' OR email = '$tax_id')
		");

	}

	public function get_statistics($business_unit = '1')
	{
		$res = $this->db->query("select email, tax_id from user_master_data WHERE business_unit = '$business_unit'");
		$data['total_user'] = $res->num_rows();

		$res = $this->db->query("SELECT
			user_data.email,
			user_data.tax_id 
			FROM
			user_data 
			WHERE user_data.business_unit = '$business_unit'
			");

		$data['total_uploads'] = $res->num_rows();

		$res = $this->db->query("SELECT
			user_data.email,
			user_data.tax_id 
		FROM
			user_data 
				WHERE user_data.file_a != '' AND user_data.file_b ='' AND user_data.business_unit = '$business_unit'");

		$data['file_a_upload'] = $res->num_rows();

		$res = $this->db->query("SELECT
			user_data.email,
			user_data.tax_id 
		FROM
			user_data 
				WHERE user_data.file_b != '' AND user_data.file_a = '' AND user_data.business_unit = '$business_unit'");

		$data['file_b_upload'] = $res->num_rows();

		$res = $this->db->query("SELECT
					user_data.email,
					user_data.tax_id 
				FROM
					user_data 
				WHERE
					user_data.letter_confirm != '' 
					AND user_data.file_a != ''
					AND user_data.file_b != ''
					AND user_data.business_unit = '$business_unit'");

		$data['full_complete'] = $res->num_rows();

		$res = $this->db->query("SELECT *
				FROM
					user_data
				WHERE
					user_data.company_type = 'SME' AND user_data.business_unit = '$business_unit'");

		$data['sme_count'] = $res->num_rows();


		$res = $this->db->query("SELECT *
				FROM
					user_data
				WHERE
					user_data.company_type = 'NON SME' AND user_data.business_unit = '$business_unit'");

		$data['non_sme_count'] = $res->num_rows();

		$res = $this->db->query("SELECT *
				FROM
					user_data
				WHERE
					user_data.business_type = 'Goods/Factory' AND user_data.business_unit = '$business_unit'");

		$data['goods_count'] = $res->num_rows();

		$res = $this->db->query("SELECT *
				FROM
					user_data
				WHERE
					user_data.business_type = 'Services/Wholesale/Retails' AND user_data.business_unit = '$business_unit'");

		$data['services_count'] = $res->num_rows();


		return $data;

	}

}
