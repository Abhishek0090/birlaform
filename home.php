
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	


<?php
$html = '<style>
body{
	background-image:url(bg.jpg);
	

	background-size: cover;
	
}
.margin{
	padding-top:130px
}
.alphabet{
    margin-right: 20px;
}

label{
    min-width: fit-content;
    margin-right: 120px;
}


.aligninput{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: start;
    margin: 6px;
    min-width: fit-content;
}
.checkwidth{
    margin-right: -7rem;
} 
input{
	margin-right:120px;
}
.blockwise{
	width : 12px;

	border : none;
	
}
</style>';


   	// $link = mysqli_connect("localhost","root","","birlaform");
	// $no = 1;
	// $q = "SELECT * FROM `admin` ORDER BY id DESC";
	// $res = mysqli_query($link,$q);
	// $row = mysqli_num_rows($res);
	// if($row > 0) { 
	// while($row = mysqli_fetch_assoc($res)) {
	//     $html .= '<tr align="center"><td>Name : '.$no.'</td>
	//     <td>Toll No:'.$row['toll_number'].'</td>
	//     <td>'.$row['toll_fax'].'</td></tr>';
	   
	//     $no++;
	// }
	
	$link = mysqli_connect("localhost","root","","birlaform");
	$no = 0;
	$q = "SELECT * FROM `admin` ORDER BY id ASC";
	$p = "SELECT * FROM `patient` ORDER BY employeeid ASC";
	$d = "SELECT * FROM `doctor` ORDER BY doctorid ASC";
	$res = mysqli_query($link,$q);
	$res1 = mysqli_query($link,$p);
	$res2 = mysqli_query($link,$d);
	$row = mysqli_num_rows($res);
	$row1 = mysqli_num_rows($res1);
	$row2 = mysqli_num_rows($res2);
    
   //for admin
	if($row > 0) { 
	if($row = mysqli_fetch_assoc($res) ) {

        $toll_number = $row['toll_number'];
        $toll_fax = $row['toll_fax'];
        $toll_number_exp = str_split($toll_number);
		$toll_fax_exp = str_split($toll_fax);
    
	}
	} else {
        echo "Something went wrong" ;
	}

	//for patient
	if($row1 > 0) { 

	
	if($row1 = mysqli_fetch_assoc($res1) ) {

        $employeeid = $row1['employeeid'];
        $name_patient = $row1['name_patient'];
        $gender = $row1['gender'];
        $age = $row1['age'];
        $dob = $row1['dob'];
        $contact_patient = $row1['contact_patient'];
        $contact_relative = $row1['contact_relative'];
        $insured_number = $row1['insured_number'];
        $policy_number = $row1['policy_number'];
        $mediclaim = $row1['mediclaim'];
        $company_name = $row1['company_name'];
        $physician = $row1['physician'];
        $name_physician = $row1['name_physician'];
        $contact_physician = $row1['contact_physician'];

		//split into string char
        $employeeid_exp = str_split($employeeid);
		$name_patient_exp = str_split($name_patient);
		$gender_exp = str_split($gender);
		$age_exp = str_split($age);
		$dob_exp = str_split($dob);
		$contact_patient_exp = str_split($contact_patient);
		$contact_relative_exp = str_split($contact_relative);
		$insured_number_exp = str_split($insured_number);
		$policy_number_exp = str_split($policy_number);
		$mediclaim_exp = str_split($mediclaim);
		$company_name_exp = str_split($company_name);
		$physician_exp = str_split($physician);
		$name_physician_exp = str_split($name_physician);
		$contact_physician_exp = str_split($contact_physician);
		
	}
	} else {
        echo "Something went wrong" ;
	}

	//for doctor

	if($row2 > 0) { 
	if($row2 = mysqli_fetch_assoc($res2) ) {

        $name_doctor = $row2['name_doctor'];
        $toll_fax = $row2['toll_fax'];
		// <td>'.$row['name_doctor'].'</td>
	    // <td>'.$row['contact_doctor'].'</td>
	    // <td>'.$row['nature_illness'].'</td>
	    // <td>'.$row['relevant'].'</td>
	    // <td>'.$row['duration'].'</td>
	    // <td>'.$row['date_consultation'].'</td>
	    // <td>'.$row['past_history'].'</td>
	    // <td>'.$row['diagnosis'].'</td>
	    // <td>'.$row['icd_code'].'</td>
	    // <td>'.$row['line_treatment'].'</td>
	    // <td>'.$row['invest_medical'].'</td>
	    // <td>'.$row['route_drug'].'</td>
	    // <td>'.$row['name_surgery'].'</td>
	    // <td>'.$row['icd_pcs'].'</td>
	    // <td>'.$row['other_treatment'].'</td>
	    // <td>'.$row['injury_occur'].'</td>';
	   




		//split into string char
        $name_doctor_exp = str_split($name_doctor);
		$toll_fax_exp = str_split($toll_fax);
    
	}
	} else {
        echo "Something went wrong" ;
	}
	$html .="

