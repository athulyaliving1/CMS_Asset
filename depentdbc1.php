<?php

// $dbcon = mysqli_connect("localhost", "root", "", "athul9z1_cms");

 include('./include/config.php'); 

if (!empty($_POST["tbranch_state"])) {
    $id = ($_POST['tbranch_state']);


    $stmt = mysqli_query($conn, "SELECT distinct branch_city FROM master_branches WHERE branch_state ='$id'");
?>
      <option value="<?php echo "select" ?>"><?php echo "Select Location"; ?>
        </option>
 <?php   
    while ($row = mysqli_fetch_assoc($stmt)) {
?>
        <option value="<?php echo htmlentities($row['branch_city']); ?>"><?php echo htmlentities($row['branch_city']); ?>
        </option>
    <?php

    } {
    ?>

<?php
    }
}




?>















