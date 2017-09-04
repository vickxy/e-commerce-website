<?php
class Shopingcart extends CI_Controller{

public function index()
{

$this->load->helper('form');
$this->load->library('cart');
$this->load->view('cart');


}

public function update()
{

//$this->load->library('cart');
$this->cart->update($_POST);
redirect('Shopingcart');

}
public function add()
{
$this->load->library('cart');
$data=$this->input->post();

//print_r($data);exit;

		$this->cart->insert($data);
		redirect('Stuff');
}
public function remove_cart($rowid)
	{
		$this->load->library('cart');
			$data = array(
               'rowid' => $rowid,
               'qty'   => 0
            );

		$this->cart->update($data); 
		redirect('Shopingcart');
		
	}





}
