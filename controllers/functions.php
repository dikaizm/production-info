<?php

require('xlsxwriter.class.php');

function writeXLSX(string $filename, array $header, array $rows, array $title)
{
    $writer = new XLSXWriter();

    $fname = $filename . '.xlsx';
    $sheet1 = $title;
    
    array_unshift($rows, $title);

    $writer->writeSheetHeader($sheet1, $header, $col_options = ['suppress_row'=>true] );
    foreach($rows as $row)
        $writer->writeSheetRow($sheet1, $row);
    $writer->markMergedCell($sheet1, $start_row=0, $start_col=0, $end_row=0, $end_col=3);

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $fname . '"');
    header('Cache-Control: max-age=0');
    $writer->writeToStdOut();
}