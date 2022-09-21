<?php include 'conn.php';
 // Taking all 5 values from the form data(input)

 if(isset($_POST['toll_number']) && isset($_POST['toll_fax'])){


//     // print_r($_POST);die;
    $post_id = mysqli_real_escape_string($conn, $_POST["postid"]); 
    $toll_number = mysqli_real_escape_string($conn, $_POST["toll_number"]);
    $toll_fax = mysqli_real_escape_string($conn, $_POST["toll_fax"]);

    if($post_id != ''){

        //updating data
        $sql = "UPDATE  admin SET toll_number='".$toll_number."' , toll_fax='".$toll_fax."' where id = '".$_POST['postid']."'";
        mysqli_query($conn,$sql);
        
        
    }
    else{
        
        //inserting data
        $sql = "INSERT INTO admin(toll_number,toll_fax) VALUES ('".$toll_number."','".$toll_fax."')";
        mysqli_query($conn,$sql);
        $last_insert_id = mysqli_insert_id($conn);
        echo $last_insert_id;exit;
       
        // $inputdata =  $_REQUEST['inputdata'];
 
        // // $patientid = $_REQUEST['patientid'];
       
        // $colname = $_REQUEST['colname'];
       
        // // $sql = "UPDATE  admin SET ".$colname."='".$inputdata."'   WHERE id='".$patientid."'"
        // $sql = "INSERT INTO admin($colname) VALUES ('".$inputdata."')";

        //     //    $sql = "UPDATE  admin SET ".$colname."='".$inputdata."'   WHERE id='".$patientid."'" ;
       
        //  if(mysqli_query($conn, $sql)){
        //            echo "data has been update successfully";
        //        } else{
        //            echo "ERROR: Hush! Sorry $sql. "
        //                . mysqli_error($conn);
        //        }
       
               ?>
         
      
 