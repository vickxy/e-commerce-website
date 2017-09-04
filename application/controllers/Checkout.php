<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function index(){
        $this->load->view('checkout');
    }
    public function detail(){
    	$id=$this->input->post('id');
    	$image=$this->input->post('image');
    	$qty=$this->input->post('qty');
    	$price=$this->input->post('price');
    	$name=$this->input->post('name');
    	//print_r($var);exit;
        $this->load->view('detail',['foo'=>$image,'doo'=>$id,'qoo'=>$qty,'poo'=>$price,'noo'=>$name,'id'=>$id]);
    }
}	 