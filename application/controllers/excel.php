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

		echo 'test';
    }

    function test()
    {
        $objPHPExcel = PHPExcel_IOFactory::load("uploads/WebUI_V2_Testcases.xls","Excel5");
        echo 'read excel<br>';

        $sheet = $objPHPExcel->getSheet(0);

        $highestRow = $sheet->getHighestRow();
        
        echo $highestRow.'<br>';

        echo $sheet->getCell('A24')->getValue().'<br>';

        $sheet->setCellValue('A24', '5');

        echo 'set value 5 for A24';
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

        $objWriter->save('uploads/test.xls');
    }
}

