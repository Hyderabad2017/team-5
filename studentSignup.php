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
	//$qualification	= $_POST['qualification'];
	$contact	= $_POST['contact'];
	$language	= $_POST['language'];
	$city	= $_POST['city'];
{
	$sql = "INSERT  INTO `scribe` (`id`, `name`, `email`, `password`, `repassword`,`contact`,`language`, `city`) 
				VALUES (NULL, '{$name}','{$email}', '{$password}', '{$repassword}','{$contact}','{$language}','{$city}')";
	
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





<!DOCTYPE html>
<html lang="en">

    <head>
     <script >
        
        function validateSignUp()
        {
            var u =document.getElementById('form-suname').value;
             //alert("aas"+u);   
            if(u ==="")
             {
             alert("enter username");
             }  

             var e=document.getElementById('form-semail').value;
              if(e ==="")
             {
             alert("enter email");
             }  
             else
             {
                var atpos = e.indexOf("@");
             var dotpos = e.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length) 
            {
                alert("Not a valid e-mail address");
       
                }
            }

             var p=document.getElementById('form-spassword').value;
             if(p ==="")
             {
             alert("enter password");
             }  
             var r=document.getElementById('form-srepassword').value;
             if(r ==="")
             {
                alert("enter password again");
             }
             if(p!==r)
             {
                alert("passwords dont match");

             }
             else
             {
                if (p.length<5) {
                    alert("password length min 5");
                }
             }
        }
    </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Registration</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong> Student Register</strong></h1>
                            <div class="description">
                            	<p>
	                            	Student Signup!!
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        
                       
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>

	                            <div class="form-bottom">
				                    <form role="form1" action="" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-Stusuname">User name</label>
				                        	<input type="text" name="name" placeholder="Username..." class="form-Stusuname form-control" id="form-Stusuname" value="">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-Stusemail">Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-Stusemail form-control" id="form-Stusemail" value="">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-Stuspassword">Password</label>
				                        	<input type="text" name="password" placeholder="Password..." class="form-Stuspassword form-control" id="form-Stuspassword" value="">
				                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-Stusrepassword">Re typePassword</label>
                                            <input type="text" name="repassword" placeholder="Retype Password..." class="form-Stusrepassword form-control" id="form-Stusrepassword" value="">
                                        </div>
				                     
										
										<div class="form-group">
											<label class="sr-only" for="form-Stucontact">Contact Number</label>
				                        	<input type="text" name="contact" placeholder="Contact Number..." class="form-contact form-Stucontrol" id="form-contact" value="">
				                        <br>
										</div>
								
										<div class="form-group">
                                            <label class="sr-only" for="form-Stulang1">language-1</label>
                                            <input type="text" name="form-Stulang1" placeholder="language-1" class="form-Stulang1 form-control" id="form-Stulang1" value="">
                                            <input type="radio" name="language" value="read"> Read<br>
  <input type="radio" name="lang1" value="write"> Write<br>
  <input type="radio" name="lang1" value="both">Both
                                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-Stucity">City</label>
				                        	<input type="text" name="city" placeholder="City..." class="form-Stucity form-control" id="form-Stucity" value="">
				                        </div>
										
				                        <button type="submit" class="btn" onclick="validateSignUp()">Sign me up!</button>
										
										<div>
										
										</div>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
