<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

// Get input Values
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$data .= '<h2>HTML TO PDF</h2>';

$data .= '<p><strong>Name : </strong>'.$name.'</p>';
$data .= '<p><strong>Email : </strong>'.$email.'</p>';
$data .= '<p><strong>Phone : </strong>'.$phone.'</p>';

if(!empty($message)){
	$data .= '<p><strong>Message : </strong><br>'.$message.'</p>';
}

$mpdf->WriteHTML($data);

if($mpdf->Output(''.$name.'.pdf','D')){
	header('location:index.php');
}


?>