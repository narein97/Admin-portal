<html>
<head>
<title>CUSTOMER</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/styless.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/footer-basic-centered.css"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">

     <style>
@import url('https://fonts.googleapis.com/css?family=Acme');
        body{
            font-family: 'Acme', sans-serif;
        }
         #footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;
        }
         a:hover{
             text-decoration: none;
         }

</style>
</head>

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

            <p class="footer-company-motto"><font color="orange"><b>>>> Ready To Race<b/></font></p>

			<p class="footer-links">
				<a href="#">Home</a>
				-
				<a href="#">Blog</a>
				-
				<a href="#">About</a>
				-
				<a href="#">Faq</a>
				-
				<a href="#">Contact</a>
			</p>

			<p class="footer-company-name">Powered By <span class="text">Jachin</span></p>

		</footer>

    <div class="center" style="position: absolute;
    top: 10%;
    right: 39%;
    font-size: 35px;">
   <ol style="list-style: none">
       <li><div class="wow animated zoomIn"><a href="project2r.html"><font color="black" >ADD</font></a></div></li><br />
       <li><div class="wow animated zoomIn"><a href="project3r.html"><font color="black">REMOVE</font></a></div></li><br />
       <li><div class="wow animated zoomIn"><a href="project4r.html"><font color="black">VIEW</font></a></div></li>
   </ol>
    </div>
</body>
</html>

<?php include 'conn.php';

    $id=$_POST['ID'];
    $name=$_POST['NAME'];
    $age=$_POST['AGE'];
    $gender=$_POST['GENDER'];
    $email=$_POST['EMAIL'];
    $phone_no=$_POST['PHONE_NO'];
    $bike_name=$_POST['BIKE_NAME'];
    $date_of_purchase=$_POST['DATE_OF_PURCHASE'];
    $chasis_no=$_POST['CHASIS_NO'];

    $sql="INSERT INTO person (id, name, age, gender, email, phone_no) VALUES ('$id', '$name', '$age', '$gender', '$email', '$phone_no')";

    $sql1="INSERT INTO bike_user(per_id, bike_name, date_of_purchase, chasis_no) VALUES ('$id', '$bike_name', '$date_of_purchase', '$chasis_no')";

    if(mysqli_query($conn,$sql)==true && mysqli_query($conn,$sql1)==true)
    {
                header("location:project1r.html");
    }
else
        echo "<script> alert('Customer already exist with the same ID')</script>";

mysqli_close($conn);
?>