<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function student()
    {
        $this->load->database();
        $this->load->view('registration_form');
    }
    public function save()
    {
        /*
        $name = $this->input->post('name');
        $pass = $this->input->post('pass');
        */
        extract($_POST);
        echo $name.' '.$pass.' ';
        

       
    }
}

?>