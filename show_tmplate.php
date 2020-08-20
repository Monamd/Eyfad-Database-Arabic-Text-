

<?php
$connect =mysqli_connect("sql201.epizy.com","epiz_26190033","3Yibo4YjUI","epiz_26190033_test");


 ?>
 
 

<!DOCTYPE html>
<html>
<body>



<div class="container" style="width:500px;" align="center">
                <h3 align="center">فضلا قم برفع الصورة ثم انقر على زر ارسال</h3>
                <br />
                <form method="post" enctype="multipart/form-data" action="add template.php">
                     <input type="file" name="image" id="image" />
					 <br>
					 
					 
                     <br />
                     <input type="submit" name="insert" id="insert" value="ارسال"class="login100-form-btn" style="background-color:#90A4AE"  />
                </form>
                <br />
                <br />
				
				
                <table class="table table-bordered">
                     <tr>
                          <th>Image</th>
                     </tr>
                <?php
                $query = "SELECT * FROM template";
                $result = mysqli_query($connect, $query);
                 while ($row = mysqli_fetch_array($result)) {
                                   echo "
                          <tr>
                               <td>
									
                                    <img src='Template_image\\".$row['Template_path']."' height='200' width='200' class='img-thumnail' />
                               </td>
                          </tr>
                    ";
                              }
                              ?>
                         </table>
				
				
           </div>


</body>