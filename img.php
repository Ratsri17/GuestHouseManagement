  <?php

                                include("dbconnect.php");

                                 $cat_sql = "SELECT * FROM `test img` ";
                                 $cat_query = mysqli_query($dbconnect, $cat_sql);
                                 $cat_rs = mysqli_fetch_assoc($cat_query);
                                 $row=mysqli_fetch_array($cat_query);
                
                               
                                while($row=mysqli_fetch_array($cat_query))
                                    
                                {
                                    
                                     
                                     echo'<img src=" '.$row['0'].' " />';
                                    
                                     
                                }
                
?>