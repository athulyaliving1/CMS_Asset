<?php

include('./include/config.php');
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset || Tracking</title>
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
                <div class="relative py-3 mx-auto text-center sm:w-96">
                    <span class="text-2xl font-semibold ">Vendorcode Filtration</span>
                    <div class="mt-4 text-left bg-white rounded-lg shadow-xl">
                        <div class="h-2 bg-pink-400 rounded-t-md"></div>
                        <div class="px-8 py-6 ">
                            <form action="" method="post">
                            <label class="block font-semibold">Vendorcode</label>
                            <input type="text" placeholder="Enter Vendorcode" name="tracking"
                                class="w-full h-5 px-3 py-5 mt-2 border rounded-md bg-zinc-100 hover:outline-none focus:outline-none focus:ring-sky-900 focus:ring-1">
                            <div class="flex items-baseline justify-end">
                                <button type="submit"  name="submit"
                                    class="px-6 py-2 mt-4 text-white bg-pink-500 rounded-md hover:bg-pink-600 ">Sumbit</button>

                            </div>
                            </form>
                        </div>

                    </div>
                   
                </div>
                <div class="relative py-3 overflow-x-auto overflow-y-auto text-center ml-72">

                <table class=" border-collapse border border-slate-400 ...">
                    <thead class="h-2 bg-sky-800 text-slate-50 ">
                        <tr>
                           <th class="border border-slate-300 ... py-3 px-6">id</th>
                           <th class="border border-slate-300 ... py-3 px-6">Date</th>
                           <th class="border border-slate-300 ... py-3 px-6">Vendorcode</th>
                           <th class="border border-slate-300 ... py-3 px-6">State</th>
                           <th class="border border-slate-300 ... py-3 px-6">Location</th>
                           <th class="border border-slate-300 ... py-3 px-6">Place</th>
                           <th class="border border-slate-300 ... py-3 px-6">Branchcode</th>
                           <th class="border border-slate-300 ... py-3 px-6">Tstate</th>
                           <th class="border border-slate-300 ... py-3 px-6">Tlocation</th>
                           <th class="border border-slate-300 ... py-3 px-6">Tplace</th>
                           <th class="border border-slate-300 ... py-3 px-6">Tbranchcode</th>
                           <th class="border border-slate-300 ... py-3 px-6">Description</th>
                           <th class="border border-slate-300 ... py-3 px-6">Name</th>
                           <th class="border border-slate-300 ... py-3 px-6">Status</th>
                           <th class="border border-slate-300 ... py-3 px-6">Qty</th>
                         

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                    
                    if($conn)
                    {  
                        
if(isset($_POST['submit'])){
    $tracking = $_POST['tracking'];
   
  
    $check_exist = "SELECT * FROM inoutassests WHERE Vendorcode='$tracking'";
    $result = mysqli_query($conn, $check_exist);
  
  
                            if(mysqli_num_rows($result)>0)
                            {
                                foreach ($result as $row)
                                {
                                    //echo $row['Date'];
                                    ?>
                        <tr>
                             <td class="border border-slate-300 ... px-6"><?=$row['id'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Date'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Vendorcode'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['State'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Location'];?></td>    
                             <td class="border border-slate-300 ... px-6"><?=$row['Place'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Branchcode'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Tstate'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Tlocation'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Tplace'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Tbranchcode'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Description'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Name'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Status'];?></td>
                             <td class="border border-slate-300 ... px-6"><?=$row['Qty'];?></td>
                            
                        </tr>

                        <?php
                                }
                            }
                            else
                            {
                             echo"No Records found";
                            }
                        }
                        
                    }
                else {
                        echo 'Database Not Connected';
                }
                    
                 ?>
                 
                    </tbody>
                </table>
</div>
            </div>
        </div>
</body>

</html>
<!-- $check_exist = "SELECT * FROM product";
                                $result = mysqli_query($conn, $check_exist);
                              
                              
                                                        if(mysqli_num_rows($result)>0)
                                                        {
                                                            foreach ($result as $row)
                                                            {
                                                                //echo $row['Date'];
                                                                ?>
                                                    <tr>
                                                         <td class="border border-slate-300 ..."><?=$row['id'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['unique_id'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['Vendor'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['ProductCode'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['Code'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['DeviceType'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['Description'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['HSNSAC'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['InvoiceNo'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['InvoiceDate'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['SupRefNo'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['Qty'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['Amount'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['CGST'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['SGST'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['Warranty'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['ExpiryDate'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['EmpCode'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['EmpName'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['Facility'];?></td>
                                                         <td class="border border-slate-300 ..."><?=$row['Department'];?></td>
                                                    </tr>
                            
                                                    <?php
                                                        //     }
                                                        // }
                                                        ?> -->