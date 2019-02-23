<?php
	session_start();

	require "classes/banco.php";
	if(isset($_GET['acao'])){	
		function buscar_acessorios($conexao)
			{
				$cod=$_GET['maquinas'];
				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta', tbl_acessorios_uso.legenda_desenho as 'Legenda',
					tbl_tipo_acessorios.descricao as 'AcessoriosPonta', tbl_localizacao.descricao as 'LocalizacaoPonta' 
					FROM tbl_maquina JOIN tbl_pontas JOIN tbl_tipo_acessorios JOIN tbl_localizacao 
					JOIN tbl_acessorios_uso
					ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina
							AND tbl_pontas.id_pontas = tbl_acessorios_uso.tbl_pontas_id_pontas
							AND tbl_tipo_acessorios.id = tbl_acessorios_uso.tbl_tipo_acessorios_id
							AND tbl_localizacao.id_localizacao = tbl_acessorios_uso.tbl_localizacao_id_localizacao
									WHERE tbl_pontas.id_pontas = '".$cod."'
									ORDER BY tbl_acessorios_uso.legenda_desenho ASC";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$acessorios = [];

				while ($acessorio = mysqli_fetch_assoc($resultado)){
					$acessorios[]=$acessorio;
				}

				return $acessorios;
			}
		function buscar_imagem_ponta($conexao)
			{
				$cod=$_GET['maquinas'];
					
				$sqlBusca = "SELECT tbl_pontas.img as 'ImagemPonta', tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta'
								FROM tbl_maquina JOIN tbl_pontas
									ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina
										WHERE tbl_pontas.id_pontas = '".$cod."'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$imgpontas = [];

				while ($imgponta = mysqli_fetch_assoc($resultado)){
					$imgpontas[]=$imgponta;
				}

				return $imgpontas;
			}
	}
	else{
		echo "Putz";
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<link href="css/menu-vertical-lateral.css" rel="stylesheet">
		<style>
		.responsive {
			max-width: 100%;
			height: auto;
		}
		</style>	
	</head>

		<body style="background: #f9f9f9">

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
		<div class="container">
			<div class="row">
				<?php
					$lista_acessorios = buscar_acessorios($conexao);
					$lista_pontas = buscar_imagem_ponta($conexao);
					
					foreach ($lista_pontas as $pontas) {
						echo "<h3>".$pontas['NomeMaquina'].": ".$pontas['NumeroPonta']."</h3>";
						echo "</div>";
						echo "<div class='row'>";
						echo "<div class='col-sm-8'>";
						echo '<img class="responsive" src="data:image/jpeg;base64,'.base64_encode( $pontas['ImagemPonta']).'">';
						echo "</div>";
					} 
				?>
				<div class="col-sm-4">
					<table class="table">
						<thead>
							<tr>
								<th scope="col"><?php echo utf8_encode("Legenda"); ?></th>
								<th scope="col"><?php echo utf8_encode("Acessórios da ponta"); ?></th>
								<th scope="col"><?php echo utf8_encode("Localização"); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($lista_acessorios as $acessorios) { ?>
							<tr>
								<th scope="row"><center><?php echo utf8_encode ($acessorios['Legenda']); ?></center></th>
								<td><?php echo utf8_encode ($acessorios['AcessoriosPonta']); ?></td>
								<td><?php echo utf8_encode ($acessorios['LocalizacaoPonta']); ?></td>
							</tr>
							<?php } ?>
							<?php
							$lista_acessorios = buscar_acessorios($conexao);
							$lista_pontas = buscar_imagem_ponta($conexao);
								if($pontas['NomeMaquina'] == "Accura"){
									echo "<tr>
											<td colspan='3'>
												<center>
													<a href='page_planilha_info_".$pontas['NomeMaquina'].".php'>".utf8_encode("Planilha de informações")."</a>
											</td>
										</tr>";
								}
								else if($pontas['NomeMaquina'] == "Duramax"){
									echo "<tr>
											<td colspan='3'>
												<center>
													<a href='page_planilha_info_".$pontas['NomeMaquina'].".php'>".utf8_encode("Planilha de informações")."</a>
											</td>
										</tr>";
								}
								 else if($pontas['NomeMaquina'] == "Centermax"){
									echo "<tr>
											<td colspan='3'>
												<center>
													<a href='page_planilha_info_".$pontas['NomeMaquina'].".php'>".utf8_encode("Planilha de informações")."</a>
											</td>
										</tr>";
								}
								else{
									echo "<tr>
											<td colspan='3'>
												<center>
													<a href='page_planilha_info_Global.php'> Planilha de informações </a>
											</td>
										</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
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