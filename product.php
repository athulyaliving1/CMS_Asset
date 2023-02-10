<?php 
include('./include/config.php');


if(isset($_POST['submit'])){
   
       $Vendor=$_POST['vendor'];
       $ProductCode=$_POST['productcode'];
       $code=$_POST['code'];
       $DeviceType=$_POST['devicetype'];
       $Description=$_POST['desc'];
       $HSNSAC=$_POST['hsn'];
       $InvoiceNo=$_POST['invoiceno'];
       $InvoiceDate=$_POST['invoicedate']; 
       $Qty=$_POST['qty'];
       $Amount=$_POST['amt'];
       $CGST9=$_POST['cgst'];  
       $SGST9=$_POST['sgst'];
       $Warranty=$_POST['warranty'];
       $ExpiryDate=$_POST['expiry'];
       $EmpCode=$_POST['empcode'];
       $EmpName=$_POST['empname'];
       $SupRefNo=$_POST['supref'];
       $Facility=$_POST['facility'];
       $Department=$_POST['department'];
   
       $query="INSERT INTO `product`(Vendor,ProductCode,Code,DeviceType,Description,HSNSAC,InvoiceNo,InvoiceDate,Qty,Amount,CGST,SGST,Warranty,ExpiryDate,EmpCode,EmpName,SupRefNo,Facility,Department) VALUES 
       ('$Vendor','$ProductCode','$code','$DeviceType','$Description','$HSNSAC','$InvoiceNo','$InvoiceDate','$Qty','$Amount','$CGST9','$SGST9','$Warranty','$ExpiryDate','$EmpCode','$EmpName','$SupRefNo','$Facility','$Department')";

       if(mysqli_query($conn, $query))
     {
           echo "<script type='text/javascript'>alert('Data Inserted!!');location='product.php'; </script>";

     }
     else
     {
          echo "<script type='text/javascript'>alert('Data Not Inserted!!'); location='product.php';</script>";
     }
    }
    // if(isset($_POST['update']))
    // {
    //     echo"File working";
    // }
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset || Product Detailes</title>
    <link rel="icon" href="https://athulyahomecare.com/lp/images/fav.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                },
            },
            screens: {
                ss: "320px",
                // => @media (min-width: 640px) { ... }

                sm: "375px",
                sl: "425px",

                md: "768px",
                // => @media (min-width: 768px) { ... }

                lg: "1024px",
                // => @media (min-width: 1024px) { ... }

                xl: "1280px",
                // => @media (min-width: 1280px) { ... }

                desktop: "1440px",
                // => @media (min-width: 1536px) { ... }
            },
        },
        container: {
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
            },
        },
    }
    </script>



    <script>
    function getCat(val) {
        // alert('val');

        $.ajax({
            type: "POST",
            url: "productsub.php",
            data: 'stateName=' + val,
            success: function(data) {
                console.log(data);
                $("#state_id").html(data);

            }
        });
    }
    </script>

</head>

