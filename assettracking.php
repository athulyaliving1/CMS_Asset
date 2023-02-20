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
    <title>Asset || Asset tracking</title>
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
                                <th>Date</th>
                                <th>Asset-code</th>
                                <th>From Location</th>
                                <th>To Location</th>
                                <th>Description / Comments</th>
                                <th>Name/Emp Code</th>
                                <th>Status</th>
                                <th>Quantity</th>

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
                "ajax": "assetdb.php",
                "columns": [


                    {
                        data: "id"
                    },
                    {
                        data: "Date"
                    },
                    {
                        data: "Vendorcode"
                    },
                    {
                        data: "Branchcode"
                    },
                    {
                        data: "Tbranchcode"
                    },
                    {
                        data: "Description"
                    },
                    {
                        data: "Name"
                    },
                    {
                        data: "Status"
                    },
                    {
                        data: "Qty"
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