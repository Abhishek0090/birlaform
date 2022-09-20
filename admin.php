<?php
include 'conn.php';


$toll_number = $_REQUEST['toll_number'];
$toll_fax = $_REQUEST['toll_fax'];

$sql = "INSERT INTO admin(toll_number,toll_fax) VALUES('$toll_number','$toll_fax')";
$result = mysqli_query($conn,$sql);

if($result){
    echo "data saved successfully";
}
else{
    echo "Error occured";
}
?>
