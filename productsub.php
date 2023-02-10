<?php

$dbcon = mysqli_connect("localhost", "root", "", "master");

if(!empty($_POST["stateName"])) 
{
 $id=($_POST['stateName']);

   
 $stmt = mysqli_query($dbcon,"SELECT state_id FROM state WHERE stateName ='$id'");

 while($row=mysqli_fetch_assoc($stmt))
 {
    ?>
    <option value="<?php echo htmlentities($row['state_id']); ?>"><?php echo htmlentities($row['state_id']); ?></option>
    <?php
   }
}




?>