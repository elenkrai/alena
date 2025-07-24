<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
echo $name;
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "Feedback");
/* Записываем данные в БД */ 
$sql = "INSERT INTO Proposal(Name, Email, Review) VALUES ('$name', '$email', '$message')";
$result=mysqli_query($link, $sql);
echo 1;
/* Делаем редирект обратно */
header("Location: ".$_SERVER["HTTP_REFERER"]); 
exit;
 
