<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignupController extends CI_Controller
{
    public function signup()
    {
        $this->load->view('signup');
    }

    public function validate()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));

            $this->load->model('Signupmodel');
            $this->Signupmodel->insertsignup($email, $password);

            $this->session->set_flashdata('status', 'Successfully registered');
            redirect('login');
        } else {
            $this->signup();
        }
    }
}
?>
