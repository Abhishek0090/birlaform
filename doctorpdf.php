<?php


$html = '';
$html = '<table border="1" cellspacing="0" cellspadding="0" width="100%">
	<thead>
	    <tr>
			<th>No</th>
			<th>name_doctor</th>
			<th>contact_doctor</th>
			<th>nature_illness</th>
			<th>relevant</th>
			<th>duration</th>
			<th>date_consultation</th>
			<th>past_history</th>
			<th>diagnosis</th>
			<th>icd_code</th>
			<th>line_treatment</th>
			<th>invest_medical</th>
			<th>route_drug</th>
			<th>name_surgery</th>
			<th>icd_pcs</th>
			<th>other_treatment</th>
			<th>injury_occur</th>
	    </tr>
  </thead>
   <tbody>';
   	$link = mysqli_connect("localhost","root","","birlaform");
	$no = 1;

	$q = "SELECT * FROM `doctor` ORDER BY doctorid DESC";
	$res = mysqli_query($link,$q);
	$row = mysqli_num_rows($res);
	if($row > 0) { 
	while($row = mysqli_fetch_assoc($res)) {
	    $html .= '<tr align="center"><td>'.$no.'</td>
	    <td>'.$row['name_doctor'].'</td>
	    <td>'.$row['contact_doctor'].'</td>
	    <td>'.$row['nature_illness'].'</td>
	    <td>'.$row['relevant'].'</td>
	    <td>'.$row['duration'].'</td>
	    <td>'.$row['date_consultation'].'</td>
	    <td>'.$row['past_history'].'</td>
	    <td>'.$row['diagnosis'].'</td>
	    <td>'.$row['icd_code'].'</td>
	    <td>'.$row['line_treatment'].'</td>
	    <td>'.$row['invest_medical'].'</td>
	    <td>'.$row['route_drug'].'</td>
	    <td>'.$row['name_surgery'].'</td>
	    <td>'.$row['icd_pcs'].'</td>
	    <td>'.$row['other_treatment'].'</td>
	    <td>'.$row['injury_occur'].'</td>';
	   
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
    $file = time().'.pdf';
	// $mpdf->Output($file,'D');
    $mpdf->Output();
	exit;

    ?>