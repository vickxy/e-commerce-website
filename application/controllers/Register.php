<?php 
    class Register extends CI_Controller{
        public function index(){
            //validation
            
            $rules = array(
                  "username" => array(
                          "field"=>"username",
                          "lebel"=>"username",
                          "rules"=>"required|max_length[20]|min_length[5]"
                  
                  
                  )
            
            
            );
            $this->form_validation->set_rules($rules);
            
            if($this->form_validation->run() != true){
                $this->load->view("Register");
            
            }else{
                echo "form_validation problem";
            }
        }
    }