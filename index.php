<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'format'=>'A4',
    'orientation'=>'p',
    'margin_left'=>10,
    'default_font'=>'bangla',
    'mode'=>'uft-8'
]);

$data=file_get_contents('Print/print.php');

$mpdf->WriteHTML($data);
$mpdf->Output();

