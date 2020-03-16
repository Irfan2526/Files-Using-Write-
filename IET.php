<?php
//You are Using The fwrite function---
if(isset($_POST['fwrite']))
{
	$data="Hello.txt";
	$handle=fopen($data,"w");
	$using="Hii! You are using the FWRITE fnction";
    fwrite($handle,$using);
	$email=$_POST['email'];
	$text=$_POST['write'];
	$to=$email;
	$subject=$using;
	$message=$text;
	$send=mail($to,$subject,$message);
	if($send == true)
	{
		echo "Mail Send Successfully pLease Check Your Email"."<br>";
	}
	fclose($handle);
	echo $text;

}
//You are Using The file_put_contents function---
if(isset($_POST['file_put_contents']))
{
	$file1="jamia.txt";
	$email1=$_POST['email'];
	$text1=$_POST['write'];
	$data="Hii! You are using the File_Put_Contents fnction";
	file_put_contents($file1,$text1,'a');
	
	$to1=$email1;
	$subject1=$data;
	$message1=$text1;
	$send=mail($to1,$subject1,$message1);
	if($send == true)
	{
		echo "Mail Send Successfully pLease Check Your Email"."<br>";
	}
echo $text1;
}





?>
<!DOCTYPE html>
<html lang="us-en">
<head>
	<meta charset="utf-8">
</head>
<body>
	<center>
	<h2>Hii! Welcome to our Page</h2>
<form method="post" action="">
	<p><b>Email Id:</b><input type="email" name="email" placeholder="Please enter your Email Id" required></p>
	<p><textarea rows = "5" cols = "50" name = "write" placeholder="Please Enter Some Pragraph--" ></textarea></p>
	<p>
		<input type="submit" name="fwrite" value="Fwrite">
		<input type="submit" name="file_put_contents" value="File_put_contents">
	</p>
</form>
</center>
</body>


