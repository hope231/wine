<?php
    $name = $_POST['name'];
	 $phone = $_POST['phone'];
	 $subject = $_POST['subject']

	$to = "hopeqrtx@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    адрес: $subject"; 	
	mail($to, $subject, $msg);

?>

<p>Привет, форма отправлена</p>