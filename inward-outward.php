<?php 
include('./include/config.php');
  if(isset($_POST['submit']))
  {
       
        $Date=$_POST['date'];
        $From=$_POST['from'];
        $To=$_POST['to'];
        $Dept=$_POST['department'];
        $Desc=$_POST['description'];
        $Name=$_POST['name'];
        $Status=$_POST['status'];
        $Qty=$_POST['qty'];
        $query= "INSERT INTO `inoutdevices`(`Date`,`From`,`To`,`Department`,`Description`,`Name`,`Status`,`Qty`) VALUES ('$Date','$From','$To','$Dept','$Desc','$Name','$Status','$Qty')";

      
        if(mysqli_query($conn, $query))
        {
              echo "<script type='text/javascript'>alert('Data Inserted!!'); </script>";
        }
        else
        {
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

                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-2">

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Date</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="date" 
                                name="date" id="email" />
                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Department
                                Code</label>

                            <select name="department"
                                class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none"
                                fdprocessedid="7su8rc">
                                <option class="but1">IT</option>
                                <option class="but1">DM</option>
                                <option class="but1">Marketing</option>
                                <option class="but1">Business Development</option>
                                <option class="but1">HR</option>
                                <option class="but1">Training Department</option>
                                <option class="but1">Marketing</option>
                                <option class="but1">Business Development</option>
                                <option class="but1">HR</option>
                                <option class="but1">Training Department</option>
                                <option class="but1">Quality</option>
                                <option class="but1">Operations Home care</option>
                                <option class="but1">Client Acquistion</option>
                                <option class="but1">Pharmacy</option>
                                <option class="but1">Project Team</option>
                                <option class="but1">Clinical</option>

                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-2">

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">From</label>

                            <select name="from" name="from"
                                class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" id="email"
                                fdprocessedid="dwokmm">
                                <option class="form-control">ATH-PVM</option>

                                <option class="form-control">ATH-PRG</option>

                                <option class="form-control">ATH-NLK</option>

                                <option class="form-control">ATH-ARM</option>

                                <option class="form-control">ATH-BLR</option>

                                <option class="form-control">ATH-CORP</option>

                                <option class="form-control">ATH-GNY</option>

                                <option class="form-control">ATH-TVT</option>

                                <option class="form-control">ATH-TNR</option>

                                <option class="form-control">ATH-sdfsdf</option>

                                <option class="form-control">ATH-Nulla deleniti quide</option>

                                <option class="form-control">ATH-Facilis dolor esse v</option>

                                <option class="form-control">ATH-</option>

                            </select>

                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">To</label>
                            <select name="to"
                                class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" id="email"
                                fdprocessedid="dwokmm">
                                <option class="form-control">ATH-PVM</option>

                                <option class="form-control">ATH-PRG</option>

                                <option class="form-control">ATH-NLK</option>

                                <option class="form-control">ATH-ARM</option>

                                <option class="form-control">ATH-BLR</option>

                                <option class="form-control">ATH-CORP</option>

                                <option class="form-control">ATH-GNY</option>

                                <option class="form-control">ATH-TVT</option>

                                <option class="form-control">ATH-TNR</option>

                                <option class="form-control">ATH-sdfsdf</option>

                                <option class="form-control">ATH-Nulla deleniti quide</option>

                                <option class="form-control">ATH-Facilis dolor esse v</option>

                                <option class="form-control">ATH-</option>

                            </select>

                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-2">

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md"
                                for="email">Description</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="description" id="email" placeholder="Description" />
                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Name/Emp Code</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="name" id="email" placeholder="Name/Emp Code" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-2">

                        <div>
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Status</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="status" id="email" placeholder="Status" />
                        </div>
                        <div class="">
                            <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Quantity
                                Code</label>
                            <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text"
                                name="qty" id="email" placeholder="Quantity Code" />
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