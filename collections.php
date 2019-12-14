<?php  
 $connect = mysqli_connect("localhost", "root", "12345", "digiwaste");  
 $query ="SELECT * FROM collections ORDER BY ID DESC";  
 $result = mysqli_query($connect, $query); 
 include "header.php"; 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina"> 
           <title>Collections</title>  
           <script src="assets/js/jquery/jquery.min.js"></script>  
           <link rel="stylesheet" href="assets/css/bootstrap.min.css" />  
           <script type="text/javascript" src="datatables/jQuery-3.3.1/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="datatables/DataTables-1.10.18/js/jquery.dataTables.js"></script>
     <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/jquery.dataTables.css"/>  
     <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Collections</h3>  
                <br /> 

                <div class="text-center">
                

<a href="PDF/database.php" class="btn btn-warning pull-right" id="add-product-btn">Generate Report</a></br><br>

</div>
                <div class="table-responsive">  
                     <table id="collections_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>ID</td>  
                                    <td>Schedule_id</td>  
                                    <td>User_id</td>  
                                    <td>Region</td>
                                    <td>Address</td>  
                                    <td>Status</td> 
                                    <td>Created_at</td> 
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["id"].'</td>  
                                    <td>'.$row["schedule_id"].'</td>  
                                    <td>'.$row["user_id"].'</td>  
                                    <td>'.$row["region"].'</td>  
                                    <td>'.$row["address"].'</td>  
                                    <td>'.$row["status"].'</td>
                                    <td>'.$row["created_at"].'</td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#collections_data').DataTable();  
 });  
 </script>  