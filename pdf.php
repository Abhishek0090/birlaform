<?php

require_once __DIR__ . '/vendor/autoload.php';


    $a = file_get_contents('http://localhost/Abhishek/birlaform/home.php')

	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'A4-L' ]);
	$mpdf->SetDisplayMode('a');
	$mpdf->WriteHTML( $html );
	/* $mpdf->Output( 'devnote.pdf', 'F' ); */ Direct download your project directory
	$mpdf->Output();

?>