<body>
    <!-- component -->
    <div>
        <div class="flex flex-col flex-auto flex-shrink-0 min-h-screen antialiased text-black bg-zinc-100 ">
            <?php
            include('./include/sidebar.php');

            ?>
            <div class="h-full mb-10 ml-14 mt-14 md:ml-64 md:px-20 xl:px-40">
                <div class="h-2 bg-pink-400 rounded-t-md"></div>
             
                <form class="min-w-full p-10 bg-white rounded-lg shadow-xl" method="post" action="">
                    <!-- <h1 class="mb-6 font-sans text-2xl font-bold text-center text-gray-600"></h1> -->

                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="username">Vendor
                                List</label>
                            <?php
                                    //   $host = "localhost";
                                    //   $username = "athul9z1_cmsuser";
                                    //   $password = "Health@123";
                                    //   $dbname = "athul9z1_cms";

                                      // Establish database connection
                                //   $con = mysqli_connect($host, $username, $password, $dbname);
                                //   $con = mysqli_connect("localhost", "root", "", "athul9z1_cms");
                                $con = mysqli_connect("localhost", "root", "", "athul9z1_cms");

                                   // Check the connection
                                //     if (!$con) {
                                //    die("Connection failed: " . mysqli_connect_error());
                                //         }

                                // Select data from database
                                $sql = "SELECT vendorname FROM vendorlist";
                                  $result = mysqli_query($con, $sql);

                               // Create an array to store the data
                                $options = array();

                                 // Loop through the data and store it in the array
                                    while ($row = mysqli_fetch_assoc($result)) {
                                           $options[] = $row['vendorname'];
                                                        }

                                             // Close the database connection
                                              mysqli_close($con);
                                       ?>
                            <!-- Display the dropdown menu -->
                            <select class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                <?php foreach ($options as $option) { ?>
                                <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Product
                                Code</label>
                            <?php
                              
                              $query=mysqli_query($conn,"Select * from branch");
                             ?>
                            <select name="productcode" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" >
                                <?php
                                 while($r=mysqli_fetch_array($query))
                                 {
                                     $a="ATH-"
                                     ?>
                                <option class="form-control"><?php echo $a."".$r['Abbreviation'] ?></option>

                                <?php
                                 }
                                 ?>

                            </select>
                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">
                                Code</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="code" id="email" placeholder="Code" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="username">Device
                                Type</label>
                            <?php
                                

                                $query=mysqli_query($conn,"Select * from device");
                               ?>
                            <select name="devicetype" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                <?php
                                   while($r=mysqli_fetch_array($query))
                                   {
                                       
                                       ?>
                                <option class="but1"><?php echo $r['Device'] ?></option>
                                <?php
                                   }
                                   ?>

                            </select>
                        </div>

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md"
                                for="email">Description</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="desc" id="desc" placeholder="Description" />
                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Quantity</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="qty" id="email" placeholder="Qty" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="username">HSN/SAC
                                List</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="hsn" id="username" placeholder="HSN/SAC" />
                        </div>

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Invoice
                                Number</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="invoiceno" id="email" placeholder="Invoice number" />
                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Invoice
                                Date</label>
                            <input type="date" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none"
                                name="invoicedate">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="username">Amount
                                List</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="amt" id="username" placeholder="Amount" />
                        </div>

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">CGST 9%</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="cgst" id="email" placeholder="CGST" />
                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">SGST 9%</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="sgst" id="email" placeholder="SGST" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md"
                                for="username">Warranty</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="warranty" id="username" placeholder="Warranty" />
                        </div>

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Expired
                                Date</label>
                            <input type="date" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none"
                                name="expiry" id="email">
                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Emp Code</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="empcode" id="email" placeholder="Emp code" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="username"> Emp
                                Name</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="empname" id="username" placeholder="Emp Name" />
                        </div>

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Sup Ref No
                            </label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="supref" id="email" placeholder="Sup Ref No" />
                        </div>
                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md"
                                for="username">Facility</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="facility" id="username" placeholder="Facility" />
                        </div>
                    </div>


                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Deparment</label>
                            <select type="text" id="department" onChange="getCat(this.value);" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                <option value="">Select Category</option>
                                <?php
                                    $dbcon = mysqli_connect("localhost", "root", "test1");
                                    $sql=mysqli_query($dbcon,"select stateName,state_id from department");
                                      while ($rw=mysqli_fetch_assoc($sql)) {
                                  ?>
                                <option value="<?php echo htmlentities($rw['stateName']);?>">
                                    <?php echo htmlentities($rw['stateName']);?></option>
                                <?php
                                  }
                                    ?>
                            </select>
                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Department
                                Code</label>
                            <select type="text" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none"
                                name="department" id="state_id">
                                <option value="">Select Category</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-2">

                        <div>
                            <button type="submit" name="edit"
                                class="px-4 py-2 mt-6 mb-3 font-sans text-lg font-semibold tracking-wide text-white bg-pink-500 rounded-lg hover:bg-sky-800">Edit</button>
                        </div>
                        <div class="">
                            <button type="submit" name="submit"
                                class="px-4 py-2 mt-6 mb-3 font-sans text-lg font-semibold tracking-wide text-white bg-pink-500 rounded-lg hover:bg-sky-800">Submit</button>
                        </div>
                    </div>

            </div>
            </form>
        </div>

</body>

</html>