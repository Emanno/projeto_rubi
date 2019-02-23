<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/menu-vertical-lateral.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
</head>
<body style="background: #f9f9f9";>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
	<a href="index.php">Home</a>
    <a href="#">Leitor de QR</a>
    <a href="page_selecionar_ponta.php">Gestão de Pontas</a>
    <a href="#">Painel Administrativo</a>
  </div>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><br>
<div style="text-align:center;"><img src="img/logo_transparent.png" style="width:40%;height:40%;"></div>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     
</body>
</html>
