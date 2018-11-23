<?php
include("dbconnect.php");
    if(isset($_POST['submit']))
    {
            $username=$_POST['username'];
            $facultyid=$_POST['facultyid'];
            $email=$_POST['email'];
            $department=$_POST['department'];
            $designation=$_POST['designation'];
            $phone=$_POST['phone'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            if($password==$cpassword)
		    {
			     $query= "select * from facultydetails WHERE name='$username'";
			     $query_run = mysqli_query($dbconnect,$query);

			     if(mysqli_num_rows($query_run)>0)
			     {
				    echo'<script type= "text/javascript"> alert("email already registered") </script>';

			    }

			     {
			        #$query="INSERT into signup values('$username','$email','$phone','$password')";

            $query = "INSERT INTO `guesthouse`.`facultydetails` (`name`,`facultyid`,`email`,`department`,`designation`, `phone`, `password`,`cpassword`) VALUES ('$username','$facultyid','$email','$department','$designation','$phone','$password','$cpassword');";

}
				    $query_run = mysqli_query($dbconnect,$query);

				    if($query_run)
				    {
					   echo'<script type= "text/javascript"> alert(" Registered. Now login") </script>';
				    }

				    else
				    {
					   echo'<script type= "text/javascript"> alert("error") </script>';
				    }
		          }
            }
		    else
		    {
                echo'<script type= "text/javascript"> alert("password do not match") </script>';
		    }

?>
