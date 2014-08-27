<?php


class Excels extends CI_Model {

    function __construct()
    {
        parent::__construct();
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

    function get_report_result()
    {
        $objPHPExcel = PHPExcel_IOFactory::load("uploads/WebUI_V2_Testcases.xls","Excel5");

    }
}

