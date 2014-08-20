<?php
header("Content-Type: text/html;charset=utf-8");

class Test extends MY_Controller{
	public function index()
	{
		$this->cismarty->view('test.tpl');
	}
	public function testadd()
	{
		var_dump($this->input->post());
	}
}