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
             alert("enter name");
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
        <title>Bootstrap Login &amp; Register Templates</title>

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
                            <h1><strong> </strong></h1>
                            <div class="description">
                            	<p>
	                            	<b>REQUEST FOR SCRIBE</b>
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
				                    <form role="form1" action="singupp.php" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-suname">User name</label>
				                        	<input type="text" name="form-suname" placeholder="Username..." class="form-suname form-control" id="form-suname" value="">
				                        </div>

				                        <div class="form-group">
				                        	<label class="sr-only" for="form-semail">Email</label>
				                        	<input type="text" name="form-semail" placeholder="Email..." class="form-semail form-control" id="form-semail" value="">
				                        </div>
                                        <div class="form-contact">
                                            <label class="sr-only" for="form-contanct">loc</label>
                                            <input type="text" name="form-contanct" placeholder="contact" class="form-contact form-control" id="form-contact" value="">
                                        </div>
                                        </br>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-lang1">language-1</label>
                                            <input type="text" name="form-lang1" placeholder="language-1" class="form-lang1 form-control" id="form-lang1" value="">
                                            <input type="radio" name="lang1" value="read"> Read<br>
  <input type="radio" name="lang1" value="write"> Write<br>
  <input type="radio" name="lang1" value="both">Both
                                        </div>

                                        <div class="form-group">
                                            <label class="sr-only" for="form-lang">language-2</label>
                                            <input type="text" name="form-lang2" placeholder="language-2" class="form-lang2 form-control" id="form-lang2" value="">
                                            <input type="radio" name="lang2" value="read"> Read<br>
  <input type="radio" name="lang2" value="write"> Write<br>
  <input type="radio" name="lang2" value="both">Both
                                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-exam">Exam</label>
				                        	<input type="text" name="form-spassword" placeholder="Exam" class="form-exam
                                             form-control" id="form-exam" value="">
				                        </div>
                                         <div class="form-group">
                                            <label class="sr-only" for="form-date">date</label>
                                            <input type="text" name="form-date" placeholder="date" class="form-date
                                             form-control" id="form-date" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-altcon">altcon</label>
                                            <input type="text" name="form-altcon" placeholder="alternative contact" class="form-altcon form-control" id="form-altcon" value="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="sr-only" for="form-loc">loc</label>
                                            <input type="text" name="form-loc" placeholder="Location" class="form-loc form-control" id="form-loc" value="">
                                        </div>
                                        
				                        
				                        <button type="submit" class="btn" onclick="validateSignUp()">Request for scribe</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        			
        		</div>
        	</div>
        </footer>

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
<?php
echo "hi";
