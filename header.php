<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Airline Reservation</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Login javascript button -->
	<link rel="stylesheet" type="text/css" href="login.css">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="http://www.clipartbest.com/cliparts/aTq/zgA/aTqzgAzXc.png" style="width:5%;position: absolute;"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">Home</a>
                    </li>
                    <li>
                        <a href="services.html">Info</a>
                    </li>
                    <li>
                        <a href="contact.html">Rezervimet</a>
                    </li>
					<li>
                        <a href="contact.html">Orari i fluturimeve</a>
                    </li>
					<li>
<button class="btn1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>


<div id="id01" class="modal"  >
  
  <form class="modal-content animate" action="/action_page.php" ">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="http://www.clipartbest.com/cliparts/aTq/zgA/aTqzgAzXc.png" alt="Avatar" class="avatar">
    </div>

    <div class="container1">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Kyçu</button>
	  <button type="submit">Regjistrohu</button>
	  
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container1" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"  > <a href="#" style="color:black;display:block;" class="a" >Forgot</a></span>
    </div>
  </form>
</div></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	</body>
	</html>