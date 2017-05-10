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

#info {float: left;border-style: solid;width: 100%;position: relative; }

.image{border-style: solid;height:45%;width:90%;position: fixed; left:5%; top :12%;}

.text {border-style: solid;height:25%;width:90%;position: fixed; left:5%; top :60%;}

</style>
</head>
<body>

<div id="info">

<div class="image">
	<img src="air.jpg" style="width:100%;height: 100%;object-fit: contain">
</div>

<div class="text">
Text ..........
</div>
</div>


</body>