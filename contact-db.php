<?php
    if(isset($_POST['submit']))
    {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
           
                     $query = "INSERT INTO `asheeta`.`contact_us` (`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message');";
														
				    $query_run = mysqli_query($dbconnect,$query);
				
				    if($query_run)
				    {
					    echo'<p class="msg">Thank You for Contacting Us</p>';
				    }
															
		    else
		    {
                echo'<script type= "text/javascript"> alert("Please send again!!") </script>';
		    }
}
?>