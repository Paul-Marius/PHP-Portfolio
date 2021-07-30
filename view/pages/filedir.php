<?php

$pdffilename = '/../../assets/Paul-Besliu-Resume.pdf';
$fileDir = __DIR__ . $pdffilename;

header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename="FisierulMeu.pdf"');
header("Content-type:application/pdf");

echo file_get_contents($fileDir);
exit;
