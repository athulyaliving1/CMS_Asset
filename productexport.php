<html>

<head>
    <link rel="icon" type="image/png" sizes="96x96" href="logo.png">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
    <script src="//cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Athulya Assisted Living</title>
</head>



<body>


    <?php
       include('./include/sidebar.php');
           
           ?>

    <div id="main-content" class="h-full w-screen bg-zinc-100 relative lg:ml-64">

        <div class="row">

            <div class="col-md-10 text-center" style="font-size: 20px;color:rgb(242,34,131);"><b>
                    <center>Export File</center>
                </b></div>
            <div class="col-md-2  text-center" style=""><a href="index.php"><button type="button" class="sub">Go
                        Back</button></a></div>
        </div>
        <div class="container-fluid ">

            <div class="row ">
                <div class="col-lg-12">
                    <table id="customersTable" class="table table-bordered display nowrap table-responsive"
                        cellspacing="0" width="100%" cellspacing="0">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>Unique_ID</th>
                                <th>Vendor</th>
                                <th>Product Code</th>
                                <th>Code</th>
                                <th>DeviceType</th>
                                <th>Description</th>
                                <th>HSNSAC</th>
                                <th>InvoiceNo</th>
                                <th>InvoiceDate</th>
                                <th>SupRefNo</th>
                                <th>Qty</th>
                                <th>Amount</th>
                                <th>CGST </th>
                                <th>SGST </th>
                                <th>Warranty</th>
                                <th>ExpiryDate</th>
                                <th>EmpCode</th>
                                <th>EmpName</th>
                                <th>Facility</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('#customersTable').DataTable({
            dom: 'Bfrtip',
            pageLength: 10,
            "processing": true,
            "ajax": "exportdb.php",
            "columns": [


                {
                    data: "id"
                },
                {
                    data: "unique_id"
                },
                {
                    data: "Vendor"
                },
                {
                    data: "ProductCode"
                },
                {
                    data: "Code"
                },
                {
                    data: "DeviceType"
                },
                {
                    data: "Description"
                },
                {
                    data: "HSNSAC"
                },
                {
                    data: "InvoiceNo"
                },
                {
                    data: "InvoiceDate"
                },
                {
                    data: "SupRefNo"
                },
                {
                    data: "Qty"
                },
                {
                    data: "Amount"
                },
                {
                    data: "CGST"
                },
                {
                    data: "SGST"
                },
                {
                    data: "Warranty"
                },
                {
                    data: "ExpiryDate"
                },
                {
                    data: "EmpCode"
                },
                {
                    data: "EmpName"
                },
                {
                    data: "Facility"
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'print'
            ]

        });
    });
    </script>
</body>

</html>