 
 <?php  
 ini_set('display_errors', 1);
 $connect = mysqli_connect("localhost", "root", "", "birlaform");

 $field_name = $_POST['field_name'];
 $field_val = mysqli_real_escape_string($connect, $_POST["field_val"]);
 
 if($_POST['post_id'] !=''){
  $sql = "UPDATE admin SET '$field_name' = '".$field_val."' WHERE id = '".trim($_POST["post_id"])."' ";
  $res =  mysqli_query($connect, $sql); 
  echo $_POST["post_id"];
 }
 else{
  $sql = "INSERT INTO admin($field_name) VALUES ('".$field_val."')";  
  $res = mysqli_query($connect, $sql);  
  echo mysqli_insert_id($connect); 
 } 
 ?>