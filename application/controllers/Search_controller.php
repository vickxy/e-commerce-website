<?php
class Search_controller extends CI_Controller{

public function index()
{ 

}
     public function search_data()
         
    {
        
    	$this->load->library('form_validation');
    	$this->form_validation->set_rules('query','Query','required');
    	 if(!$this->form_validation->run()== FALSE)
    	{
    		$this->index();
    	}
        else
        {
    		$q=$this->input->post('search');
    		$this->load->model('Landing');
    		$result=$this->Landing->get_detail($q);
    		$this->load->view('search_result',compact('result'));

    	 }
     }
}