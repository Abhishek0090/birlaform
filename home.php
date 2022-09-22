<?php


$html = '<table border="1" cellspacing="0" cellspadding="0" width="100%">
	<thead>
	    <tr>
			<th>No</th>
			<th>toll_number</th>
			<th>toll_fax</th>
			
	    </tr>
  </thead>
   <tbody>';
   	$link = mysqli_connect("localhost","root","","birlaform");
	$no = 1;
	$q = "SELECT * FROM `admin` ORDER BY id DESC";
	$d = "SELECT * FROM `doctor` ORDER BY id DESC";
	$p = "SELECT * FROM `patient` ORDER BY id DESC";
	$res = mysqli_query($link,$q);
	$row = mysqli_num_rows($res);
	if($row > 0) { 
	while($row = mysqli_fetch_assoc($res)) {
	    $html .= '<tr align="center"><td>'.$no.'</td>
	    <td>'.$row['toll_number'].'</td>
	    <td>'.$row['toll_fax'].'</td>';
	   
	    $no++;
	}
	} else {
		$html .= '<tr align="center"><td colspan="8">No Event</td></tr>';
	}

   	$html .= '</tbody></table>';

	require_once __DIR__ . '/vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'A4-L' ]);
	$mpdf->SetDisplayMode('fullpage');
	$mpdf->WriteHTML( $html);
	/* $mpdf->Output( 'devnote.pdf', 'F' ); */
	$file = time().'.pdf';
	// $mpdf->Output($file,'D');
	$mpdf->Output();
	exit;

    ?>