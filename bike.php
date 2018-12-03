<!DOCTYPE html>
<html>
    <title>BIKE DETAILS</title>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/footer-basic-centered.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.js"></script>
</head>
        <style>
        #footer{
            position:absolute;
            bottom:-180px;
            width:100%;
            height:60px;
            }
        #example_wrapper{
            color: black;
            }
            a{
                    font-family: 'Acme', sans-serif;
            }
            </style>
    
<body>
    <header>
    <div class="container">
<img style="height: 100px; width: 150px;" src="images/dhSaoviD_400x400.png" alt="logo" class="logo">
<nav>
   <ul>
    <li><a href="index.html">HOME</a></li>
    <li><a href="gallery.html">GALLERY</a></li>
    <li><a href="about.html">ABOUT</a></li>
    <li><a href="contact.html">CONTACT</a></li>
   </ul>
</nav>
    </div>
    </header>
        <footer id="footer" class="footer-basic-centered">

            <p class="footer-company-motto"><font color="orange"><b>>>> Ready To Race</b></font></p>
		</footer>
    <h3 style="color:orange"><b>BIKE DETAILS</b></h3>
<?php include 'conn.php';
        $sql = "SELECT * FROM bike";
        $result = $conn->query($sql);

    echo '<table id="example" class="table table-striped table-bordered" cellspacing="10" width="100%" style="background-color:white">
        <thead>
            <tr>
                <th>NAME</th>
                <th>DISPLACEMENT</th>
                <th>POWER</th>
                <th>TORQUE</th>
                <th>TRANSMISSION</th>
                <th>MILEAGE</th>
		        <th>PRICE</th>
            </tr>
        </thead>
        <tbody>';
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo'
            <tr>
                <td>'.$row["bike_name"].'</td>
                <td>'.$row["displacement"].'</td>
                <td>'.$row["max_power"].'</td>
                <td>'.$row["max_torque"].'</td>
                <td>'.$row["transmission"].'</td>
                <td>'.$row["mileage"].'</td>
		        <td> &#8377;'.$row["price"].'</td>
            </tr>';

            }
            echo' </tbody>
    </table>';
        } else {
            echo "0 results";
        }
        $conn->close();
?>

</body>
   
<script>
    $(document).ready(function(){
    $('#example').DataTable();
});
</script>    
</html>
    