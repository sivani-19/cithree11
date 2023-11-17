<?php
class EA_M extends CI_Model{
   
    public function products(){
        $query=$this->db->get('prod');
        $sql=$this->db->last_query();
        return $query->result();
    }
    public function add_product($data){
        $query=$this->db->insert('prod',$data);
    
        return true;
    }
    public function delete($id)
    {
       $query=$this->db->where('id',$id)->delete('prod');
       $sql=$this->db->last_query();
        print_r($query);
        return true;
    }
    public function Admin_edit($id)
    {
        $query=$this->db->get_where('prod',array('id'=>$id));
        $sql=$this->db->last_query();
       return $query->result();
    }
   
}
?>