<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Landing');
		$content = $this->Landing->head_list();
		$second_list = $this->Landing->second_head_list();
		$third_list = $this->Landing->third_head_list();
		$this->load->view('Main',['data'=>$content,'second_list'=>$second_list,'third_list'=>$third_list]);
	}
    	public function Story($id)
	{
		
		$this->load->model('Landing');
		$detail = $this->Landing->getDetail($id);
		$trend = $this->Landing->main_page_search();
		$this->load->view('Detail',['detail'=>$detail,'latest'=>$latest,'trendpost'=>$trend]);
	}
}