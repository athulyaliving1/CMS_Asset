<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Athulya Assisted Living</title>
</head>
<style>
/* body {
    color: rgb(242, 34, 131);
    
    margin: auto;
               background-image: url(1.jpg);
                   background: linear-gradient(90deg, rgba(5,99,150,0.79) 4%, rgba(236,64,122,0.79) 66%);
                    background-color: rgb(241,241,241);

}

#home {
    color: rgb(236, 64, 122);

}

label {
    color: rgb(5, 99, 150);
    font-size: 12px;

}

#form {

    background-color: white;
               border:2px solid white;
    border-radius: 8px;
    margin-top: 34px;
               box-shadow: 0 8px 20px 0 ;
    box-shadow: 0 5px 10px wheat;
              font-family: 'Poppins', sans-serif;

}

.header {
    height: 100vh;
}

.navbar-style {
    box-shadow: 0 5px 10px wheat;
}

.logo {
    height: 48px;
    padding: 2px 10px;
}

table thead {
    background-color: rgb(242, 34, 131);
    color: white;

}

table {
    box-shadow: 0 5px 10px wheat;
    border-radius: 5px;

}

       .k
        {
             flex: 60%;
             padding: 5px;
        }
        .row
        {
            display: flex;
            margin-left:5px;
            margin-right:5px;
        }



input[type=date] {
    padding: 5px;
    margin-top: 6px;
    font-size: 12px;
    border: 1px solid;
    border-color: wheat;
    border-radius: 2px;
    width: 220px;
}

input[type=date]:hover {
    box-shadow: 0 5px 10px wheat;
}

input[type=date]:focus {
    box-shadow: 0 5px 10px wheat;
    outline: none;
}

.sub {
    float: right;
    padding: 6px;
    height: 39px;
    width: 100px;
    margin-right: 70px;
    margin-top: 25px;
    background-color: rgb(239, 72, 130);
    color: white;
    font-size: 13px;
    font-weight: 700;
    border: 1px solid;
    cursor: pointer;
    border-radius: 5px;
}

.sub:hover {
    background-color: rgb(23, 98, 147);
} */
</style>

<body>
    <?php
       include('./include/sidebar.php');
           
           ?>
    <div class="relative flex flex-col  w-full h-full py-6 overflow-hidden antialiased text-gray-800 sm:py-12">
        <div class="relative py-3 mx-auto text-center sm:w-96">
            <span class="text-2xl font-semibold ">Inward & Outward Report</span>
            <div class="mt-4 text-left bg-white rounded-lg shadow-xl">
                <div class="h-2 bg-pink-400 rounded-t-md"></div>
                <div class="px-8 py-6 ">
                    <form action="" method="GET">
                        <label class="block my-3 font-semibold text-gray-800 text-md" >From</label>
                        <input type="date" name="from_date"
                            class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">

                        <label class="block my-3 font-semibold text-gray-800 text-md" >To</label>
                        <input type="date" name="to_date"
                            class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">

                        <button type="submit" name="Submit"
                            class="px-6 py-2 mt-4 text-white bg-pink-500 rounded-md hover:bg-pink-600 ">Submit</button>

                    </form>

                </div>

            </div>
        </div>

        <div class="h-full mb-10 ml-14 mt-14 md:ml-64 md:px-20 xl:px-10">
            <div class="grid grid-cols-1 gap-4 xl:grid-cols-2 ">
            <table class="border-collapse border border-slate-400 ...">
                    <thead class="h-2  bg-cyan-700  text-slate-50 ">
                        <tr>
                            <th class="border border-slate-300 ... py-3">Date</th>
                            <th class="border border-slate-300 ... py-3">From</th>
                            <th class="border border-slate-300 ... py-3">To</th>
                            <th class="border border-slate-300 ... py-3">Department</th>
                            <th class="border border-slate-300 ... py-3">Description</th>
                            <th class="border border-slate-300 ... py-3">Name/Emp Code</th>
                            <th class="border border-slate-300 ... py-3">Status</th>
                            <th class="border border-slate-300 ... py-3">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                 include('./include/config.php');

                    if($conn)
                    {  
                        if(isset($_GET['from_date']) && isset($_GET['to_date']))
                        {
                            $fromdate=$_GET['from_date'];
                            $todate=$_GET['to_date'];
                            $query="SELECT * FROM `inoutdevices` WHERE Status='IN' AND Date BETWEEN '$fromdate' AND '$todate'";
                            $query_in=mysqli_query($conn,$query);
                            if(mysqli_num_rows($query_in)>0)
                            {
                                foreach ($query_in as $row)
                                {
                                    //echo $row['Date'];
                                    ?>
                        <tr >
                            <td class="border border-slate-300 ..."><?=$row['Date'];?></td>
                            <td class="border border-slate-300 ..."><?=$row['From'];?></td>
                            <td class="border border-slate-300 ..."><?=$row['To'];?></td>
                            <td class="border border-slate-300 ..."><?=$row['Department'];?></td>
                            <td class="border border-slate-300 ..."><?=$row['Description'];?></td>
                            <td class="border border-slate-300 ..."><?=$row['Name'];?></td>
                            <td class="border border-slate-300 ..."><?=$row['Status'];?></td>
                            <td class="border border-slate-300 ..."><?=$row['Qty'];?></td>
                        </tr>

                        <?php
                                }
                            }
                            else
                            {
                                echo 'Record Not Found';
                            }
                        }
                        
                    }
                else {
                        echo 'Database Not Connected';
                }
                    
                 ?>
                    </tbody>
                </table>
                
                <!--                 //OUT-->
                <table class="border-collapse border border-slate-400 ...">
                    <thead class="h-2 bg-cyan-700 text-slate-50 ">
                        <tr>
                           <th class="border border-slate-300 ... py-3">Date</th>
                           <th class="border border-slate-300 ... py-3">From</th>
                           <th class="border border-slate-300 ... py-3">To</th>
                           <th class="border border-slate-300 ... py-3">Department</th>
                           <th class="border border-slate-300 ... py-3">Description</th>
                           <th class="border border-slate-300 ... py-3">Name/Emp Code</th>
                           <th class="border border-slate-300 ... py-3">Status</th>
                           <th class="border border-slate-300 ... py-3">Quantity</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                    
                    if($conn)
                    {  
                        if(isset($_GET['from_date']) && isset($_GET['to_date']))
                        {
                            $fromdate=$_GET['from_date'];
                            $todate=$_GET['to_date'];
                            $query="SELECT * FROM `inoutdevices` WHERE Status='OUT' AND Date BETWEEN '$fromdate' AND '$todate'";
                            $query_in=mysqli_query($conn,$query);
                            if(mysqli_num_rows($query_in)>0)
                            {
                                foreach ($query_in as $row)
                                {
                                    //echo $row['Date'];
                                    ?>
                        <tr>
                             <td class="border border-slate-300 ..."><?=$row['Date'];?></td>
                             <td class="border border-slate-300 ..."><?=$row['From'];?></td>
                             <td class="border border-slate-300 ..."><?=$row['To'];?></td>
                             <td class="border border-slate-300 ..."><?=$row['Department'];?></td>
                             <td class="border border-slate-300 ..."><?=$row['Description'];?></td>
                             <td class="border border-slate-300 ..."><?=$row['Name'];?></td>
                             <td class="border border-slate-300 ..."><?=$row['Status'];?></td>
                             <td class="border border-slate-300 ..."><?=$row['Qty'];?></td>
                        </tr>

                        <?php
                                }
                            }
                            else
                            {
                                echo 'Record Not Found';
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
</body>

</html>