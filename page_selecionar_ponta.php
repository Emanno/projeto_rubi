<?php
    session_start();

    require "classes/banco.php";

    function buscar_maquinas_pontas($conexao)
    {
        $sqlBusca = "SELECT tbl_maquina.*,tbl_pontas.* FROM tbl_maquina JOIN tbl_pontas
        ON tbl_pontas.tbl_maquina_id_maquina=tbl_maquina.id_maquina
        WHERE id_maquina=1 OR id_maquina=2 OR id_maquina=4 OR id_maquina=6
		GROUP BY id_pontas ORDER BY id_pontas ASC";
        $resultado = mysqli_query($conexao, $sqlBusca);

        $maquinas = [];

        while ($maquina = mysqli_fetch_assoc($resultado)){
            $maquinas[]=$maquina;
        }

        return $maquinas;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/qrcode.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<link href="css/menu-vertical-lateral.css" rel="stylesheet">
		</head>
        <?php
            $lista_maquinas = buscar_maquinas_pontas($conexao);
        ?>
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

		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><br><br><br><br><br>
		<form method="get" style="text-align:center;" action="page_carregar_ponta.php">
            Selecione a ponta desejada:
            <centeR><br><select name="maquinas" class="form-control" style="width: 18%;" id="maquinas"></center>
            <?php foreach ($lista_maquinas as $maquinas) { ?>
                <option value="<?php echo "localhost:8080/gestao_pontas/page_carregar_ponta.php?maquinas=".$maquinas['id_pontas']."&acao=Pesquisar"; ?>">
					<center><?php echo $maquinas['nome']." - ".$maquinas['num_nome'] ; ?></center>
				</option>
            <?php } ?>
            </select><br><br>
			<div id="qrcode"></div><br><Br>
            <input type="submit" class="btn btn-danger" name="acao" value="Pesquisar">

	<script>
$( "select" )
  .change(function () {
		var qrcode = new QRCode(document.getElementById("qrcode"), {
		width : 300,
		height : 300
	});

	function makeCode () {		
		var elText = document.getElementById("maquinas");
		qrcode.makeCode(elText.value);
	}
	makeCode();
  })
  .change();
  
/*$( "select" )
  .change(function () {
    var str = "localhost:8080/gestao_pontas/page_carregar_ponta.php?maquinas=" + $( this ).val() + "&acao=Pesquisar";
	jQuery('#teste').qrcode( str );
	})	
  })
  .change();
  
  $( "select" )
  .change(function () {
	jQuery('#teste').qrcode({
		text	: "localhost:8080/gestao_pontas/page_carregar_ponta.php?maquinas=" + $( this ).val() + "&acao=Pesquisar";
	});	
	})	
  .change();*/
</script>
		</form>
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