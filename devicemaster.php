<?php 
include('./include/config.php');


if(isset($_POST['submit'])){
    $device=$_POST['device'];
      
    $exist="select * from device where Device='$device'";
    if((mysqli_query($conn,$exist)))
    {

        $query="INSERT INTO `device`(`Device`) VALUES ('$device')";
        if(mysqli_query($conn, $query))
        {
             echo "<script type='text/javascript'>alert('Data Inserted!!');location='devicemaster.php'; </script>";
        }
        else
        {
             echo "<script type='text/javascript'>alert('Data Not Inserted!!'); location='devicemaster.php';</script>";
        }
        
    }else{
        echo "<script type='text/javascript'>alert('Device Already Exists....!'); location='devicemaster.php';</script>";
    } 
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset || Devicemaster</title>
    <link rel="icon" href="https://athulyahomecare.com/lp/images/fav.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- component -->
    <div>
        <div class="flex flex-col flex-auto flex-shrink-0 min-h-screen antialiased text-black bg-zinc-100 ">
            <?php
       include('./include/sidebar.php');
           
           ?>
            <div
                class="relative flex flex-col justify-center w-full h-full py-6 overflow-hidden antialiased text-gray-800 sm:py-12">
                <div class="relative py-3 mx-auto text-center sm:w-96 ">
                    <span class="text-2xl font-semibold ">Add Devices</span>
                    <div class="mt-4 text-left bg-white rounded-lg shadow-xl">
                        <div class="h-2 bg-pink-400 rounded-t-md"></div>
                        <div class="px-8 py-6 ">
                            <form action="" method="post">
                            <label class="block font-semibold">Device</label>
                            <input type="text" placeholder="Enter Device Name" name="device"
                                class="w-full h-5 px-3 py-5 mt-2 border rounded-md bg-zinc-100 hover:outline-none focus:outline-none focus:ring-sky-900 focus:ring-1">
                            
                            <div class="flex items-baseline justify-end">
                                <button type="submit" name="submit"
                                    class="px-6 py-2 mt-4 text-white bg-pink-500 rounded-md hover:bg-pink-600 ">Sumbit</button>

                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>