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

    function get_report_result($file_path, $file_name)
    {
        $file_type = end(explode('.', $file_name));

        $config_excel_type = 'Excel5';
        if($file_type == 'xlsx') $config_excel_type = 'Excel2007';

        $objPHPExcel = PHPExcel_IOFactory::load($file_path.$file_name, $config_excel_type);

        $report_info = array();

        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
        {
            $sheetName = $worksheet->getTitle();
            if($sheetName == 'Header')
            {
                $report_info['product'] = $worksheet->getCell('C7')->getValue();
                $report_info['release'] = $worksheet->getCell('C8')->getValue();
                $report_info['browser'] = $worksheet->getCell('C19')->getValue();
                $report_info['locale'] = $worksheet->getCell('C20')->getValue();
                $report_info['method'] = $worksheet->getCell('C21')->getValue();
            }
            else
            {
                $highestRow = $worksheet->getHighestRow();
                $auto_available = 0;
                $auto_status = 0;
                $pass_test = 0;
                $fail_test = 0;

                $sheet_info = array();
                $bug_info = array();

                for ($row = 2; $row <= $highestRow; $row++)
                {
                    if($worksheet->getCell('A'.$row)->getValue() == '') continue;
                    if(strtoupper($worksheet->getCell('R'.$row)->getValue() ) == 'Y' ) $auto_available++;
                    if(strtoupper($worksheet->getCell('S'.$row)->getValue() ) == 'Y' ) $auto_status++;
                    if(strtoupper($worksheet->getCell('T'.$row)->getValue() ) == 'PASS' )
                    {
                        $pass_test++;
                    }
                    else
                    {
                        $fail_test++;
                        $case_name = $worksheet->getCell('B'.$row)->getValue();
                        $bug_id = $worksheet->getCell('U'.$row)->getValue();
                        $bug_info[$case_name] = $bug_id;
                    }
                    
                }
                $sheet_info['auto_available'] = $auto_available;
                $sheet_info['auto_status']    = $auto_status;
                $sheet_info['pass_test']      = $pass_test;
                $sheet_info['fail_test']      = $fail_test;
                $sheet_info['bug_info']       = $bug_info;
                $report_info['component'][$sheetName] = $sheet_info;
            }
        }

        return $report_info;
    }
}

