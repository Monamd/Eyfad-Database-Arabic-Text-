



<?php


require('Connection.php');
$connect =mysqli_connect("sql201.epizy.com","epiz_26190033","3Yibo4YjUI","epiz_26190033_test");

 
 ?>
 
 

<!DOCTYPE html>
<html>


<body>



				
                
               <table class="table table-bordered">
                     <tr>
                          <th>Image</th>
                     </tr>
                <?php
                $query = "SELECT * FROM template";
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result))
                {
                     echo '
                          <tr>
                               <td>
									
									<a href=" Template_image\\'.$row['Template_path'].'" " download="Template_image\\'.$row['Template_path'].'"">
										<img src="Template_image\\'.$row['Template_path'].'" height="200" width="200"  class="img-thumnail"/>
										
									</a>
                                    
                               </td>
                          </tr>
                     ';
                }
				
				
				
                ?>
                </table>
                
				



</body>