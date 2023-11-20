<?php
class Login_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model("E_M");
    }
public function login(){
 
   $this->form_validation->set_rules('email','email','required');
   $this->form_validation->set_rules('password','password','required');
   if($this->form_validation->run()==false){
    $this->load->view('E_V/login_V');
   }
else
   {
    $email=$this->input->post('email');
    $password=$this->input->post('password');
    $result=$this->E_M->login($email,$password);
    if($result==false)
    {
       $this->session->set_flashdata('login_failed','Incorrect password');
       $this->load->view('Lg_V/l_V');
    }
  if($result!=NULL)
    {
    $row=$result->row();
    $id=$row->id;
    $this->session->set_userdata('userid',$id);
    if($result!=NULL){
        $this->session->set_flashdata('logined','logined successfully');
        redirect('product_dashboard');

    }
}
   else if($result===false){
        $this->session->set_flashdata('logined_failed','Enter a Correct Password');
        $this->load->view('E_V/login_V');
    }
   else if($result==='usernotfound'){
         $this->session->set_flashdata('no_data_found','Enter a Correct email');
         $this->load->view('E_V/login_V');
   }
    
 }
}
public function register(){

    $this->form_validation->set_rules('FirstName','First Name','required');
    $this->form_validation->set_rules('lastName','last Name','required');
    $this->form_validation->set_rules('email','email-id','required|is_unique[ecom1.email]');
    $this->form_validation->set_rules('password','password','required');
    $this->form_validation->set_rules('conform-password','conform-password','required|matches[password]');
    if($this->form_validation->run()==false){
        $this->load->view('E_V/Register_V');
    }
    else{
        $data=array(
         'FirstName'=>$this->input->post('FirstName'),
         'lastName'=>$this->input->post('lastName'),
         'Username'=>$this->input->post('Username'),
         'email'=>$this->input->post('email'),
         'password'=>$this->input->post('password'),
        );
        $result=$this->E_M->register($data);
        if($result==true)
        {
            $this->load->view('E_V/Login_V');
        }
    }
}
public function forgetpassword(){
    $this->form_validation->set_rules('email','email','required');
    $this->form_validation->set_rules('password','password','required');
   $this->form_validation->set_rules('conform-password','conform-password','required|matches[password]');
    if($this->form_validation->run()==false){
        $this->load->view('E_V/fp_V');
    }
    else{
        $data=array(
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
        );
        $result=$this->E_M->update($data);
    }
}
public function dashboard(){
    $this->load->view('E_V/Dashboard_V');
}
public function Admin(){
    $this->load->view('E_V/Admin_V');
}
public function product_dashboard(){
    $this->load->view('E_V/Dashboard_V');
    $result['data']=$this->E_M->product_dashboard();
    $this->load->view('E_V/product_display',$result);
    if(!empty($this->input->get('id'))){
        $id=$this->input->get('id');
    $result=$this->E_M->add_cart($id);
        $row=$result->row();
        $data=array(
            'prod_id'=>$row->id,
            'productname'=>$row->ProductName,
            'Amount'=>$row->Amount,
            'Image'=>$row->Image,
        );
        $data['User_id']=$this->session->userdata('userid');
       $result= $this->E_M->cart($data);
     
    }

   }
   public function cart(){
    $this->load->view('E_V/Dashboard_V');
    $userid=$this->session->userdata('userid');
    $result['data']=$this->E_M->view_cart($userid);
    if($result['data']==false)
    {
        $this->load->view('E_V/Emptycart');
    }
    else{
   $this->load->view('E_V/cart',$result);
   if(!empty($this->input->get('id')))
   {
    $this->load->view('E_V/Dashboard_V');
   $id=$this->input->get('id');
   $data=array('id'=>$id);
   $result=$this->E_M->update_qunatity($data);
   }
}}
   public function remove_from_cart(){
    $this->load->view('E_V/Dashboard_V');
    $id=$this->input->get('id');
    $result=$this->E_M->remove($id);
    if($result==true)
    {
        redirect('cart');

    }
}
public function search(){
    $this->load->view('E_V/Dashboard_V');
    if(empty($this->input->get('tag'))){
    $tag=$this->input->post('search_tags');
    $result['data']=$this->E_M->search($tag);
    $this->load->view('E_V/search',$result);
    }
    else{
        if(!empty($this->input->get('tag')))
        {
            $tag=$this->input->get('tag');
            $result['data']=$this->E_M->search($tag);
            $this->load->view('E_V/search',$result);
        }
    }
 
    
}
public function update_profile(){
    $this->load->view('E_V/Dashboard_V');
    $id=$this->input->get('id');
    $result['data']=$this->E_M->update_profile($id);
    $this->load->view('E_V/update',$result);
    if(isset($_POST['update']))
    {
        $data=array(
        'FirstName'=>$this->input->post('FirstName'),
        'LastName'=>$this->input->post('lastName'),
        'email'=>$this->input->post('email'),
        'Username'=>$this->input->post('Username'),
        'password'=>$this->input->post('password'),
    );
    
    $result=$this->E_M->profile_update($id,$data);
    if($result)
    {
        redirect('product_dashboard');
    }
    }
    }
    // In your controller (E_C/Login_C)
public function Buy_Now(){
    $this->load->view('E_V/Dashboard_V');
    $id=$this->input->get('id');
    $result['data']=$this->E_M->Buy_Now($id);
    if($result!=Null){
    $this->load->view('E_V/Buy_Now',$result);
    }
}
public function Orders(){
    $this->load->view('E_V/Dashboard_V');
    $this->load->view('E_V/Orders');
}
public function buy_all(){
    $this->load->view('E_V/Dashboard_V');
    $userid=$this->session->userdata('userid');
    $result=$this->E_M->buy_all($userid);
    $this->load->view('E_V/suc_pur');
} 
public function about_us(){
    $this->load->view('E_V/Dashboard_V');
    $this->load->view('E_V/about_us');
}
public function sellar(){
    $this->load->view('E_V/Dashboard_V');
    $this->load->view('E_V/Become_sellar');
}
public function after_buy(){
    $this->load->view('E_V/Dashboard_V');
    $this->load->view('E_V/suc_pur');
}
}
?>