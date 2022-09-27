<?php include 'conn.php';
 // Taking all 5 values from the form data(input)

 if(isset($_POST['toll_number']) || isset($_POST['toll_fax']) || isset($_POST['name_patient']) || isset($_POST['gender']) || isset($_POST['age']) || isset($_POST['dob']) || isset($_POST['contact_patient']) || isset($_POST['contact_relative']) || isset($_POST['insured_number'])|| isset($_POST['policy_number'])|| isset($_POST['mediclaim'])|| isset($_POST['company_name']) || isset($_POST['physician'])|| isset($_POST['name_physician'])|| isset($_POST['contact_physician'])|| isset($_POST['name_doctor'])|| isset($_POST['contact_doctor'])|| isset($_POST['nature_illness'])|| isset($_POST['relevant'])|| isset($_POST['duration'])|| isset($_POST['date_consultation'])|| isset($_POST['past_history'])|| isset($_POST['diagnosis'])|| isset($_POST['icd_code'])|| isset($_POST['line_treatment']) || isset($_POST['invest_medical']) || isset($_POST['route_drug']) || isset($_POST['name_surgery']) || isset($_POST['icd_pcs']) || isset($_POST['other_treatment']) || isset($_POST['injury_occur'])){


//     // print_r($_POST);die;
    $post_id =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
    $toll_number =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
    $toll_fax =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
    
  
//patient       
$employeeid = !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$name_patient =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$gender =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$age = !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$dob =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$contact_patient =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$contact_relative =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$insured_number =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$policy_number =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$mediclaim =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$company_name =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$physician =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$name_physician =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$contact_physician =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';

//doctor
$name_doctor  =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$contact_doctor  =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$nature_illness  =  !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$relevant  = mysqli_real_escape_string($conn, $_POST['relevant']);
$duration  = mysqli_real_escape_string($conn, $_POST['duration']);
$date_consultation  = mysqli_real_escape_string($conn, $_POST['date_consultation']);
$past_history  = mysqli_real_escape_string($conn, $_POST['past_history']);
$diagnosis  = mysqli_real_escape_string($conn, $_POST['diagnosis']);
$icd_code  = mysqli_real_escape_string($conn, $_POST['icd_code']);
$line_treatment  = mysqli_real_escape_string($conn, $_POST['line_treatment']);
$invest_medical  = mysqli_real_escape_string($conn, $_POST['invest_medical']);
$route_drug  = mysqli_real_escape_string($conn, $_POST['route_drug']);
$name_surgery  = mysqli_real_escape_string($conn, $_POST['name_surgery']);
$icd_pcs  = mysqli_real_escape_string($conn, $_POST['icd_pcs']);
$other_treatment  = mysqli_real_escape_string($conn, $_POST['other_treatment']);
$injury_occur  = mysqli_real_escape_string($conn, $_POST['injury_occur']);

    if($_POST['post_id'] != ''){

        //updating data
        $sql = "UPDATE  admin SET toll_number='".$toll_number."' , toll_fax='".$toll_fax."' , name_patient = '".$name_patient."', gender = '".$gender."' , age = '".$age."' , dob = '".$dob."' , contact_patient = '".$contact_patient."' , contact_relative = '".$contact_relative."' , insured_number = '".$insured_number."' , policy_number = '".$policy_number."' , mediclaim = '".$mediclaim."' , company_name = '".$company_name."' ,  physician = '".$physician."' , name_physician = '".$name_physician."' , contact_physician = '".$contact_physician."' , name_doctor = '".$name_doctor."' , contact_doctor = '".$contact_doctor."' , nature_illness = '".$nature_illness."' , relevant = '".$relevant."' , duration = '".$duration."' , date_consultation = '".$date_consultation."' , past_history = '".$past_history."' , diagnosis = '".$diagnosis."' , icd_code = '".$icd_code."', line_treatment = '".$line_treatment."' , invest_medical = '".$invest_medical."' , route_drug = '".$route_drug."' , name_surgery = '".$name_surgery."' , icd_pcs = '".$icd_pcs."' , other_treatment = '".$other_treatment."' , injury_occur = '".$injury_occur."'    where id = '".$_POST['post_id']."'";
        mysqli_query($conn,$sql);
        
        
    }
    else{
        print_r($_POST); die;
        //inserting data
$sql = "INSERT INTO admin(toll_number,toll_fax,employeeid,name_patient,gender,age,dob,contact_patient,contact_relative,insured_number,policy_number,mediclaim,company_name,physician,name_physician,contact_physician,name_doctor,contact_doctor,nature_illness,relevant,duration,date_consultation,past_history,diagnosis,icd_code,line_treatment,invest_medical,route_drug,name_surgery,icd_pcs,other_treatment,injury_occur) VALUES('$toll_number','$toll_fax','$employeeid','$name_patient','$gender','$age','$dob','$contact_patient','$contact_relative','$insured_number','$policy_number','$mediclaim','$company_name','$physician','$name_physician','$contact_physician','$name_doctor','$contact_doctor','$nature_illness','$relevant','$duration','$date_consultation','$past_history','$diagnosis','$icd_code','$line_treatment','$invest_medical','$route_drug','$name_surgery','$icd_pcs','$other_treatment','$injury_occur')";
        mysqli_query($conn,$sql);
        $last_insert_id = mysqli_insert_id($conn);

        echo $last_insert_id;exit;
    }}
               ?>
         
    