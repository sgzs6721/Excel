<?php

class Manager extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
     
    function index()
    { 
        $this->cismarty->view('add_test.tpl');
    }

    function add_product()
    {

    }

}