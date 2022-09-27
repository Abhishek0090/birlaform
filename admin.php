<?php include 'conn.php';
 // Taking all 5 values from the form data(input)

 if(isset($_POST['toll_number']) || isset($_POST['toll_fax']) || isset($_POST['name_patient']) || isset($_POST['gender']) || isset($_POST['age']) || isset($_POST['dob']) || isset($_POST['contact_patient']) || isset($_POST['contact_relative']) || isset($_POST['insured_number'])|| isset($_POST['policy_number'])|| isset($_POST['mediclaim'])|| isset($_POST['company_name']) || isset($_POST['physician'])|| isset($_POST['name_physician'])|| isset($_POST['contact_physician'])|| isset($_POST['name_doctor'])|| isset($_POST['contact_doctor'])|| isset($_POST['nature_illness'])|| isset($_POST['relevant'])|| isset($_POST['duration'])|| isset($_POST['date_consultation'])|| isset($_POST['past_history'])|| isset($_POST['diagnosis'])|| isset($_POST['icd_code'])|| isset($_POST['line_treatment']) || isset($_POST['invest_medical']) || isset($_POST['route_drug']) || isset($_POST['name_surgery']) || isset($_POST['icd_pcs']) || isset($_POST['other_treatment']) || isset($_POST['injury_occur'])){


//     // print_r($_POST);die;
    $post_id =  !empty($_POST['post_id']) ? mysqli_real_escape_string($conn, $_POST['post_id']) : '';
    $toll_number =  !empty($_POST['toll_number']) ? mysqli_real_escape_string($conn, $_POST['toll_number']) : '';
    $toll_fax =  !empty($_POST['toll_fax']) ? mysqli_real_escape_string($conn, $_POST['toll_fax']) : '';
    
  
//patient       
$employeeid = !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$name_patient =  !empty($_POST['name_patient']) ? mysqli_real_escape_string($conn, $_POST['name_patient']) : '';
$gender =  !empty($_POST['gender']) ? mysqli_real_escape_string($conn, $_POST['gender']) : '';
$age = !empty($_POST['age']) ? mysqli_real_escape_string($conn, $_POST['age']) : '';
$dob =  !empty($_POST['dob']) ? mysqli_real_escape_string($conn, $_POST['dob']) : '';
$contact_patient =  !empty($_POST['contact_patient']) ? mysqli_real_escape_string($conn, $_POST['contact_patient']) : '';
$contact_relative =  !empty($_POST['contact_relative']) ? mysqli_real_escape_string($conn, $_POST['contact_relative']) : '';
$insured_number =  !empty($_POST['insured_number']) ? mysqli_real_escape_string($conn, $_POST['insured_number']) : '';
$policy_number =  !empty($_POST['policy_number']) ? mysqli_real_escape_string($conn, $_POST['policy_number']) : '';
$mediclaim =  !empty($_POST['mediclaim']) ? mysqli_real_escape_string($conn, $_POST['mediclaim']) : '';
$company_name =  !empty($_POST['company_name']) ? mysqli_real_escape_string($conn, $_POST['company_name']) : '';
$physician =  !empty($_POST['physician']) ? mysqli_real_escape_string($conn, $_POST['physician']) : '';
$name_physician =  !empty($_POST['name_physician']) ? mysqli_real_escape_string($conn, $_POST['name_physician']) : '';
$contact_physician =  !empty($_POST['contact_physician']) ? mysqli_real_escape_string($conn, $_POST['contact_physician']) : '';

//doctor
$name_doctor  =  !empty($_POST['name_doctor']) ? mysqli_real_escape_string($conn, $_POST['name_doctor']) : '';
$contact_doctor  =  !empty($_POST['contact_doctor']) ? mysqli_real_escape_string($conn, $_POST['contact_doctor']) : '';
$nature_illness  =  !empty($_POST['nature_illness']) ? mysqli_real_escape_string($conn, $_POST['nature_illness']) : '';
$relevant  =  !empty($_POST['relevant']) ? mysqli_real_escape_string($conn, $_POST['relevant']) : '';
$duration  =  !empty($_POST['duration']) ? mysqli_real_escape_string($conn, $_POST['duration']) : '';
$date_consultation  =  !empty($_POST['date_consultation']) ? mysqli_real_escape_string($conn, $_POST['date_consultation']) : '';
$past_history  =  !empty($_POST['past_history']) ? mysqli_real_escape_string($conn, $_POST['past_history']) : '';
$diagnosis  =  !empty($_POST['diagnosis']) ? mysqli_real_escape_string($conn, $_POST['diagnosis']) : '';
$icd_code  =  !empty($_POST['icd_code']) ? mysqli_real_escape_string($conn, $_POST['icd_code']) : '';
$line_treatment  =  !empty($_POST['line_treatment']) ? mysqli_real_escape_string($conn, $_POST['line_treatment']) : '';
$invest_medical  =  !empty($_POST['invest_medical']) ? mysqli_real_escape_string($conn, $_POST['invest_medical']) : '';
$route_drug  =  !empty($_POST['route_drug']) ? mysqli_real_escape_string($conn, $_POST['route_drug']) : '';
$name_surgery  =  !empty($_POST['name_surgery']) ? mysqli_real_escape_string($conn, $_POST['name_surgery']) : '';
$icd_pcs  =  !empty($_POST['icd_pcs']) ? mysqli_real_escape_string($conn, $_POST['icd_pcs']) : '';
$other_treatment  =  !empty($_POST['other_treatment']) ? mysqli_real_escape_string($conn, $_POST['other_treatment']) : '';
$injury_occur  =  !empty($_POST['injury_occur']) ? mysqli_real_escape_string($conn, $_POST['injury_occur']) : '';

    if($_POST['post_id'] != ''){

        //updating data
        $sql = "UPDATE  admin SET toll_number='".$toll_number."' , toll_fax='".$toll_fax."' , name_patient = '".$name_patient."', gender = '".$gender."' , age = '".$age."' , dob = '".$dob."' , contact_patient = '".$contact_patient."' , contact_relative = '".$contact_relative."' , insured_number = '".$insured_number."' , policy_number = '".$policy_number."' , mediclaim = '".$mediclaim."' , company_name = '".$company_name."' ,  physician = '".$physician."' , name_physician = '".$name_physician."' , contact_physician = '".$contact_physician."' , name_doctor = '".$name_doctor."' , contact_doctor = '".$contact_doctor."' , nature_illness = '".$nature_illness."' , relevant = '".$relevant."' , duration = '".$duration."' , date_consultation = '".$date_consultation."' , past_history = '".$past_history."' , diagnosis = '".$diagnosis."' , icd_code = '".$icd_code."', line_treatment = '".$line_treatment."' , invest_medical = '".$invest_medical."' , route_drug = '".$route_drug."' , name_surgery = '".$name_surgery."' , icd_pcs = '".$icd_pcs."' , other_treatment = '".$other_treatment."' , injury_occur = '".$injury_occur."'    where id = '".$_POST['post_id']."'";
        mysqli_query($conn,$sql);
        echo $_POST['post_id'];
        
        
    }
    else{
        // print_r($_POST['age']); die;
        //inserting data
$sql = "INSERT INTO admin(toll_number,toll_fax,employeeid,name_patient,gender,age,dob,contact_patient,contact_relative,insured_number,policy_number,mediclaim,company_name,physician,name_physician,contact_physician,name_doctor,contact_doctor,nature_illness,relevant,duration,date_consultation,past_history,diagnosis,icd_code,line_treatment,invest_medical,route_drug,name_surgery,icd_pcs,other_treatment,injury_occur) VALUES('$toll_number','$toll_fax','$employeeid','$name_patient','$gender','$age','$dob','$contact_patient','$contact_relative','$insured_number','$policy_number','$mediclaim','$company_name','$physician','$name_physician','$contact_physician','$name_doctor','$contact_doctor','$nature_illness','$relevant','$duration','$date_consultation','$past_history','$diagnosis','$icd_code','$line_treatment','$invest_medical','$route_drug','$name_surgery','$icd_pcs','$other_treatment','$injury_occur')";
        mysqli_query($conn,$sql);
        $last_insert_id = mysqli_insert_id($conn);

        echo $last_insert_id;exit;
    }}
               ?>
         
    