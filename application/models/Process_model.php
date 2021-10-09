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

    public function select_where($table, $where){
		return $this->db->select('*')->from($table)->where($where)->get();
	}

}
