<!DOCTYPE html>

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
<script src="rezervimet.js"></script>

<style>

		div#content 
		{	
    		background-color: #fcfcfc;
    		position: relative;
    		width:80%;
    		margin:200px;
    		margin-top: 60px;
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
    		position: static;
    		margin-left: 50%;
    		margin-top: 20px;
		}

		
		.tabelat
		{
			
			width: 100%;
			border-style: 1px solid black;
			border-collapse: collapse;
			margin-top:100px;
			position: relative;
			
		}


</style>
	</head>

	<body>


		<div id="menu">
			<?php include 'header.php';?> 
		</div>

		<div id="content">
			<div >
				<img src="foto/bg_main.jpg" style="width:100%;height:300px">
			</div>
			<form id="rezerv" >
		<div class="article">
			<h2>Rezervo nga:</h2>
 			
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
 							<input type="date" name="dita_nisjes" data-date="" format="YYYY-MM-DD" value="<?php echo date('Y-m-d'); ?>" style="width:130px;" >
 						</td>
 						<td style="padding-top:15px; ">
 							<input type="number" name="Ndite1" style="width:50px;margin-left:10px;" min="0" max="31" value="0" >
 						</td>
 					</tr>
 					<tr>
 						<td>
 							<p>Vendi i nisjes </p>
 						</td>
 						<td>
 							<p>Destinacioni</p>
 						</td>
 					</tr>
 					<tr>
 						<td>
 							<select name="fromplace" >
								
								 <?php 
								   require 'db.php'; 
								   $sql = pg_query($db, "SELECT placefrom FROM flights GROUP BY placefrom;");
										
											//echo "<option value=\'owner1'>         </option>";
										 while ($row = pg_fetch_array($sql))
										{
											echo "<option value='".$row['placefrom']."'>" . $row['placefrom'] . "</option>";
										}
									    
									?>
							</select> 

							
 						</td>
 						<td>
 							<select style=\"width:125px\" id="vendi" name= "toplace" >
 								 <?php 
								   require 'db.php'; 
								   $sql = pg_query($db, "SELECT placeto FROM flights GROUP BY placeto;");
										
											//echo \"<option value=\'owner1'> Nga</option>\";
										 while ($row = pg_fetch_array($sql))
										 {
											echo "<option value='".$row['placeto']."'>" . $row['placeto'] . "</option>";
											
										}
									    
									?>
							</select>
 						</td>
 					</tr>

 				</table>
 				<input type="submit" name="submit" class="btn1"  style="width: 100px;" value="Kerko">
 				
		</div>
	
		<div class="article1">

		<h2>Kthyese: </h2>

 			<input type="checkbox" id="checkme" name="cbox" onclick="a()"  />Kthyese
 			
 				<table>
 					<tr>
 						<td>
 							<p>Data e kthimit</p>
 						</td>
 						<td >
 							<p style="margin-left:10px;\">+/-Dite</p>
 						</td>
 					</tr>
 					<tr >
 						<td style="padding-top:15px">
 							<input type="date" name="dita_kthimit" style="width:130px" id="sendNewSms" value="<?php echo date('Y-m-d'); ?>"  disabled>
 						</td>
 						<td style="padding-top:15px; ">
 							<input type="number" name="Kdite" style="width:50px;margin-left:10px;" min="0" max="31" id="data2" disabled value="0" >
 						</td>
 					</tr>


 				</table>
 				
 			

		</div>
		<!-- <button type="submit" class="btn1" style="width: 100px;">Kerko</button>  -->
			<!-- ME DataBaze -->
			<div class="tabelat" id="t1"  style="">
			<table class="tabela1 " style=" width: 40%; text-align: center;position: absolute;margin-left: 1.5%;"> 
			
			</table>
			
			<table class="tabela2  " style=" width: 45%; text-align: center;margin-left: 50%;position: static;"> 
			
			</table>
			</form>
			</div>
			<form id="rezervo" style=" margin-top:5%;">
			<!-- <input type="submit" name="konfirmo_rezervimin">
			 -->
			 </form>





		</div>

		<div id="footer">
			<!-- <?php include 'footer'; ?> -->
		</div>

	</body>



	
</html>
