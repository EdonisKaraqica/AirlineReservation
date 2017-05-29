<!DOCTYPE html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
	<script src="rezervimet.js"></script>
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
    		background-color: #fcfcfc;
    		position: relative;
    		width:80%;
    		margin:200px;
		}

		div.article 
		{
   			margin: 20px;
    		padding: 10px;
    		background-color: transparent;
    		width:35%;
    		position: absolute;
		}
		div.article1
		{
   			margin: 5px;
    		padding: 10px;
    		background-color: transparent;
    		width:35%;
    		position: relative;
    		margin-left: 400px;
    		margin-top: 20px;
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
			<?php include 'header.php';?> 
		</div>

		<div id="content">
			<h2>Content</h2>
			<div >
				<img src="air.jpg" style="width:100%;height: 200px">


			</div>
		<div class="article">
			<h2>Rezervo nga:</h2>
 			<form id="rezerv" >
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
 						<td style="padding-top:15px;">
 							<input type="date" name="dita_nisjes" data-date="" data-date-format="YYYY-MMMM DD" value="2017-10-10" style="width:130px;" >
 						</td>
 						<td style="padding-top:15px; ">
 							<input type="number" name="Ndite+-" style="width:50px;margin-left:10px;" min="-7" max="7" value="0" >
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
  								<option value="ngaDB">Elementi1</option>
							</select>
 						</td>
 					</tr>

 				</table>
 				<button  class="btn1"  style="width: 100px;" ;>Kerko</button> 
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
 							<input type="date" name="dita_kthimit" style="width:130px">
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
		<!-- <button type="submit" class="btn1" style="width: 100px;">Kerko</button>  -->

		<div id="tabela_rezervimeve">
			<!-- ME DataBaze -->
			<table class="tabela1"> 

			</table>

		</div>



		</div>

		<div id="footer">
			<!-- <?php include 'footer'; ?> -->
		</div>

	</body>



	
</html>
