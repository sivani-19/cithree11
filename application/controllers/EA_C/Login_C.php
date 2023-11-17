<?php
class Login_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("EA_M");
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }
    public function Admin_Dashboard(){
        $this->load->view('E_V/Admin_V');
        $this->load->view('Admin/Admin_Dashboard');
    }
    public function Admin_products(){
        $this->load->view('E_V/Admin_V');
         $result['data']=$this->EA_M->products();
         $this->load->view('Admin/products',$result);
    }
    public function Add_products(){
        $this->form_validation->set_rules('ProductName','ProductName','required|max_length[12]|min_length[3]');
        $this->form_validation->set_rules('SellarName','SellarName','required|max_length[12]|min_length[3]');
        $this->form_validation->set_rules('ProductContent','ProductContent','required|max_length[12]|min_length[3]');
        $this->form_validation->set_rules('Image','Image','required|max_length[12]|min_length[3]');
        $this->form_validation->set_rules('tags','tags','required|max_length[12]|min_length[3]');
        $this->load->view('E_V/Admin_V');
        if($this->form_validation->run()==false){
            $this->load->view('Admin/Add_product');
        }
        else if(isset($_POST['update'])){
        $data=array(
            'ProductName'=> $this->input->post('ProductName'),
            'SellarName'=> $this->input->post('SellarName'),
            'ProductContent'=> $this->input->post('ProductContent'),
            'tags'=>$this->input->post('tags'),
        );
        $config = array(
            'upload_path' => './uploads/',
            'allowed_types' => 'jpg|jpeg|png',
            'max_size' => 2048
        );
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);//to upload the image file into database
        if (!is_dir('./uploads/')) {
            mkdir('./uploads/', 0777, true);
        }
        
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('Image'))
        {
            $data['Image'] = $this->upload->data('file_name');
            $result=$this->EA_M->add_product($data);
        } 
            
    }
    }

    public function Admin_Users(){
         
    }
    public function Profile(){

    }
    public function Add_user()
    {
        
    }
    public function Message(){
        $this->load->view('E_V/Admin_V');
        $this->load->view('Admin/Message');
    }
    public function Admin_delete(){
        $id=$this->input->get('id');
        $result=$this->EA_M->delete($id);
        if($result==true)
        {
            redirect('product');
        }
    }
    public function Admin_edit(){
        $id=$this->input->get('id');
        $result['data']=$this->EA_M->Admin_edit($id);
        $this->load->view('Admin/edit_product',$result);
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
        }
    }

}
?>