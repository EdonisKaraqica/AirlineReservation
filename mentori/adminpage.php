
<!DOCTYPE html>
<html lang="en">
<title>Admin page</title>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
<script src="adminflights.js"></script>
<script>
	var x;
	$(function() {
	     x = screen.width;
	   
	      $("#adminpage").css({
	        "min-width": x+"px"
	      });
	    });
</script>


<body>


<style>

  .nav-pills {
    
     color: white;
     position: fixed; 
     height: 100%;
     width: 100%;
    
  }
    .nav-stacked {
    
     color: white;
     position: fixed; 
     height: 100%;
     width: 100%;
    
  }

  .navbar-collapse {
     background-color: #508ff4;
     color: white;
     position: fixed; 
    top: 32%;
    min-height: 55%;
    position: fixed;



  }



.navbar-nav > li,

.navbar-header
{float:none !important;}


#adminpage {float: left;height: auto; width: auto;position: relative;}

.text {top:27%; left: 20%;position: fixed;text-align: center;}

.tabela { height:55%;width:81%;position: fixed; left:18%; top :32%; overflow-y: scroll;}

.deletebutton{top:87.5%;left:18%;position: fixed;}

.footer{border-style: solid;top:90%;left: 1%; height: 9%; width: 98%;font-size: 50px; position: fixed;}
.header {border-style: solid;top:0%;left: 1%; height: 9%; width: 98%;font-size: 50px; position: fixed;}

input {
	width: 120px;
}
a {
	text-align: center;
  color: white;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
}



</style>
</head>
<body>




<div id="adminpage">

	
	<nav class="nav nav-pills nav-stacked" role="navigation">
  <div class="navbar-header" style="padding-left: 2%;padding-top: 5%">
  	<img class="img-responsive img-portfolio img-hover" src="http://www.clipartbest.com/cliparts/aTq/zgA/aTqzgAzXc.png">
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse ">
    <ul class="nav navbar-nav">
    <br>
      <li ><a href="#" id="flights">Flights </a></li><br>
      <li ><a href="#" id="users">Users</a></li><br>
      <li ><a href="#" id="reservations">Reservations</a></li>
      
      <form class="navbar-form navbar-left" role="search" id=searchBy>
      <label for="sel1">Search by:</label>

      <select class="form-control" name ="dataType" style="width:100%"> 
    	<option value="placefrom"> Start</option>
    	<option value="placeto"> Destination </option>
	  </select>
    <br><br>
    <ul class="nav navbar-nav">
      <div class="form-group">
        <input type="text" name="value" class="form-control" placeholder="Place" style=" width:100%">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

<!-- 	<form id=searchByy >
 <label >Search by:</label>
  <select name ="dataType"> 
    <option value="placefrom"> Start</option>
    <option value="placeto"> Destination </option>
</select>
  


<br>


		<label>Value:   </label> <input type="text" name="value" > 

 	<p><input type="submit"  value="Search flight" ></p>

</form> -->

<!-- 

	<p><input type="button" id="flightss" value="All flights" /></p>

	<p><input type="button" id="reservations" value="All reservations" /></p>

	<p><input type="button" id="users" value="All users" /></p> -->





	<!-- <div class="vertical-line"></div> -->

				<div class="container"> 
				<div class="text">
					<p style="font-size: 20px;" id="found"></p>
				</div>
	<div class="tabela"> 
  	<form id="add">        
  	   <table  class="table table-striped table-bordered"></table>
  	</form>
	</div>
	 <div class="deletebutton">
	   <form id="delete"></form>
   </div>
  
	</div><!-- 
 <div class="footer">footer footer footer footer footer footer </div>
<div class="header">header header header header header</div> -->

</div>

</body>
</html>