<div class=margin>
	<h3>DETAILS OF THE THIRD PARTY ADMINISTRATOR</h3><P>(To be filled in block letters)</P>
	<div>
		
		<span>a.</span> Name of TPA/Insurance Company : Aditya Birla Insurance Company Limited 
	</div>
	<div>
	<span>b.</span>
<label>Toll free phone number</label>";
for ($i=0; $i < 13; $i++) { 
	# code...
	if($i<count($toll_number_exp)){

		$html .="<input class=blockwise value=\"".$toll_number_exp[$i]."\">";
	}
	else{
		$html .= "
		<input  class=blockwise>";
	}
	
}
$html .="
	<input class=blockwise>
	<input  class=blockwise>
	<input  class=blockwise>
	<input  class=blockwise>
	<input  class=blockwise>
	<input  class=blockwise>
	<input  class=blockwise>
	<input  class=blockwise>
	<input  class=blockwise>
	<input  class=blockwise>
	<input  class=blockwise>
<input  class=blockwise>
 </div>
	<div>
	<span>c.</span>

<label>Toll free Fax</label>";
for ($i=0; $i < 10; $i++) { 
	# code...
	if($i<count($toll_fax_exp)){

		$html .="<input class=blockwise value=\"".$toll_fax_exp[$i]."\">";
	}
	else{
		$html .= "
		<input  class=blockwise>";
	}
}

$html .="
</div>
</div>

