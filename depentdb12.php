<?php

// $dbcon = mysqli_connect("localhost", "root", "", "athul9z1_cms");

  include('./include/config.php'); 

if (!empty($_POST["tbranch_city"])) {
    $city = ($_POST['tbranch_city']);




    $stmt = mysqli_query($conn, "SELECT distinct branch_name FROM master_branches WHERE branch_city ='$city'");
?>
    <option value="<?php echo "select" ?>"><?php echo "Select Branch"; ?>
    </option>
    <?php
    while ($row = mysqli_fetch_assoc($stmt)) {
    ?>
        <option value="<?php echo htmlentities($row['branch_name']); ?>"><?php echo htmlentities($row['branch_name']); ?>
        </option>
    <?php

    } {
    ?>

<?php
    }
}




?>