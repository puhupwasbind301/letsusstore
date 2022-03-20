
<?php 
// echo '<pre>';
// print_r($request_detail);
// exit();
// include('config.php');
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// $id = $_GET['id'];
// $sql = mysqli_query($con,"SELECT * FROM users WHERE id='$id'");
// $user = mysqli_fetch_assoc($sql);

// $invoice = $invoiceData;
// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
require('details_pdf.php');

$html = ob_get_contents();
ob_get_clean();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('print-details.pdf',['Attachment'=>($pdf==='download')?true:false]);
