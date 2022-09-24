
<?php



   	$link = mysqli_connect("localhost","root","","birlaform");
	$no = 0;
	$q = "SELECT * FROM `admin` ORDER BY id ASC";
	$res = mysqli_query($link,$q);
	$row = mysqli_num_rows($res);
    
   
	if($row > 0) { 
	while($row = mysqli_fetch_assoc($res) ) {

       echo $toll_number = $row['toll_number'];
        $toll_fax = $row['toll_fax'];
        $toll_number_exp = str_split($toll_number);
        print_r($toll_number_exp);die; 
         $toll_fax_exp = explode(" ",$row['toll_fax']);  

        echo "toll_number : ".$toll_number."<br>";
        echo "<pre>";
        print_r($toll_number_exp);
        echo "toll_fax : ".$toll_fax."<br>";
        print_r($toll_fax_exp);
        echo "</pre>";
	}
	} else {
        echo "Something went wrong" ;
	}



include "conn.php";

// Indexed Array
// $names_arr = array("Yogesh singh","Sonarika Bhadoria","Vijay Maurya");

// // Separate Array by " , "
// $names_str = implode(" , ",$names_arr);

// // Insert record
// $sql = "INSERT INTO contents_arr(name) VALUES('".$names_str."')";
// mysqli_query($con,$sql);

// Read record
$sql = mysqli_query($conn,"SELECT * FROM admin");
while($row = mysqli_fetch_assoc($sql)){
 
   $name = $row['name'];
   $name_explode = explode(" , ",$row['name']);  

   echo "name : ".$name."<br>";
   echo "<pre>";
   print_r($name_explode);
   echo "</pre>";
}




    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
hiii

</body>
</html>