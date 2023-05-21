<?php

require('xlsxwriter.class.php');

function writeXLSX(string $filename, array $header, array $data, string $title, array $cols_width)
{
    $writer = new XLSXWriter();

    $writer->setTitle($filename);
    $writer->setSubject($filename);
    $writer->setAuthor($filename);
    $writer->setDescription($filename);
    $writer->setTempDir(sys_get_temp_dir()); //set custom tempdir

    $styles1 = array( 'font'=>'Arial','font-size'=>14,'font-style'=>'bold', 'fill'=>'#eee', 'halign'=>'center', 'border'=>'left,right,top,bottom');
    $styles2 = array( 'font'=>'Arial','font-size'=>10,'font-style'=>'bold', 'fill'=>'#eee', 'halign'=>'center', 'border'=>'left,right,top,bottom');
    //----
    $fname = $filename . '.xlsx';
    $sheet1 = $filename;
    $rows = $data;

    $col_options = [
        'widths' => $cols_width,
        'title_row' => [$title],
        'title_style' => $styles1,
        'style' => $styles2
    ];
    
    $writer->writeSheetHeader($sheet1, $header, $col_options);
    $writer->markMergedCell($sheet1, $start_row = 0, $start_col = 0, $end_row = 0, $end_col = count($header) - 1);

    foreach ($rows as $row)
        $writer->writeSheetRow($sheet1, $row);

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $fname . '"');
    header('Cache-Control: max-age=0');
    $writer->writeToStdOut();
}
