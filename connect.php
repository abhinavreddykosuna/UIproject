
<html>
	<head>
		<title> Abhi's Icecreams </title>
		<meta charset="utf-8">
	<link href = "home.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    $name = (string)$_GET['name'];
    $phoneno = (int)$_GET['phone'];
    $address = (string)$_GET['address'];
    $servername = "153.91.152.245";
    $username = "test";
    $password = "test";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password) or die("Connection failed: " .$conn->connect_error);;




    $sql = "INSERT INTO axk03710_orders (name,phoneno,address) values ('$name','$phoneno','$address')";
	
    if (mysqli_select_db($conn,'test')) {
		$result = mysqli_query($conn,$sql);
		if($result){}
	
		else
			echo "error";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
  <a href="kosuna.html">home</a>
    <a href="cones.html">icecream cones</a>
	<a href="milkshakes.html">milkshakes</a>
    <a href="floats.html">floats</a>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br>
<h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;order placed successfully.</h1>
<h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;thanks for choosing us.</h1>
</body>
</html>


