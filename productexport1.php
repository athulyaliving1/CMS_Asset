<html>

<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <script src="//cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <title>Asset || Product Export</title>
    <link rel="icon" href="https://athulyahomecare.com/lp/images/fav.ico" />
</head>

<style>
    body {
        /*                background-color: rgb(241,241,241);*/
        overflow-x: hidden;
        height: 100vh;
    }

    table thead {
        background-color: #0C4A6E;
        color: white;
    }

    .sub {

        padding: 8px;
        height: 35px;
        width: 80px;
        margin-top: 20px;
        background-color: rgb(236, 72, 153) !important;
        color: white;
        font-size: 13px;
        font-weight: 700;
        border: 1px solid;
        cursor: pointer;
        border-radius: 5px;
        border: none;
        box-shadow: 0px 2px 5px gray;
    }

    .sub:hover {
        background-color: #0C4A6E !important;
        box-shadow: 0px 5px 10px #0C4A6E !important;
    }

    .header {
        height: 100vh;
        position: fixed;
    }

    .navbar-style {
        box-shadow: 0 5px 10px wheat;
    }

    .logo {
        height: 48px;
        padding: 2px 10px;
    }

    center {
        margin-top: 20px;
    }

    .btn {
        color: #ffff;
        background-color: rgb(236, 72, 153) !important;
        box-shadow: 0px 2px 5px gray;
    }

    .btn:hover {
        color: #ffff;
        background-color: #0C4A6E !important;
        box-shadow: 0px 5px 10px #0C4A6E !important;
    }

    #searchBox {
        padding: 5px;
        margin-top: 6px;
        font-size: 12px;
        border: 2px solid;
        border-color: skyblue;
        border-radius: 2px;
        width: 259px;

    }

    #searchBox:hover {
        box-shadow: 0px 1px 4px 2px skyblue;
    }

    #searchBox:focus {
        box-shadow: 0px 1px 4px 2px skyblue;
        outline: none;
    }

    #searchBox::placeholder {
        padding-left: 4px;
    }

    .pagination .page-item .page-link {
        color: #0C4A6E;
    }

    .pagination .page-item.active .page-link {
        background-color: #0C4A6E;
        color: #ffff;
    }

    div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
        background-color: #0C4A6E;
    }

    .pagination .page-item.active .page-link:hover {
        background-color: gray;
    }

    .dt-buttons {

        position: relative;
    }

    .dataTables_filter {
        position: absolute;
        transform: translate(1000px, -40px);
    }
</style>

<body>


    <?php
    include('./include/sidebar.php');

    ?>

    <div id="main-content" class="relative h-full overflow-x-auto w-90 bg-zinc-100 lg:ml-64">

        <div class="row">

            <div class="text-center col-md-10" style="font-size: 20px;color:rgb(242,34,131);"><b>
                    <center>Asset Details</center>
                </b></div>

        </div>
        <div class="container-fluid">

            <div class="row bg-zinc-100">
                <div class="col-lg-12">
                    <table id="customersTable" class="table table-bordered display nowrap table-responsive" cellspacing="0" width="100%" cellspacing="0">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>Unique_ID</th>
                                <th>Vendor</th>
                                <th>Department</th>
                                <th>Departmentcode</th>
                                <th>DeviceType</th>
                                <th>Description</th>
                                <th>Qty</th>
                                <th>HSNSAC</th>
                                <th>InvoiceNo</th>
                                <th>InvoiceDate</th>
                                <th>Amount</th>
                                <th>CGST </th>
                                <th>SGST </th>
                                <th>Warranty</th>
                                <th>ExpiryDate</th>
                                <th>EmpCode</th>
                                <th>EmpName</th>
                                <th>SupRefNo</th>
                                <th>State</th>
                                <th>Location</th>
                                <th>Place</th>
                                <th>Branchcode</th>

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
                responsive: true,
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
                        data: "Department"
                    },
                    {
                        data: "Departmentcode"
                    },
                    {
                        data: "DeviceType"
                    },
                    {
                        data: "Description"
                    },
                    {
                        data: "Qty"
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
                        data: "SupRefNo"
                    },
                    {
                        data: "State"
                    },
                    {
                        data: "Location"
                    },
                    {
                        data: "Place"
                    },
                    {
                        data: "Branchcode"
                    }
                ],
                buttons: [{
                        extend: 'copy',
                        className: 'btn '
                    },
                    {
                        extend: 'csv',
                        className: 'btn '
                    },
                    {
                        extend: 'excel',
                        className: 'btn '
                    },
                    {
                        extend: 'pdf',
                        className: 'btn '
                    },
                    {
                        extend: 'print',
                        className: 'btn '
                    }
                ],
                "fnDrawCallback": function() {
                    $("input[type='search']").attr("id", "searchBox").attr("placeholder", "Search...");
                }


            });
        });
    </script>
</body>

</html>