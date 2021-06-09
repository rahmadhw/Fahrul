<?php 

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Login_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('pembungkus/header');
        $this->load->view('login');
        $this->load->view('pembungkus/footer');
    }

    public function dologin()
    {
        $this->form_validation->set_rules('USERNAME', 'USERNAME', 'required');
        $this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        }else {
            $this->Login_model->login();
            redirect('obat');
        }
    }

   
}

?>