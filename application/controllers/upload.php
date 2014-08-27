<?php

class Upload extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
     
    function index()
    { 
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    function do_upload()
    {
        $config['upload_path'] = './uploads/temp/';
        $config['allowed_types'] = 'xls|xlsx';
        $config['max_size'] = '10000000';
        $config['max_width']  = '1280';
        $config['max_height']  = '900';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        }
        else
        {
            $this->load->model('excels');
            $upload_data = $this->upload->data();
            $report_result = $this->excels->get_report_result($config['upload_path'], $upload_data['file_name']);
            $data = array('upload_data' => $upload_data, 'test_result' => $report_result);

            $this->load->view('upload_success', $data);
        }
    }
}