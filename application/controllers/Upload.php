<?php
class Upload extends CI_Controller{

public function index()
{

$this->load->view('upload_product');


}

public function thumbnail($file_name)
{
//print_r($file_name);exit;
	$config['image_library'] = 'gd2';
	$config['source_image'] = './assests/image/'.$file_name;
	$config['new_image'] = './assests/thumbnails/'.$file_name;
	$config['maintain_ratio'] = TRUE;
	$config['width']         = 300;
	$config['height']       = 180;

	$this->load->library('image_lib', $config);

	$this->image_lib->resize();


}
public function add_product()
{
	$config=[
		'upload_path'=> './assests/image',
		'allowed_types'=>'jpg|png|jpeg',
		'max_size'=>'1024',
		'max_width'=>'1024',
		'max_height'=>'768'
	];
	$this->load->library('upload',$config);
$this->form_validation->set_rules('type','Product Type','required|max_length[5]',array('required|max_length[5]' => 'You must provide a %s.'));
$this->form_validation->set_rules('p_name','Product Name','required',array('required' => 'You must provide a %s.'));
$this->form_validation->set_rules('p_price','Price','required|decimal',array('required' => 'You must provide a %s.'));
$this->form_validation->set_rules('p_cod','COD Avilable','required|max_length[5]',array('required|max_length[5]' => 'You must provide a %s.'));
$this->form_validation->set_rules('p_about','About Product','required',array('required' => 'You must provide a %s.'));



$this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");
if ($this->form_validation->run() && $this->upload->do_upload())
{
	
	$post=$this->input->post();
	unset($post['submit']);
	
	$data=$this->upload->data();
	
	//print_r($file_name);exit;
	//$this->thumbnail($file_name);
		$p_image=("/assests/image/".$data['raw_name'].$data['file_ext']);
		$file_name=($data['raw_name'].$data['file_ext']);
		//print_r($file_name);exit;
		$this->thumbnail($file_name);
		$file_name=("/assests/thumbnails/".$data['raw_name'].$data['file_ext']);
		$post['thumbnails']=$file_name;
		$post['p_image']=$p_image;
		
		
	$this->load->model('Uploadmodel');
	if ($this->Uploadmodel->do_upload($post))
	{
	
		$this->session->set_flashdata('feedback','Product Successfully Uploaded');
	}
	else{
		$this->session->set_flashdata('feedback','Product Not Uploaded');
	}
	return redirect('Upload');
}
else{
	$upload_error=$this->upload->display_errors();
	$this->load->view('upload_product',compact('upload_error'));
}

}

}





//}