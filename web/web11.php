<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$conn=new mysqli('localhost:3306','root','','web');
if($conn->connect_error) {
    die('Connection failed :'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("Insert into Login(name,email,password)values(?,?,?)");
$stmt->bind_param("sss",$name,$email,$password);
$stmt->execute();
echo "successfull";
$stmt->close();
$conn->close();

}
?>