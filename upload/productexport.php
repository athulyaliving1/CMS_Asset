<!--<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="table-responsive">
      <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Vendor</th>
                <th>Product Code</th>
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
        
        <tfoot>
            <tr>
                <th>Vendor</th>
                <th>Product Code</th>
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
        </tfoot>
    </table>
                </div>
   </div>
    </body>
</html>
<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  $('#example').DataTable({
      
    processing: true,
    serverSide: true,
        ajax: {
            url: '/fetch.php',
            type: 'POST',
        },
   columns:[{data:'ProductCode'}],
   dom: 'lBfrtip',
   buttons: [
    'excel', 'csv', 'pdf', 'copy'
   ],
    lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
  });
  
 });
 
</script>-->
