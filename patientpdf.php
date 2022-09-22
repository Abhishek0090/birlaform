<?php

$html = '';
$html = '<table border="1" cellspacing="0" cellspadding="0" width="100%">
	<thead>
	    <tr>
			<th>No</th>
			<th>employeeid</th>
			<th>name_patient</th>
			<th>gender</th>
			<th>age</th>
			<th>dob</th>
			<th>contact_patient</th>
			<th>contact_relative</th>
			<th>insured_number</th>
			<th>policy_number</th>
			<th>mediclaim</th>
			<th>company_name</th>
			<th>physician</th>
			<th>name_physician</th>
			<th>contact_physician</th>
	    </tr>
  </thead>
   <tbody>';
   	$link = mysqli_connect("localhost","root","","birlaform");
	$no = 1;

	$q = "SELECT * FROM `patient` ORDER BY employeeid DESC";
	$res = mysqli_query($link,$q);
	$row = mysqli_num_rows($res);
	if($row > 0) { 
	while($row = mysqli_fetch_assoc($res)) {
	    $html .= '<tr align="center"><td>'.$no.'</td>
	    <td>'.$row['employeeid'].'</td>
	    <td>'.$row['name_patient'].'</td>
	    <td>'.$row['gender'].'</td>
	    <td>'.$row['age'].'</td>
	    <td>'.$row['dob'].'</td>
	    <td>'.$row['contact_patient'].'</td>
	    <td>'.$row['contact_relative'].'</td>
	    <td>'.$row['insured_number'].'</td>
	    <td>'.$row['policy_number'].'</td>
	    <td>'.$row['mediclaim'].'</td>
	    <td>'.$row['company_name'].'</td>
	    <td>'.$row['physician'].'</td>
	    <td>'.$row['name_physician'].'</td>
	    <td>'.$row['contact_physician'].'</td>';
	   
	    $no++;
	}
	} else {
		$html .= '<tr aling="center"><td colspan="8">Nothing</td></tr>';
	}

   	$html .= '</tbody></table>';

	require_once __DIR__ . '/vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'A4-L' ]);
	$mpdf->SetDisplayMode('fullpage');
	$mpdf->WriteHTML( $html);
	/* $mpdf->Output( 'devnote.pdf', 'F' ); */
    $file = time().'.pdf';
	$mpdf->Output();
	// $mpdf->Output($file,'D');
	exit;

    ?>