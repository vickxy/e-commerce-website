<?php 
class Landing extends CI_Model{


 public function head_list(){
 			$this->db->where(['type'=>'type1']);
   	    	$query = $this->db->get('products');
   	    	return $query->result();
}
   	    public function second_head_list(){
 			$this->db->where(['type'=>'type2']);
   	    	$query = $this->db->get('products');
   	    	return $query->result();

   	    }
   	    public function third_head_list(){
 			$this->db->where(['type'=>'type3']);
   	    	$query = $this->db->get('products');
   	    	return $query->result();

   	    }
   	    public function stuff(){
 			//$this->db->where(['type'=>'type3']);
   	    	$query = $this->db->get('products');
   	    	return $query->result();

   	    }
        public function get_detail($q)
    {
            
        $r=$this->db->from('products')
                        ->like('headline',$q)
                        ->get();
        
         return $r->result();

    }
      public function  Main_page_search(){
   	    	$limit=6;
   	    	$offset=0;
   	    	$this->db->where_in('type',array('type1'));
   	    	$this->db->order_by("id","desc");
   	    	$trend= $this->db->limit($limit,$offset)->get('product');
   	    	return $trend->result();
   	    }

}



