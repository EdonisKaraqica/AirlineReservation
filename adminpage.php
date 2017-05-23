<?php 
	//include "header.php";

?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
<script src="adminflights.js"></script>


<body>


<style>

#adminpage {float: left;;width: 100%;position: relative; z-index: -1;}
.admin {}

.links {height:80%;width:15%;position: fixed; left:5%; top :12%;}

.tabela {height:80%;width:76%;position: fixed; left:22%; top :12%;}


table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
}

div.vertical-line{
	  top : 12%; left: 21%; 
      width: 1px; 
      height: 76%;  
      background-color: black;
      position: fixed;
	  z-index:-1;
    }

</style>
</head>
<body>




<div id="adminpage">

	<div class="links">

	<form id=#search>
 <label>Search by:</label> <input list="dataType" name="dataType">
  <datalist id="dataType">
    <option value="Route Code">
    <option value="Airporti">
    <option value="Destinacioni">
  </datalist>


<br>


		<label>Value:   </label> <input type="text" name="value" > 
        <input type="submit" name="submit" value="Search flight"> <br><br>
</form>



  	<p><input type="button" id="flights" value="All flights" /></p>

	<p><input type="button" id="reservations" value="All reservations" /></p>

	<p><input type="button" id="users" value="All users" /></p>

	<p><input type="button" id="addFlight" value="Add flight" /></p>

	<p><input type="button" id="deleteflight" value="Delete flight" /></p>


<p> User ID:<input id="asd"  type="text"></p>

<p> Username:<input id="qwe"  type="text"></p>





		<p>*<a href="#flights">All flights</a></p>
		<p>*<a href="#reservationsTable">All reservations</a></p>
		<p>*<a href="#usersTable">All users</a></p>
		<p>*<a href="#addFlight">Add flight</a></p>
		<p>*<a href="#">Update flight</a></p>
		<p>*<a href="#">Delete flight</a></p>
	</div>

	<div class="vertical-line">

	</div>

				<div class="container"> 
	<div class="tabela">          
	<table  class = "table table-bordered" style="width: 100%" >

  </table>
</div>
	</div>

</div>

</body>
