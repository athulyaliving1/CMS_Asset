<?php
include('./include/config.php');
if (isset($_POST['submit'])) {

    $Date = $_POST['date'];
    $Vendorcode = $_POST['vendorcode'];
    $State = $_POST['state'];
    $Location = $_POST['location'];
    $Place = $_POST['place'];
    $Branchcode = $_POST['branchcode'];
    $Tstate = $_POST['tstate'];
    $Tlocation = $_POST['tlocation'];
    $Tplace = $_POST['tplace'];
    $Tbranchcode = $_POST['tbranchcode'];
    $Description = $_POST['description'];
    $Name = $_POST['name'];
    $Status = $_POST['status'];
    $Qty = $_POST['qty'];

    $query = "INSERT INTO `inoutassests`(`Date`,`Vendorcode`,`State`,`Location`,`Place`,`Branchcode`,`Tstate`,`Tlocation`,`Tplace`,`Tbranchcode`,`Description`,`Name`,`Status`,`Qty`) VALUES ('$Date','$Vendorcode','$State','$Location','$Place','$Branchcode','$Tstate','$Tlocation','$Tplace','$Tbranchcode','$Description','$Name','$Status','$Qty')";

    // echo  $query;



    if (mysqli_query($conn, $query)) {
        echo "<script type='text/javascript'>alert('Data Inserted!!');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data Not Inserted!!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset || Inward-Outward</title>
    <link rel="icon" href="https://athulyahomecare.com/lp/images/fav.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet">
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
                url: "depentdb.php",
                data: 'branch_state=' + val,
                success: function(data) {
                    console.log(data);
                    $("#branch_city").html(data);

                }
            });
        }

        function getCat1(val1) {
            // alert('val');

            $.ajax({
                type: "POST",
                url: "depentdb1.php",
                data: 'branch_city=' + val1,
                success: function(data1) {
                    $("#branch_name").html(data1);
                    console.log("data");
                }
            });

        }
    </script>


    <script>
        function getDep(val) {
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
    <script>
        function getBrncode(val2) {
            // alert('val');

            $.ajax({
                type: "POST",
                url: "branchcodesub.php",
                data: 'branch_name=' + val2,
                success: function(data2) {
                    console.log(data2);
                    $("#branch_code").html(data2);

                }
            });
        }
    </script>

    <!-- To Location  Script -->

    <script>
        function getLoc(valdata) {
            // alert('val');

            $.ajax({
                type: "POST",
                url: "depentdbc1.php",
                data: 'tbranch_state=' + valdata,
                success: function(datab) {
                    console.log(datab);
                    $("#tbranch_city").html(datab);
                    console.log("datab");

                }
            });
        }


        function getBrncc(valdata1) {
            // alert('val');

            $.ajax({
                type: "POST",
                url: "depentdb12.php",
                data: 'tbranch_city=' + valdata1,
                success: function(datacc) {
                    $("#tbranch_name").html(datacc);
                    console.log("data12");
                }
            });

        }

        function getBrnff(valff) {
            // alert('val');

            $.ajax({
                type: "POST",
                url: "branchcodesub1.php",
                data: 'tbranch_name=' + valff,
                success: function(dataff) {
                    console.log(dataff);
                    $("#tbranch_code").html(dataff);

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
            <div class="h-full mb-10 ml-14 mt-14 md:ml-64 md:px-20 xl:px-12">
                <div class="h-2 bg-pink-400 rounded-t-md"></div>
                <form class="min-w-full p-10 bg-white rounded-lg shadow-xl" method="post" action="">
                    <!-- <h1 class="mb-6 font-sans text-2xl font-bold text-center text-gray-600"></h1> -->

                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-2">

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Date</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="date" name="date" id="email" />
                        </div>

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="ascode">Asset Code</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text" name="vendorcode" id="ascode" placeholder="Enter The AssetCode" />
                        </div>
                    </div>


                    <div>
                        <h5 class="block my-3 mt-5 font-semibold text-center text-gray-800 text-md">From Location<h5>
                                <div class="grid grid-cols-1 gap-4 xl:grid-cols-4">
                                    <div>
                                        <label for="state" class="block my-3 font-semibold text-gray-800 text-md ">State
                                        </label>

                                        <select type="text" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" id="state" name="state" onChange="getCat(this.value);">
                                            <option value="">Select Category</option>
                                            <?php

                                            // $conn = mysqli_connect("localhost", "root", "", "athul9z1_cms");
                                            include('./include/config.php');


                                            $sql = mysqli_query($conn, "select distinct branch_state from master_branches");
                                            while ($rw = mysqli_fetch_assoc($sql)) {
                                            ?>
                                                <option value="<?php echo htmlentities($rw['branch_state']); ?>">
                                                    <?php echo htmlentities($rw['branch_state']); ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class=''>
                                        <label for="location" class="block my-3 font-semibold text-gray-800 text-md ">Location</label>

                                        <select name="location" id="branch_city" onChange="getCat1(this.value);" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                            <option value="">Select Subcategory</option>
                                        </select>
                                    </div>

                                    <div class=''>
                                        <label for="place" class="block my-3 font-semibold text-gray-800 text-md ">Place
                                        </label>

                                        <select name="place" id="branch_name" onChange="getBrncode(this.value);" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                            <option value="">Select Subcategory</option>
                                        </select>

                                    </div>
                                    <div class=''>
                                        <label for="branchcode" class="block my-3 font-semibold text-gray-800 text-md ">Branch
                                            Code
                                        </label>
                                        <select name="branchcode" id="branch_code" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                            <option value="">Branch Code</option>
                                        </select>
                                    </div>
                                </div>
                    </div>
                    <div>
                        <h5 class="block my-3 mt-5 font-semibold text-center text-gray-800 text-md">To Location<h5>
                                <div class="grid grid-cols-1 gap-4 xl:grid-cols-4">
                                    <div>
                                        <label for="tstate" class="block my-3 font-semibold text-gray-800 text-md">State
                                        </label>

                                        <select type="text" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" id="state" name="tstate" onChange="getLoc(this.value);">
                                            <option value="">Select Category</option>
                                            <?php

                                            // $conn = mysqli_connect("localhost", "root", "", "athul9z1_cms");
                                            include('./include/config.php');


                                            $sql = mysqli_query($conn, "select distinct branch_state from master_branches");
                                            while ($rw = mysqli_fetch_assoc($sql)) {
                                            ?>
                                                <option value="<?php echo htmlentities($rw['branch_state']); ?>">
                                                    <?php echo htmlentities($rw['branch_state']); ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class=''>
                                        <label for="tlocation" class="block my-3 font-semibold text-gray-800 text-md ">Location</label>

                                        <select name="tlocation" id="tbranch_city" onChange="getBrncc(this.value);" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                            <option value="">Select Subcategory</option>
                                        </select>
                                    </div>

                                    <div class=''>
                                        <label for="tplace" class="block my-3 font-semibold text-gray-800 text-md ">Place
                                        </label>

                                        <select name="tplace" id="tbranch_name" onChange="getBrnff(this.value);" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                            <option value="">Select Subcategory</option>
                                        </select>

                                    </div>
                                    <div class=''>
                                        <label for="tbranchcode" class="block my-3 font-semibold text-gray-800 text-md ">Branch
                                            Code
                                        </label>
                                        <select name="tbranchcode" id="tbranch_code" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                            <option value="">Branch Code</option>
                                        </select>
                                    </div>
                                </div>
                    </div>


                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-2">

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="desc">Description</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text" name="description" id="desc" placeholder="Description" />
                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="name">Name/Emp
                                Code</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text" name="name" id="name" placeholder="Name/Emp Code" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-2">

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="status">Status</label>

                            <select class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text" name="status" id="status" placeholder="Status">

                                <option value="">Select a status</option>
                                <option value="IN">IN</option>
                                <option value="OUT">OUT</option>
                                <option value="SCRAP">SCRAP</option>
                            </select>

                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="qty">Quantity
                            </label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text" name="qty" id="qty" placeholder="Quantity " />
                        </div>
                    </div>

                    <div class="grid place-items-center">

                 
                        <div class="">
                            <button type="submit" name="submit" class="px-4 py-2 mt-6 mb-3 font-sans text-lg font-semibold tracking-wide text-white bg-pink-500 rounded-lg hover:bg-sky-800">Submit</button>
                        </div>
                    </div>


            </div>
            </form>
        </div>

</body>

</html>