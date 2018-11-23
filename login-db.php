<?php
    include("dbconnect.php");

    if(isset($_POST['login']))
    {
            $email=$_POST['email'];
            $password=$_POST['password'];

			     $query= "select * from facultydetails WHERE email='$email' And password = '$password'";
			     $query_run = mysqli_query($dbconnect,$query);

			     if(mysqli_num_rows($query_run)>0)
			     {
                     if(isset($_POST['checkbox']))
                     {
                         setcookie('email',$email,time()+60*60*7);
                     }
                     session_start();
				     $_SESSION['email']=$email;
                     header("location:index.php");

			     }

				 else
				    {
					   echo'<script type= "text/javascript">window.alert("invalid email or password") </script>';
                       echo'<p class="msg">invalid</p>';
				    }

     }
    else
    {
        #header("location: login.php");
    }

?>
