<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function login()
    {
        if ($this->session->userdata('email')) {
            $this->load->view('welcome');
        }
        else{
        $this->load->view('login');
        }
    
    }

    public function save()
    {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));

            $this->load->model('Loginmodel');
            $user = $this->Loginmodel->setlogin($email, $password);
            $this->session->set_userdata('email', $email);
        $this->load->view('welcome');
    
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        redirect('login');
    }
}
?>
