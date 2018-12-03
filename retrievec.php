<html>
    <head>
        <title>
            Customer
        </title>
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
        <link rel="stylesheet" href="css/footer-basic-centered.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
    <script>
        new WOW().init();
    </script>
        <style>
            body{
                background-image: url(images/d9582f42ab55c87c9f1ee928ea442b83.jpg);
                background-size: contain;
            }
            #buttond{
                width: 150px;
                height: 50px;
                background-color: black;
                border: none;
                color:white;
                border-radius:10px;
                font-size: 20px;
                margin:25px;      
            }
            body{
                font-size: 20px;
                font-weight: 200;
                text-align: center;
            }
            #padding{
                padding-left: 200px;
                color: black;
                
            }
            #colors{
                background-color: #FF6600;
                border-radius: 10px;
                font-family: 'Spectral SC', serif;
            }
            #a{
                font-family: 'Acme', sans-serif;
            }
            #footer {
   position:absolute;
   bottom:-310px;
   width:100%;
   height:60px;
        }
        </style>
    </head>
    <body>
        <header>
    <div class="container">
<img style="height: 100px; width: 150px;" src="images/dhSaoviD_400x400.png" alt="logo" class="logo">
<nav id="a">
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

			<p class="footer-company-name">Powered By <span class="text">Jachin S</span></p>

		</footer>
        <h2 style="padding-left: 300px; font-family: 'Spectral SC', serif;"><font color="white"><b>CUSTOMER DETAILS</b></font></h2>
        <div id="padding" class="row">
            <div id="colors" class="col-md-4 col-md-offset-7">
        <?php include 'conn.php';

            $id=$_POST['ID'];
            $name=$_POST['NAME'];

            $sql="SELECT * FROM person p, bike_user e where id='$id' and name='$name' and p.id=e.per_id";

            $result=mysqli_query($conn,$sql);

            $row=mysqli_fetch_assoc($result);

            if(!$row)
                echo "No Record";
            else
            {
            echo "<div style='padding-bottom:5px'><b>ID  </b><br> ".$row['id']."  </div>";
            echo "<div style='padding-bottom:5px'><b>NAME  </b><br> ".$row['name']."  </div>";
            echo "<div style='padding-bottom:5px'><b>AGE  </b><br> ".$row['age']."  </div>";
            echo "<div style='padding-bottom:5px'><b>GENDER  </b><br> ".$row['gender']."  </div>";
            echo "<div style='padding-bottom:5px'><b>EMAIL  </b><br> ".$row['email']."  </div>";
            echo "<div style='padding-bottom:5px'><b>PHONE  </b><br> ".$row['phone_no']."  </div>";
            echo "<div style='padding-bottom:5px'><b>BIKE-NAME  </b><br> ".$row['bike_name']."  </div>";
            echo "<div style='padding-bottom:5px'><b>DATE-OF-PURCHASE  </b><br> ".$row['date_of_purchase']."  </div>";
            echo "<div style='padding-bottom:10px'><b>CHASIS-NUMBER  </b><br> ".$row['chasis_no']."  </div>";
                $id = $row['id'];
            }
        mysqli_close($conn);
        ?>
             <form action="get.php" method="get">
        <input type="hidden" name="id" value="<?php echo $id;?>">    
        <input type="submit" value="delete" id="buttond">
        </form>
        </div>
        </div>
    </body>
</html>