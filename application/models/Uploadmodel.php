<?php
class Uploadmodel extends CI_Model {
    public function do_upload($array)
    {
    	//print_r($array);exit;
    	return $this->db->insert('products',$array);




    }


}