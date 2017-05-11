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

#tabela {float: left;border-style: solid;width: 100%;position: relative; }

.titulli {border-style: solid;height:5%;width: 50%;position: fixed;left: 10%;top:2%;font-size: 50px;text-align: center;}

.orari{border-style: solid;height:75%;width:90%;position: fixed; left:5%; top :12%;}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}


</style>
</head>
<body>

<div id="tabela">
	<div class="orari">
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

	<div class="titulli">
		Orari i fluturimeve
	</div>
</div>


</body>