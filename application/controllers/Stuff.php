<?php 
class Stuff extends CI_Controller{

public function index()
{
    $this->load->helper('form');
		$this->load->model('Landing');
		$content = $this->Landing->stuff();
		$this->load->view('stuff',['data'=>$content]);

}
public function type1()
{

		
		$this->load->model('Landing');
		$head_list = $this->Landing->head_list();
		$this->load->view('stuff',['first'=>$head_list] );

}




}