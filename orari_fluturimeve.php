<?php include 'header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
<script src="flights.js"></script>



<style>

#tabela {float: left;width: 100%;position: relative; }

.titulli {height:5%;width: 50%;position: fixed;left: 5%;top:12%;font-size: 50px;text-align: left;}

.orari{height:50%;width:90%;position: fixed; left:5%; top :22%;}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
}


</style>
</head>
<body>
<div id="tabela">
    <div class="container">
	<div class="orari">           
  	<table  class = "table table-bordered" >

  </table>
</div>
	</div>

	<div class="titulli">
		Orari i fluturimeve

	</div>
</div>




</body>