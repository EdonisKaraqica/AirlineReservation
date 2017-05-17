<!DOCTYPE html>
	<head>
<style>

		/*div#header, div#footer 
		{
        	padding: 10px;
       		color: white;
        	background-color: black; 
        }*/

		div#content 
		{
    		
    		padding: 10px;
    		background-color: lightgrey;
    		position: relative;
		}

		div.article 
		{
   			margin: 5px;
    		padding: 10px;
    		background-color: transparent;
    		width:40%;
    		position: absolute;
		}
		div.article1
		{
   			margin: 5px;
    		padding: 10px;
    		background-color: transparent;
    		width:40%;
    		position: relative;
    		margin-left: 50%;
		}
		div.tabela_rezervimeve
		{
		
    		padding: 10px;
    		background-color: transparent;
    		width:40%;
    		position: fixed;
    		margin-left: 50%;

		}
		#tabela1
		{
			margin-top:50px;
			width: 100%;
			border-style: 1px solid black;
			border-collapse: collapse;
		}


</style>
	</head>

	<body>


		<div id="menu">
			<!-- <?php include '';?>  -->
		</div>

		<div id="content">
			<h2>Content</h2>
			<div >
				<img src="air.jpg" style="width:100%;height: 200px">


			</div>
		<div class="article">
			<h2>Rezervo nga:</h2>
 			<form method="get" action="rezervimet.php">
 				<table>
 					<tr>
 						<td>
 							<p>Data e nisjes</p>
 						</td>
 						<td >
 							<p style="margin-left:10px;">+/-Dite</p>
 						</td>
 					</tr>
 					<tr >
 						<td style="padding-top:15px">
 							<input type="date" name="dita_nisjes" style="width:125px">
 						</td>
 						<td style="padding-top:15px; ">
 							<input type="number" name="Ndite+-" style="width:50px;margin-left:10px;" min="-7" max="7";>
 						</td>
 					</tr>
 					<tr>
 						<td>
 							<p>Vendi i nisjes (nga)</p>
 						</td>
 					</tr>
 					<tr>
 						<td>
 							<select style="width:125px">
 								<!-- Mbushe nga DB me vlera  -->
  								<option value="ngaDB">Elementi1</option>
							</select>
 						</td>
 					</tr>

 				</table>
 				
 			</form>
		</div>

		<div class="article1">
		
		<h2>Destinacioni per:</h2>

			
 			<form method="get" action="rezervimet.php">
 			<input type="checkbox" name="Kthyse" value="Kthyese">Kthyese
 				<table>
 					<tr>
 						<td>
 							<p>Data e kthimit</p>
 						</td>
 						<td >
 							<p style="margin-left:10px;">+/-Dite</p>
 						</td>
 					</tr>
 					<tr >
 						<td style="padding-top:15px">
 							<input type="date" name="dita_kthimit" style="width:125px">
 						</td>
 						<td style="padding-top:15px; ">
 							<input type="number" name="Kdite+-" style="width:50px;margin-left:10px;" min="-7" max="7";>
 						</td>
 					</tr>
 					<tr>
 						<td>
 							<p>Destinacioni (per)</p>
 						</td>
 					</tr>
 					<tr>
 						<td>
 							<select style="width:125px">
 								<!-- Mbushe nga DB me vlera  -->
  								<option value="ngaDB">Elementi1</option>
							</select>
 						</td>
 					</tr>

 				</table>
 				
 			</form>
		</div>

		<div id="tabela_rezervimeve">
			<!-- ME DataBaze -->
			<table id="tabela1">
				<tr>
					<th>Data e nisjes</th>
					<th>Ora e nisjes</th>
					<th>Vendi nisjes</th>
					<th>Mberritja </th>
					<th>Destinacioni</th>
					<th>Aeiroplani</th>
					</tr>
				</tr>
			</table>

		</div>



		</div>

		<div id="footer">
			<!-- <?php include 'footer'; ?> -->
		</div>

	</body>

</html>
