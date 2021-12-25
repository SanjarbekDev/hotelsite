
<!DOCTYPE html>
<html>
    <head>
        <title>HBT - Hotel Website</title>
        <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
        <link rel="stylesheet" href="css/style.css">
		
    </head>
    <body>
		<script>
			alert("Tez orada siz bilan bog'lanamiz")
		</script>
        <header>
            <nav id="navbar">
                <div class="container">
                    <h1 class="logo"> <a href="#">HBT</a> </h1>
                    <ul>
                        <li> <a href="#" class="current"> Home </a> </li>
                        <li> <a href="about.html"> About </a> </li>
                        <li> <a href="contact.html"> Contact </a> </li>
                    </ul>
                </div>
            </nav>

            <div id="showcase">
                <div class="container">
                    <div class="showcase-content">
                        <h1> <span class="text-primary">Enjoy </span>Your Stay</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut alias odio expedita cumque nulla distinctio maiores neque itaque vero nam?</p>
                    <a href="about.html" class="btn"> About Us</a>
                    </div>
                </div>
            </div>
        
        </header>

        <section id="home-info" class="bg-dark">
            <div class="info-img"></div>
            <div class="info-content">
                <h2> <span class="text-primary">The History</span> Of Our Hotel </h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus aspernatur explicabo voluptates fugiat mollitia, perferendis ab possimus. Eum, itaque tempora, adipisci, natus odit iste accusamus atque ipsa temporibus quasi omnis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita vitae tempore accusantium dolorem optio dolores ducimus eligendi dicta iste officiis. Aut vitae voluptate molestias assumenda at adipisci labore tempore ipsa!</p>
                <a href="about.html" class="btn btn-light">Read More</a>
            </div>
        </section>


        <section id="features">

            <div class="box bg-light">
                <i class="fas fa-hotel fa-4x"> </i>
                <h3>Great Location</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ipsa.</p>
            </div>

            <div class="box bg-primary">
                <i class="fas fa-utensils fa-4x"> </i>
                <h3>Free Meals</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ipsa.</p>
            </div>

            <div class="box bg-light">
                <i class="fas fa-dumbbell fa-4x"> </i>
                <h3>Fitness Room</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ipsa.</p>
            </div>

        </section>

        <div class="clr"></div>

        <footer id="main-footer">
            <p>Hotel BT &copy; 2021, All rights Reserved</p>
        </footer>
		<?php
			$name=$_POST['name'];
			$email = $_POST['email'];
			$msg = $_POST['message'];
	
	
			//Database connection
			$conn = new mysqli('localhost','admin','admin','hotel');
			if($conn->connect_error){
				echo "$conn->connect_error";
				die("Connection Failed : ". $conn->connect_error);
			} else {
				$stmt = $conn->prepare("insert into contact(name,email,message) values(?, ?, ?)");
				$stmt->bind_param("sss",$name,$email, $msg);
				$stmt->execute();
				//echo $execval;
				$stmt->close();
				$conn->close();
		
	}
?>

    </body>
</html> 
