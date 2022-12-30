<?php
 include 'connection.php';

$firstname = $_POST["firstname"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$email =$_POST["email"];
$password =$_POST["pwd"];
$telephone =(int)$_POST["phone"];
$age = (int)$_POST["age"];
$prefferedgender =$_POST["preff_gender"];
$interest =$_POST["interest"];

$sql ="INSERT INTO users(firstname, name, gender, email, password, phoneNumber, age ,preffered_gender , interest)
        VALUES ('$firstname' ,'$name','$gender','$email','$password','$telephone','$age','$prefferedgender','$interest');";

// echo $sql;
// echo $email;
// echo $password;

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
  
// }
//  else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

//  echo $prefferedgender;


$show = "SELECT firstname from users where gender = '$prefferedgender';";

$query= mysqli_query($conn, $show)->fetch_all(MYSQLI_ASSOC);


foreach($query as $var)
{
    echo "Name :" .$var["firstname"]. "<br>";
    

}




$conn->close();
 

?>









 



