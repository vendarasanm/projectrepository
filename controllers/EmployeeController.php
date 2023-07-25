<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{
    public function employee()
    {
        $this->load->model('Employeemodel');
        $data['employee'] = $this->Employeemodel->getemployee();
        $this->load->view('employee', $data);
    }

    public function create()
    {
        $this->load->view('create');
    }

    public function store()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');

        if ($this->form_validation->run()) {
            $data = [
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile')
            ];

            $this->load->model('Employeemodel');
            $this->Employeemodel->insertemployee($data);
            $this->session->set_flashdata('status','successfully inserted');
            redirect(base_url('employee'));
        } else {
            $this->create();
        }
    }

    public function edit($id)
    {
        $this->load->model('Employeemodel');
        $data['employee'] = $this->Employeemodel->editemployee($id);
        $this->load->view('edit', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');

        if ($this->form_validation->run()) {
            $data = [
                'id' => $this->input->post('id'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile')
            ];

            $this->load->model('Employeemodel');
            $this->Employeemodel->updateemployee($data);
            redirect(base_url('employee'));
        } else {
            $id = $this->input->post('id');
            $this->edit($id);
        }
    }

    public function delete($id)
    {
        $this->load->model('Employeemodel');
        $this->Employeemodel->deleteemployee($id);
        redirect(base_url('employee'));
    }
}
?>
