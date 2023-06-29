<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"]; 
    $message = $_POST["message"];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contactinfo";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn){
        die("connection failed: ". mysqli_connect_error());
    }

    $sql = "INSERT INTO contactdetails (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)){
        echo "message received! ";
    } else {
        echo "Error: ". $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}





























/*$full_name = $_POST['full_name'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'contactdetails');

if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into contactinfo(full_name, email, message) values(?,?,?)");
    $stmt->bind_param("sss",$full_name,$email,$message);
    $stmt->execute();
    echo "registration successfull...";
    $stmt->close();
    $conn->close();
}


/*$sql = "INSERT INTO contactdetails(full_name, email, message) VALUES('$full_name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
   echo "Data inserted successfully";
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}*/

?>


