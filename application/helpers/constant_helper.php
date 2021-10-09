<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->ci =& get_instance();
$this->ci->load->database();


if ( ! function_exists('checkLogin'))
{
//    protected $CI;

    function is_login(){
        $a =& get_instance();

        $a->load->library('session');

        // This only returns the id does not set it.
        return $a->session->userdata('user_id');
    }

    function last_query(){
        $ab =& get_instance();

        echo($ab->db->last_query());
    }

}

/* SYSTEM MODULES */
$query = $this->ci->db->get('sys_module');

foreach ($query->result() as $row) {
    define($row->module_const, $row->module_id);
}

class FrontEnd{
	const BASE_URL = "http://localhost:8888/wizard/uploads/";
}


/* SYSTEM USER GROUPS */
define("SYS_ROOT_GROUP",1);
define("SYS_ADMIN_GROUP",2);
define("ADMIN_USER_GROUP",3);
