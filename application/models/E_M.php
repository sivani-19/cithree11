<?php
class E_M extends CI_Model{
 public function login($email,$password){
    $query=$this->db->where(array('email'=>$email,'password'=>$password))->get('ecom1');
    if($query->num_rows()>0)
    {
        return $query;
    }
}
public function register($data)
{
    $query=$this->db->insert('ecom1',$data);
    $sql=$this->db->last_query();
    print_r($sql);
}
public function update($data){
    $query=$this->db->update('ecom1',$data);
    $sql=$this->db->last_query();
    print_r($sql);
}
public function product_dashboard(){
    $query=$this->db->get('prod');
    return $query->result();
}
public function add_cart($id){
    $query=$this->db->get_where('prod',array('id'=>$id));
    return $query;
}
public function cart($data){
   
    $query=$this->db->get_where('cart',array('prod_id'=>$data['prod_id'],'User_id'=>$data['User_id']));
    if($query->num_rows()>0)
    {
       $this->session->set_flashdata('alert','Product is added sucessfully');
    }
    else{
    $query=$this->db->insert('cart',$data);
    return $query;
    }
}
public function view_cart($userid){
    $query=$this->db->get_where('cart',array('User_id'=>$userid));
    if($query->num_rows()>0)
    {
        return $query->result();
    }
    else{
        return false;
    }
}
public function remove($id)
{
    $this->db->where('id', $id);
    $this->db->delete('cart');
    $this->db->query('SET @new_id=0;');
    $this->db->query('UPDATE cart SET id = @new_id:=@new_id+1;');
}
public function update_qunatity($data)
{
   $query= $this->db->update('cart',$data);
   $sql=$this->db->last_query();
   print_r($sql);
}
public function search($tag)
{
    $this->db->from('prod')->like('tags', $tag);
    $query = $this->db->get();
    if($query->num_rows()>0){
    return $query->result();
    }
    else{
        $this->session->set_flashdata('no_result','No result items');
    }
}
public function update_profile($id){
    $query=$this->db->get_where('ecom1',array('id'=>$id));
    return $query->result();
}
public function profile_update($id,$data)
{
    $this->db->where('id', $id);
    $query=$this->db->update('ecom1',$data);
    return true;
}
public function Buy_now($id)
{
    $query=$this->db->get_where('prod',array('id'=>$id));
    return $query->result();
}


public function buy_all($userid){
    $this->db->where('User_id', $userid);
    $query=$this->db->delete('cart');
    $sql=$this->db->last_query();
}
}
?>