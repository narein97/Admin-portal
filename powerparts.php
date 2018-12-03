<!DOCTYPE html>
<html>
    <title>POWERPARTS</title>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.js"></script>
</head>
        <style>
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
        <h2 style="color:orange">POWER PARTS</h2>
<?php include 'conn.php';
        $sql = "SELECT * FROM power_parts";
        $result = $conn->query($sql);

    echo '<table id="example" class="table table-striped table-bordered" cellspacing="10" width="100%" style="background-color:white">
        <thead>
            <tr>
                <th>REF-ID</th>
                <th>POWER PART</th>
                <th>BIKE-NAME</th>
                <th>CATEGORY</th>
		        <th>PRICE</th>
            </tr>
        </thead>
        <tbody>';
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo'
            <tr>
                <td>'.$row["ref_id"].'</td>
                <td>'.$row["power_part"].'</td>
                <td>'.$row["bike_name"].'</td>
                <td>'.$row["category"].'</td>
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
    