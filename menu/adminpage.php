<?php ?>
<!DOCTYPE html>
<html>
<head>
<script src="https://www.w3schools.com/lib/w3data.js"></script>

<body>

<div w3-include-html="head_menu.php"></div> 
<div w3-include-html="footer.php"></div> 

<script>
w3IncludeHTML();
</script>

<style>

#adminpage {float: left;border-style: solid;width: 100%;position: relative; }
.admin {}

.links {height:80%;width:15%;position: fixed; left:5%; top :12%;}

.table {height:80%;width:76%;position: fixed; left:22%; top :12%;}

div.vertical-line{
	  top : 12%; left: 21%; 
      width: 1px; 
      height: 76%;  
      background-color: black;
      position: fixed;
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
		<p style="font-size:60px; ">TABLE</p>
	</div>


</div>


</body>