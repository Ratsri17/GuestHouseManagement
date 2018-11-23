  <?php

                                include("dbconnect.php");

                                 $cat_sql = "SELECT * FROM `stock` ";
                                 $cat_query = mysqli_query($dbconnect, $cat_sql);
                                 $cat_rs = mysqli_fetch_assoc($cat_query);
                                 $row=mysqli_fetch_array($cat_query);
                
                               
                               do
                                   
                                    
                                {
                                    
                                     
                                     echo'<img src=" '.$row['15'].' " />';
                                    echo'<img src=" '.$row['14'].' " />';
                                    echo'<img src=" '.$row['13'].' " />';
                                    echo'<img src=" '.$row['12'].' " />';
                                    
                                     
                                }   
                                 while($row=mysqli_fetch_array($cat_query));

                
?>