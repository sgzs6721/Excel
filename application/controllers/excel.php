<?php


class Excel extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
    	$filePath = "uploads/WebUI_V2_Testcases.xls";

		$PHPExcel = new PHPExcel();
		$PHPReader = new PHPExcel_Reader_Excel5();

		$PHPExcel = $PHPReader->load($filePath);

		$objWriter = PHPExcel_IOFactory::createWriter($PHPExcel, 'Excel2007');
		$objWriter->save('uploads/test.xlsx');
    }
}

