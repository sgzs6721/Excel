<?php

class Manager extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
     
    function index()
    { 
        $this->cismarty->view('pages/test_add.tpl');
    }

    function add_product()
    {
        
    }

}