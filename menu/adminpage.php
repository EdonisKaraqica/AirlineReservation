<?php 
include "head_menu.php";

?>
<!DOCTYPE html>
<html>
<head>
<script src="https://www.w3schools.com/lib/w3data.js"></script>

<body>


<style>

#adminpage {float: left;border-style: solid;width: 100%;position: relative; z-index: -1;}
.admin {}

.links {height:80%;width:15%;position: fixed; left:5%; top :12%;}

.table {border-style: solid; height:80%;width:76%;position: fixed; left:22%; top :12%;}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
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
		<label></label> <input type="text" name="flight" > 
        <input type="submit" name="submit" value="Search flight"> 
		<p>*<a href="#">All flights</a></p>
		<p>*<a href="#">All reservations</a></p>
		<p>*<a href="#">All users</a></p>
		<p>*<a href="#">Add flight</a></p>
		<p>*<a href="#">Update flight</a></p>
		<p>*<a href="#">Delete flight</a></p>
	</div>

	<div class="vertical-line">

	</div>

	<div class="table">
				<div class="container">           
  			<table style="width: 100%">
   		 <thead>
      <tr>
      	<th>Data</th>
        <th>Destinacioni</th>
        <th>Nisja</th>
        <th>Arritja</th>
        <th>ID e fluturimi</th>

      </tr>
    	</thead>

  </table>
</div>
	</div>


</div>

<?php
include "footer.php";
?>
</body>