<h3>TO BE FILLED BY THE INSURED/PATIENT</h3>
<div>
<span>a.</span>

	<label >Name of the Patient</label>";
	for ($i=0; $i < 34; $i++) { 
		# code...
		if($i<count($name_patient_exp)){

			$html .="<input class=blockwise value=\"".$name_patient_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	</div>
<div>
<span>b.</span>
	<label>Gender</label>
	
<input type=checkbox checked >Male
<label></label>

<input type=checkbox>Female
<label></label>

</div>


<div>
	 <span>c.</span>
	
		
		<label>Age</label>";
		for ($i=0; $i < 4; $i++) { 
			# code...
			if($i<count($age_exp)){
	
				$html .="<input class=blockwise value=\"".$age_exp[$i]."\">";
			}
			else{
				$html .= "
				<input  class=blockwise>";
			}
		}
		$html .= "
		Years Months
</div>

<div>
<span>d.</span>

	<label>Date of Birth</label>";
	for ($i=0; $i < 9; $i++) { 
		# code...
		if($i<count($dob_exp)){

			$html .="<input class=blockwise value=\"".$dob_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	</div>

<div>
<span>e.</span>

	<label>Contact Number</label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($contact_patient_exp)){

			$html .="<input class=blockwise value=\"".$contact_patient_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>

<div>
<span>f.</span>

	<label>Contact number of attending relative</label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($contact_relative_exp)){

			$html .="<input class=blockwise value=\"".$contact_relative_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>

<div>
<span>g.</span>

	<label>Insured Card ID number</label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($insured_number_exp)){

			$html .="<input class=blockwise value=\"".$insured_number_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>

<div>
<span>h.</span>

	<label>Policy number / Name of corporate</label>";
	for ($i=0; $i < 28; $i++) { 
		# code...
		if($i<count($policy_number_exp)){

			$html .="<input class=blockwise value=\"".$policy_number_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	
	
</div>

<div>
<span>i.</span>

	<label>Employee ID</label>";
	for ($i=0; $i < 28; $i++) { 
		# code...
		if($i<count($employeeid_exp)){

			$html .="<input class=blockwise value=\"".$employeeid_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	
</div>

<div>
<span>j.</span>

	<label>Currently do you have any other Mediclaim/Health insurance</label>
	
<input type=checkbox  checked >
<label>
Yes

</label>


<input type=checkbox>
<label>No</label>
</div>

</div>
<div>
<div class=margin>
</div>
<span>k.</span>

	<label>Company Name:</label>
	<label>Give details</label>";
	for ($i=0; $i < 31; $i++) { 
		# code...
		if($i<count($company_name_exp)){

			$html .="<input class=blockwise value=\"".$company_name_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>
<div>
<span>l.</span>

	<label>Do you have any family  physician</label>
	
<input type=checkbox checked >
<label>Yes</label>

<input type=checkbox>No
<label></label>
</div>
</div>

<div>
<span>m.</span>

	<label>Name of the family physician</label>";
	for ($i=0; $i < 28; $i++) { 
		# code...
		if($i<count($name_physician_exp)){

			$html .="<input class=blockwise value=\"".$name_physician_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>
<div>
<span>n.</span>

	<label>Contact number if any :</label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($contact_physician_exp)){

			$html .="<input class=blockwise value=\"".$contact_physician_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	
	</div>
	

<p>PLEASE COMPLETE DECLARATION ON THE REVERSE SIDE OF THIS FORM</p>


	<h2>TO BE FILLED BY THE TREATING DOCTOR/HOSPITAL</h2>
	
	<div>
		<span>a.</span>
		
		<label>Name of the treating doctor :</label>";
		for ($i=0; $i < 28; $i++) { 
			# code...
			if($i<count($name_doctor_exp)){
	
				$html .="<input class=blockwise value=\"".$name_doctor_exp[$i]."\">";
			}
			else{
				$html .= "
				<input  class=blockwise>";
			}
		}
		$html .= "
	
	</div> 
	<div>
		<span>b.</span>
		
		<label>Contact number:</label>
		<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	
</div> 
<div>
	<span>c.</span>
	
	<label>Name of ILLNESS / Disease with presenting Complaints :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	
	
</div> 
<div>
	<span>d.</span>
	
	<label>Relevant clinical findings :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	
</div>

<div>
	<span>e.</span>
	
	<label>Duration of the present ailment :</label> 
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	
	
	
	<span>Days</span>
</div>
<div>
	<label>Date of first consultation :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	
	<label>Past history of present ailment if any :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	
	
	

</div>
<div>
	<span>f.</span>
	
	<label>Provisional diagnosis :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	
</div>
<div>
	<span>g.</span>
	
	<label>ICD 10 Code :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	
	
</div>
<div>
	<span>h.</span>
	
	<label>Proposed line of treatment :</label>
	<label>Medical Management Surgical Management Intensive care Investigation Non allopathic treatment.</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	
	
	
</div>
<div>
	<span>I.</span>
	
	<label>If Investigation &/or Medical Management provide :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	
	
</div>
<div>
	<span>j.</span>
	
	<label>Route of drug administartion :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
</div>
<div>
	<span>k.</span>
	
	<label>If Surgical, name of surgery :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
</div>
<div>
	<span>l.</span>
	
	<label>ICD 10 PCS Code :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	</div>
<div>
	<span>m.</span>
	
	<label>If other treatments provide details :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	
</div>
<div class=margin></div>
<div>
	<span>n.</span>
	
	<label>How did injury occur :</label>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise><input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
	<input class=blockwise>
</div>
"; 

   	// $link = mysqli_connect("localhost","root","","birlaform");
	// $no = 1;
	// $q = "SELECT * FROM `admin` ORDER BY id DESC";
	// $res = mysqli_query($link,$q);
	// $row = mysqli_num_rows($res);
	// if($row > 0) { 
	// while($row = mysqli_fetch_assoc($res)) {
	//     $html .= '<tr align="center"><td>Name : '.$no.'</td>
	//     <td>Toll No:'.$row['toll_number'].'</td>
	//     <td>'.$row['toll_fax'].'</td></tr>';
	   
	//     $no++;
	// }
	// } else {
	// 	$html .= '<tr aling="center"><td colspan="8">No Event</td></tr>';
	// }

   	// $html .= '</tbody></table>';

	require_once __DIR__ . '/vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'A4-L' ]);
	$mpdf->SetDisplayMode('fullpage');
	$mpdf->WriteHTML( $html);
	/* $mpdf->Output( 'devnote.pdf', 'F' ); */

	$mpdf->Output();

	
	exit;


    ?>

</body>
</html>