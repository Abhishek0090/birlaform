 
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "birlaform");


 if(isset($_POST["employeeid"]) && isset($_POST["name_patient"]) &&
 isset($_POST["age"]) && isset($_POST["gender"]) &&
 isset($_POST["dob"]) && isset($_POST["contact_patient"]) 
 isset($_POST["contact_relative"]) && isset($_POST["insured_number"]) 
 isset($_POST["policy_number"]) && isset($_POST["mediclaim"]) 
isset($_POST["company_name"]) && isset($_POST["physician"]) 
 isset($_POST["name_physician"]) && isset($_POST["contact_physician"]) 
 )
 {
  $employeeid  = mysqli_real_escape_string($connect, $_POST["employeeid "]);
  $name_patient = mysqli_real_escape_string($connect, $_POST["name_patient"]);
  $age = mysqli_real_escape_string($connect, $_POST["age"]);
  $gender = mysqli_real_escape_string($connect, $_POST["gender"]);
  $dob = mysqli_real_escape_string($connect, $_POST["dob"]);
  $contact_patient = mysqli_real_escape_string($connect, $_POST["contact_patient"]);
  $contact_relative = mysqli_real_escape_string($connect, $_POST["contact_relative"]);
  $insured_number = mysqli_real_escape_string($connect, $_POST["insured_number"]);
  $policy_number = mysqli_real_escape_string($connect, $_POST["policy_number"]);
  $mediclaim = mysqli_real_escape_string($connect, $_POST["mediclaim"]);
  $company_name = mysqli_real_escape_string($connect, $_POST["company_name"]);
  $physician = mysqli_real_escape_string($connect, $_POST["physician"]);
  $name_physician = mysqli_real_escape_string($connect, $_POST["name_physician"]);
  $contact_physician = mysqli_real_escape_string($connect, $_POST["contact_physician"]);


  if($_POST["patientid"] != '')  
  {  
    //update post  
    // $sql = "UPDATE admin SET toll_number = '".$toll_number."', toll_fax = '".$toll_fax."' WHERE id = '".$_POST["postid"]."'";  
    // mysqli_query($connect, $sql);  
    echo "UPdate is required";
  }  
  else  
  {  
    //insert post  
    $sql = "INSERT INTO patient(employeeid, name_patient,age,gender,dob,contact_patient,contact_relative,insured_number,policy_number,mediclaim,company_name,physician,name_physician,contact_physician) VALUES ('".$employeeid."', '".$name_patient."','".$age."','".$gender."','".$dob."','".$contact_patient."','".$contact_relative."','".$insured_number."','".$policy_number."','".$mediclaim."','".$company_name."','".$physician."','".$name_physician."','".$contact_physician."','".$contact_physician."')";  
    mysqli_query($connect, $sql);  
    echo mysqli_insert_id($connect);  
  }
 }  
 ?>