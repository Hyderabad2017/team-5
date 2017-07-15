<?php




$con=mysql_connect("localhost","root","");

if(!$con)
{
	die("cannot connect:".mysql_error());
}
if(!mysql_select_db("iandeye",$con))
{
	echo 'database not selected';
}

if(isset($_POST['submit']))
	

	$name	= $_POST['name'];
	$email	= $_POST['email'];
	$password	= $_POST['password'];
	$repassword	= $_POST['repassword'];
	$qualification	= $_POST['qualification'];
	$contact	= $_POST['contact'];
	$alternatec	= $_POST['alternatec'];
	$location	= $_POST['location'];
	$language1	= $_POST['language1'];
	$language2		= $_POST['language2'];
{
	$sql = "INSERT  INTO `scribe` (`id`, `name`, `email`, `password`, `repassword`, `qualification`,`contact`, `alternatec`, `location`, `language1`, `language2`) 
				VALUES (NULL, '{$name}','{$email}', '{$password}', '{$repassword}','{$qualification}','{$contact}','{$alternatec}','{$location}','{$language1}','{$language2}')";
	
	if(!mysql_query($sql,$con))
	{
		echo 'not inserted';
	}
	else{
		echo 'insertedddddddddddddd';

		exit();
	}
	
	mysql_close($con);
}

?>
