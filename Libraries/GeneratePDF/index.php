<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

//$html = "<h1>Hello world!</h1><p>This is the content of the page.<br>This PDF has been created using <b>PHP</b> and the <b>HTML2Pdf</b> library.</p>";

ob_start();
require_once 'pdfToGenerate.php';
$html = ob_get_clean();

if (isset($html)) {
$html2pdf->writeHTML($html);
}
$html2pdf->output('generated-pdf');