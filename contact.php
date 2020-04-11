<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['mail'];
		$subject=$_POST['subject'];
		$msg=$_POST['message'];

		$to='thepetrolsociety@gmail.com';
		$subj="Form submission";
		$msv=$msg;
		$headers="From: ".$email;

		if(mail($to, $subj, $msv, $headers)){
			echo "<h1>Sent</h1>";

		}
		else{
			echo "Woops";

		}
	}
?>