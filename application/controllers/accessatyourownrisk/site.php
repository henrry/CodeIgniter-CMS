<?php 

class Site extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }
    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            $this->session->set_flashdata('message', 'Please Log In');
            redirect('accessatyourownrisk/login');
        }
    }
    function index()
    {
        $data['main_content'] = 'admin_panel';
        $this->load->view('includes/template', $data);
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('accessatyourownrisk/login');        
    }
    function edit()
    {
        $data['main_content'] = 'edit_record';
        $this->load->view('includes/template', $data);
    }
    function create()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content')
        );

        $this->site_model->add_record($data);

        $this->index();
    }

    function update()
    {
        $data = array(
            'title' => 'updated title',
            'content' => 'content updated'
            );

        $this->site_model->update_record($data);

    }

    function delete()
    {
        $this->site_model->delete_row();
        $this->index();

    }
}

