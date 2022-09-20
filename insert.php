<?php
include 'conn.php';



    
    

//admin
$toll_number = $_REQUEST['toll_number'];
$toll_fax = $_REQUEST['toll_fax'];

$sql1 = "INSERT INTO admin(toll_number,toll_fax) VALUES('$toll_number','$toll_fax')";
$result1 = mysqli_query($conn,$sql1);


//patient
$employeeid = $_REQUEST['employeeid'];
$name_patient = $_REQUEST['name_patient'];
$gender = $_REQUEST['gender'];
$age = $_REQUEST['age'];
$dob = $_REQUEST['dob'];
$contact_patient = $_REQUEST['contact_patient'];
$contact_relative = $_REQUEST['contact_relative'];
$insured_number = $_REQUEST['insured_number'];
$policy_number = $_REQUEST['policy_number'];
$mediclaim = $_REQUEST['mediclaim'];
$company_name = $_REQUEST['company_name'];
$physician = $_REQUEST['physician'];
$name_physician = $_REQUEST['name_physician'];
$contact_physician = $_REQUEST['contact_physician'];

$sql2 = "INSERT INTO patient(employeeid,name_patient,gender,age,dob,contact_patient,contact_relative,insured_number,policy_number,mediclaim,company_name,physician,name_physician,contact_physician) VALUES('$employeeid','$name_patient','$gender','$age','$dob','$contact_patient','$contact_relative','$insured_number','$policy_number','$mediclaim','$company_name','$physician','$name_physician','$contact_physician')";
$result2 = mysqli_query($conn,$sql2);


//doctor

$name_doctor  = $_REQUEST['name_doctor'];
$contact_doctor  = $_REQUEST['contact_doctor'];
$nature_illness  = $_REQUEST['nature_illness'];
$relevant  = $_REQUEST['relevant'];
$duration  = $_REQUEST['duration'];
$date_consultation  = $_REQUEST['date_consultation'];
$past_history  = $_REQUEST['past_history'];
$diagnosis  = $_REQUEST['diagnosis'];
$icd_code  = $_REQUEST['icd_code'];
$line_treatment  = $_REQUEST['line_treatment'];
$invest_medical  = $_REQUEST['invest_medical'];
$route_drug  = $_REQUEST['route_drug'];
$name_surgery  = $_REQUEST['name_surgery'];
$icd_pcs  = $_REQUEST['icd_pcs'];
$other_treatment  = $_REQUEST['other_treatment'];
$injury_occur  = $_REQUEST['injury_occur'];




$sql3 = "INSERT INTO doctor(name_doctor,contact_doctor,nature_illness,relevant,duration,date_consultation,past_history,diagnosis,icd_code,line_treatment,invest_medical,route_drug,name_surgery,icd_pcs,other_treatment,injury_occur) VALUES('$name_doctor','$contact_doctor','$nature_illness','$relevant','$duration','$date_consultation','$past_history','$diagnosis','$icd_code','$line_treatment','$invest_medical','$route_drug','$name_surgery','$icd_pcs','$other_treatment','$injury_occur')";
$result3 = mysqli_query($conn,$sql3);

if($result1){
    echo "data saved successfully";
   
}
else{
    echo "Error occured";
}
if($result2){
    echo "data saved successfully";

    
}
else{
    echo "Error occured";
}
if($result3){
    echo "data saved successfully";
   
    
}
else{
    echo "Error occured";
}

?>