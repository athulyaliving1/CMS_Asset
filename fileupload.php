<?php
    include('./include/config.php');
    if(isset($_POST["Import"])){
		

		$filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    
	          //It wiil insert a row to our subject table from our csv file`
	           //$sql = "INSERT into subject (`SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`,COURSE_ID, `AY`, `SEMESTER`) 
	            	//values('$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]')";
				//$sql =	"INSERT INTO `product`(`id`, `unique_id`,`Vendor`, `ProductCode`, `Code` ,`DeviceType`, `Description`, `HSNSAC`, `InvoiceNo`, `InvoiceDate`, `SupRefNo`, `Qty`, `Amount`, `CGST`, `SGST`, `Warranty`, `ExpiryDate`, `EmpCode`, `EmpName`, `Facility`) VALUES  ( `$id[0]`, `$unique_id[1]`,'$Vendor[2]','$ProductCode[3]','$code[4]','$DeviceType[5]','$Description[6]','$HSNSAC[7]','$InvoiceNo[8]','$InvoiceDate[9]','$SupRefNo[10]','$Qty[11]','$Amount[12]','$CGST9[13]','$SGST9[14]','$Warranty[15]','$ExpiryDate[16]','$EmpCode[17]','$EmpName[18]','$Facility[19]')";
                //$sql= "INSERT INTO `product`(`id`, `unique_id`, `Vendor`, `ProductCode`, `Code`, `DeviceType`, `Description`, `HSNSAC`, `InvoiceNo`, `InvoiceDate`, `SupRefNo`, `Qty`, `Amount`, `CGST`, `SGST`, `Warranty`, `ExpiryDate`, `EmpCode`, `EmpName`, `Facility`, `Department`) VALUES  (`$id[0]`, `$unique_id[1]`,'$Vendor[2]','$ProductCode[3]','$code[4]','$DeviceType[5]','$Description[6]','$HSNSAC[7]','$InvoiceNo[8]','$InvoiceDate[9]','$SupRefNo[10]','$Qty[11]','$Amount[12]','$CGST9[13]','$SGST9[14]','$Warranty[15]','$ExpiryDate[16]','$EmpCode[17]','$EmpName[18]','$Facility[19]' `$Department[20]` )";
				$sql= "INSERT INTO product (`id`, `unique_id`, `Vendor`, `ProductCode`, `Code`, `DeviceType`, `Description`, `HSNSAC`, `InvoiceNo`, `InvoiceDate`, `SupRefNo`, `Qty`, `Amount`, `CGST`, `SGST`, `Warranty`, `ExpiryDate`, `EmpCode`, `EmpName`, `Facility`, `Department`)
				                   VALUES  ('$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','$emapData[19]','$emapData[20]','$emapData[21]')";
                    
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysqli_query($conn,$sql);
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"fileupload.php\"
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"fileupload.php\"
					</script>";
	        
			 

			 //close of connection
			mysqli_close($conn); 
				
		 	
			
		 }
	}	 
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset || Excelupload</title>
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
                    <span class="text-2xl font-semibold ">File Upload</span>
                    <div class="mt-4 text-left bg-white rounded-lg shadow-xl">
                        <div class="h-2 bg-pink-400 rounded-t-md"></div>
                        <div class="px-8 py-6 ">
                            <form action="" method="post" name="upload_excel" enctype="multipart/form-data">
                                    <label lass="block my-3 font-semibold text-gray-800 text-md" >CSV/Excel File:</label>
                              
                                    <input type="file" name="file" id="file"
                                        class="w-full py-3 mt-2 border rounded-md bg-zinc-100 hover:outline-none focus:outline-none focus:ring-sky-900 focus:ring-1">
                         

                                <div class="flex items-baseline justify-end">
                                    <button type="submit" id="submit" name="Import"
                                        class="px-6 py-2 mt-4 text-white bg-pink-500 rounded-md hover:bg-pink-600">Upload</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>