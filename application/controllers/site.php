<?php 

class Site extends CI_Controller {

    function index()
    {
        $data = array();

        if($query = $this->database_model->get_records('faqdata'))
        {
            $data['records'] = $query;
        }

        $data['main_content'] = 'landing';
        $this->load->view('includes/template', $data);
    }
    function article()
    {
        $this->load->view('article');
    }
    function category()
    {
        $this->load->view('category');
    }


}