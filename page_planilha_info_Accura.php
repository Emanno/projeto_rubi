<?php
	session_start();

	require "classes/banco.php";
		function buscar_titulo($conexao)
			{				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina'
		FROM tbl_maquina 
						WHERE tbl_maquina.nome = 'Accura'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$titulo = [];

				while ($titulo = mysqli_fetch_assoc($resultado)){
					$titulos[]=$titulo;
				}

				return $titulos;
			}
		function buscar_master($conexao)
			{				
				$sqlBusca = "SELECT tbl_pontas.num_nome as 'NumeroPonta'
		FROM tbl_pontas 
						WHERE tbl_pontas.id_pontas = '8'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$b_master = [];

				while ($b_master = mysqli_fetch_assoc($resultado)){
					$master[]=$b_master;
				}

				return $master;
			}
			
			
		function buscar_informacao_master($conexao)
			{				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta', 
	tbl_tipo_acessorios.descricao as 'AcessoriosPonta', tbl_acessorios_uso.haste as 'HastePonta', 
	tbl_acessorios_uso.comprimento as 'ComprimentoPonta', tbl_tipo_rosca.descricao as 'TipoRosca', tbl_material.descricao as 'Material',
	tbl_discrim_peca.descricao as 'DiscrimPeca', tbl_localizacao.descricao as 'Localizacao',tbl_qnt_uso_acess_uso.qnt as 'QntUso', 
	tbl_qnt_estoque_acess_uso.qnt as 'QntEst', tbl_qnt_estoque_acess_uso.qnt_ok as 'Ok', tbl_qnt_estoque_acess_uso.qnt_nok as 'Nok',
	tbl_espec_fabrica.descricao as 'EspecFab', tbl_espec_sap.descricao as 'EspecSap',
    tbl_normal.descricao as 'Normal', tbl_acessorios_uso.num_reserva_sap as 'NumReservaSap', tbl_acessorios_uso.qnt_solic as 'QntSolic',
    tbl_acessorios_uso.status_reserva as 'StatusReserva', tbl_acessorios_uso.dt_reserva as 'DtReserva', tbl_acessorios_uso.dt_ult_pedido_recebido as 'DtUltimoPedido'
		FROM tbl_maquina JOIN tbl_pontas JOIN tbl_tipo_acessorios JOIN tbl_localizacao JOIN tbl_acessorios_uso JOIN tbl_material JOIN tbl_tipo_rosca
			JOIN tbl_discrim_peca JOIN tbl_qnt_uso_acess_uso JOIN tbl_qnt_estoque_acess_uso JOIN tbl_espec_fabrica JOIN tbl_espec_sap JOIN tbl_normal
				ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina 
					AND tbl_pontas.id_pontas = tbl_acessorios_uso.tbl_pontas_id_pontas
					AND tbl_tipo_acessorios.id = tbl_acessorios_uso.tbl_tipo_acessorios_id 
					AND tbl_localizacao.id_localizacao = tbl_acessorios_uso.tbl_localizacao_id_localizacao
					AND tbl_material.id_material = tbl_acessorios_uso.tbl_material_id_material 
					AND tbl_tipo_rosca.id_tipo_rosca = tbl_acessorios_uso.tbl_tipo_rosca_id_tipo_rosca
					AND tbl_discrim_peca.id_discrim_peca = tbl_acessorios_uso.tbl_discrim_peca_id_discrim_peca
					AND tbl_qnt_estoque_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_qnt_uso_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_espec_fabrica.id = tbl_acessorios_uso.tbl_espec_fabrica_id
                    AND tbl_espec_sap.id = tbl_acessorios_uso.tbl_espec_sap_id
                    AND tbl_normal.id_normal = tbl_acessorios_uso.tbl_normal_id_normal
						WHERE tbl_maquina.nome = 'Accura' AND tbl_pontas.num_nome='Master'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$infos_master = [];

				while ($info_master = mysqli_fetch_assoc($resultado)){
					$infos_master[]=$info_master;
				}

				return $infos_master;
			}
			
			function buscar_p2($conexao)
			{				
				$sqlBusca = "SELECT tbl_pontas.num_nome as 'NumeroPonta'
		FROM tbl_pontas 
						WHERE tbl_pontas.id_pontas = '9'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$b_p2 = [];

				while ($b_p2 = mysqli_fetch_assoc($resultado)){
					$p2[]=$b_p2;
				}

				return $p2;
			}
			
			function buscar_informacao_p2($conexao)
			{				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta', 
	tbl_tipo_acessorios.descricao as 'AcessoriosPonta', tbl_acessorios_uso.haste as 'HastePonta', 
	tbl_acessorios_uso.comprimento as 'ComprimentoPonta', tbl_tipo_rosca.descricao as 'TipoRosca', tbl_material.descricao as 'Material',
	tbl_discrim_peca.descricao as 'DiscrimPeca', tbl_localizacao.descricao as 'Localizacao',tbl_qnt_uso_acess_uso.qnt as 'QntUso', 
	tbl_qnt_estoque_acess_uso.qnt as 'QntEst', tbl_qnt_estoque_acess_uso.qnt_ok as 'Ok', tbl_qnt_estoque_acess_uso.qnt_nok as 'Nok',
	tbl_espec_fabrica.descricao as 'EspecFab', tbl_espec_sap.descricao as 'EspecSap',
    tbl_normal.descricao as 'Normal', tbl_acessorios_uso.num_reserva_sap as 'NumReservaSap', tbl_acessorios_uso.qnt_solic as 'QntSolic',
    tbl_acessorios_uso.status_reserva as 'StatusReserva', tbl_acessorios_uso.dt_reserva as 'DtReserva', tbl_acessorios_uso.dt_ult_pedido_recebido as 'DtUltimoPedido'
		FROM tbl_maquina JOIN tbl_pontas JOIN tbl_tipo_acessorios JOIN tbl_localizacao JOIN tbl_acessorios_uso JOIN tbl_material JOIN tbl_tipo_rosca
			JOIN tbl_discrim_peca JOIN tbl_qnt_uso_acess_uso JOIN tbl_qnt_estoque_acess_uso JOIN tbl_espec_fabrica JOIN tbl_espec_sap JOIN tbl_normal
				ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina 
					AND tbl_pontas.id_pontas = tbl_acessorios_uso.tbl_pontas_id_pontas
					AND tbl_tipo_acessorios.id = tbl_acessorios_uso.tbl_tipo_acessorios_id 
					AND tbl_localizacao.id_localizacao = tbl_acessorios_uso.tbl_localizacao_id_localizacao
					AND tbl_material.id_material = tbl_acessorios_uso.tbl_material_id_material 
					AND tbl_tipo_rosca.id_tipo_rosca = tbl_acessorios_uso.tbl_tipo_rosca_id_tipo_rosca
					AND tbl_discrim_peca.id_discrim_peca = tbl_acessorios_uso.tbl_discrim_peca_id_discrim_peca
					AND tbl_qnt_estoque_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_qnt_uso_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_espec_fabrica.id = tbl_acessorios_uso.tbl_espec_fabrica_id
                    AND tbl_espec_sap.id = tbl_acessorios_uso.tbl_espec_sap_id
                    AND tbl_normal.id_normal = tbl_acessorios_uso.tbl_normal_id_normal
						WHERE tbl_maquina.nome = 'Accura' AND tbl_pontas.num_nome='Ponta 2'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$infos_p2 = [];

				while ($info_p2 = mysqli_fetch_assoc($resultado)){
					$infos_p2[]=$info_p2;
				}

				return $infos_p2;
			}
			
			function buscar_p3($conexao)
			{				
				$sqlBusca = "SELECT tbl_pontas.num_nome as 'NumeroPonta'
		FROM tbl_pontas 
						WHERE tbl_pontas.id_pontas = '10'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$b_p3 = [];

				while ($b_p3 = mysqli_fetch_assoc($resultado)){
					$p3[]=$b_p3;
				}

				return $p3;
			}
			
			function buscar_informacao_p3($conexao)
			{				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta', 
	tbl_tipo_acessorios.descricao as 'AcessoriosPonta', tbl_acessorios_uso.haste as 'HastePonta', 
	tbl_acessorios_uso.comprimento as 'ComprimentoPonta', tbl_tipo_rosca.descricao as 'TipoRosca', tbl_material.descricao as 'Material',
	tbl_discrim_peca.descricao as 'DiscrimPeca', tbl_localizacao.descricao as 'Localizacao',tbl_qnt_uso_acess_uso.qnt as 'QntUso', 
	tbl_qnt_estoque_acess_uso.qnt as 'QntEst', tbl_qnt_estoque_acess_uso.qnt_ok as 'Ok', tbl_qnt_estoque_acess_uso.qnt_nok as 'Nok',
	tbl_espec_fabrica.descricao as 'EspecFab', tbl_espec_sap.descricao as 'EspecSap',
    tbl_normal.descricao as 'Normal', tbl_acessorios_uso.num_reserva_sap as 'NumReservaSap', tbl_acessorios_uso.qnt_solic as 'QntSolic',
    tbl_acessorios_uso.status_reserva as 'StatusReserva', tbl_acessorios_uso.dt_reserva as 'DtReserva', tbl_acessorios_uso.dt_ult_pedido_recebido as 'DtUltimoPedido'
		FROM tbl_maquina JOIN tbl_pontas JOIN tbl_tipo_acessorios JOIN tbl_localizacao JOIN tbl_acessorios_uso JOIN tbl_material JOIN tbl_tipo_rosca
			JOIN tbl_discrim_peca JOIN tbl_qnt_uso_acess_uso JOIN tbl_qnt_estoque_acess_uso JOIN tbl_espec_fabrica JOIN tbl_espec_sap JOIN tbl_normal
				ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina 
					AND tbl_pontas.id_pontas = tbl_acessorios_uso.tbl_pontas_id_pontas
					AND tbl_tipo_acessorios.id = tbl_acessorios_uso.tbl_tipo_acessorios_id 
					AND tbl_localizacao.id_localizacao = tbl_acessorios_uso.tbl_localizacao_id_localizacao
					AND tbl_material.id_material = tbl_acessorios_uso.tbl_material_id_material 
					AND tbl_tipo_rosca.id_tipo_rosca = tbl_acessorios_uso.tbl_tipo_rosca_id_tipo_rosca
					AND tbl_discrim_peca.id_discrim_peca = tbl_acessorios_uso.tbl_discrim_peca_id_discrim_peca
					AND tbl_qnt_estoque_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_qnt_uso_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_espec_fabrica.id = tbl_acessorios_uso.tbl_espec_fabrica_id
                    AND tbl_espec_sap.id = tbl_acessorios_uso.tbl_espec_sap_id
                    AND tbl_normal.id_normal = tbl_acessorios_uso.tbl_normal_id_normal
						WHERE tbl_maquina.nome = 'Accura' AND tbl_pontas.num_nome='Ponta 3'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$infos_p3 = [];

				while ($info_p3 = mysqli_fetch_assoc($resultado)){
					$infos_p3[]=$info_p3;
				}

				return $infos_p3;
			}
			
			function buscar_p4($conexao)
			{				
				$sqlBusca = "SELECT tbl_pontas.num_nome as 'NumeroPonta'
		FROM tbl_pontas 
						WHERE tbl_pontas.id_pontas = '11'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$b_p4 = [];

				while ($b_p4 = mysqli_fetch_assoc($resultado)){
					$p4[]=$b_p4;
				}

				return $p4;
			}
			
			function buscar_informacao_p4($conexao)
			{				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta', 
	tbl_tipo_acessorios.descricao as 'AcessoriosPonta', tbl_acessorios_uso.haste as 'HastePonta', 
	tbl_acessorios_uso.comprimento as 'ComprimentoPonta', tbl_tipo_rosca.descricao as 'TipoRosca', tbl_material.descricao as 'Material',
	tbl_discrim_peca.descricao as 'DiscrimPeca', tbl_localizacao.descricao as 'Localizacao',tbl_qnt_uso_acess_uso.qnt as 'QntUso', 
	tbl_qnt_estoque_acess_uso.qnt as 'QntEst', tbl_qnt_estoque_acess_uso.qnt_ok as 'Ok', tbl_qnt_estoque_acess_uso.qnt_nok as 'Nok',
	tbl_espec_fabrica.descricao as 'EspecFab', tbl_espec_sap.descricao as 'EspecSap',
    tbl_normal.descricao as 'Normal', tbl_acessorios_uso.num_reserva_sap as 'NumReservaSap', tbl_acessorios_uso.qnt_solic as 'QntSolic',
    tbl_acessorios_uso.status_reserva as 'StatusReserva', tbl_acessorios_uso.dt_reserva as 'DtReserva', tbl_acessorios_uso.dt_ult_pedido_recebido as 'DtUltimoPedido'
		FROM tbl_maquina JOIN tbl_pontas JOIN tbl_tipo_acessorios JOIN tbl_localizacao JOIN tbl_acessorios_uso JOIN tbl_material JOIN tbl_tipo_rosca
			JOIN tbl_discrim_peca JOIN tbl_qnt_uso_acess_uso JOIN tbl_qnt_estoque_acess_uso JOIN tbl_espec_fabrica JOIN tbl_espec_sap JOIN tbl_normal
				ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina 
					AND tbl_pontas.id_pontas = tbl_acessorios_uso.tbl_pontas_id_pontas
					AND tbl_tipo_acessorios.id = tbl_acessorios_uso.tbl_tipo_acessorios_id 
					AND tbl_localizacao.id_localizacao = tbl_acessorios_uso.tbl_localizacao_id_localizacao
					AND tbl_material.id_material = tbl_acessorios_uso.tbl_material_id_material 
					AND tbl_tipo_rosca.id_tipo_rosca = tbl_acessorios_uso.tbl_tipo_rosca_id_tipo_rosca
					AND tbl_discrim_peca.id_discrim_peca = tbl_acessorios_uso.tbl_discrim_peca_id_discrim_peca
					AND tbl_qnt_estoque_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_qnt_uso_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_espec_fabrica.id = tbl_acessorios_uso.tbl_espec_fabrica_id
                    AND tbl_espec_sap.id = tbl_acessorios_uso.tbl_espec_sap_id
                    AND tbl_normal.id_normal = tbl_acessorios_uso.tbl_normal_id_normal
						WHERE tbl_maquina.nome = 'Accura' AND tbl_pontas.num_nome='Ponta 4'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$infos_p4 = [];

				while ($info_p4 = mysqli_fetch_assoc($resultado)){
					$infos_p4[]=$info_p4;
				}

				return $infos_p4;
			}
			
			function buscar_p5($conexao)
			{				
				$sqlBusca = "SELECT tbl_pontas.num_nome as 'NumeroPonta'
		FROM tbl_pontas 
						WHERE tbl_pontas.id_pontas = '12'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$b_p5 = [];

				while ($b_p5 = mysqli_fetch_assoc($resultado)){
					$p5[]=$b_p5;
				}

				return $p5;
			}
			
			function buscar_informacao_p5($conexao)
			{				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta', 
	tbl_tipo_acessorios.descricao as 'AcessoriosPonta', tbl_acessorios_uso.haste as 'HastePonta', 
	tbl_acessorios_uso.comprimento as 'ComprimentoPonta', tbl_tipo_rosca.descricao as 'TipoRosca', tbl_material.descricao as 'Material',
	tbl_discrim_peca.descricao as 'DiscrimPeca', tbl_localizacao.descricao as 'Localizacao',tbl_qnt_uso_acess_uso.qnt as 'QntUso', 
	tbl_qnt_estoque_acess_uso.qnt as 'QntEst', tbl_qnt_estoque_acess_uso.qnt_ok as 'Ok', tbl_qnt_estoque_acess_uso.qnt_nok as 'Nok',
	tbl_espec_fabrica.descricao as 'EspecFab', tbl_espec_sap.descricao as 'EspecSap',
    tbl_normal.descricao as 'Normal', tbl_acessorios_uso.num_reserva_sap as 'NumReservaSap', tbl_acessorios_uso.qnt_solic as 'QntSolic',
    tbl_acessorios_uso.status_reserva as 'StatusReserva', tbl_acessorios_uso.dt_reserva as 'DtReserva', tbl_acessorios_uso.dt_ult_pedido_recebido as 'DtUltimoPedido'
		FROM tbl_maquina JOIN tbl_pontas JOIN tbl_tipo_acessorios JOIN tbl_localizacao JOIN tbl_acessorios_uso JOIN tbl_material JOIN tbl_tipo_rosca
			JOIN tbl_discrim_peca JOIN tbl_qnt_uso_acess_uso JOIN tbl_qnt_estoque_acess_uso JOIN tbl_espec_fabrica JOIN tbl_espec_sap JOIN tbl_normal
				ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina 
					AND tbl_pontas.id_pontas = tbl_acessorios_uso.tbl_pontas_id_pontas
					AND tbl_tipo_acessorios.id = tbl_acessorios_uso.tbl_tipo_acessorios_id 
					AND tbl_localizacao.id_localizacao = tbl_acessorios_uso.tbl_localizacao_id_localizacao
					AND tbl_material.id_material = tbl_acessorios_uso.tbl_material_id_material 
					AND tbl_tipo_rosca.id_tipo_rosca = tbl_acessorios_uso.tbl_tipo_rosca_id_tipo_rosca
					AND tbl_discrim_peca.id_discrim_peca = tbl_acessorios_uso.tbl_discrim_peca_id_discrim_peca
					AND tbl_qnt_estoque_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_qnt_uso_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_espec_fabrica.id = tbl_acessorios_uso.tbl_espec_fabrica_id
                    AND tbl_espec_sap.id = tbl_acessorios_uso.tbl_espec_sap_id
                    AND tbl_normal.id_normal = tbl_acessorios_uso.tbl_normal_id_normal
						WHERE tbl_maquina.nome = 'Accura' AND tbl_pontas.num_nome='Ponta 5'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$infos_p5 = [];

				while ($info_p5 = mysqli_fetch_assoc($resultado)){
					$infos_p5[]=$info_p5;
				}

				return $infos_p5;
			}
			
			function buscar_p6($conexao)
			{				
				$sqlBusca = "SELECT tbl_pontas.num_nome as 'NumeroPonta'
		FROM tbl_pontas 
						WHERE tbl_pontas.id_pontas = '13'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$b_p6 = [];

				while ($b_p6 = mysqli_fetch_assoc($resultado)){
					$p6[]=$b_p6;
				}

				return $p6;
			}
			
			function buscar_informacao_p6($conexao)
			{				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta', 
	tbl_tipo_acessorios.descricao as 'AcessoriosPonta', tbl_acessorios_uso.haste as 'HastePonta', 
	tbl_acessorios_uso.comprimento as 'ComprimentoPonta', tbl_tipo_rosca.descricao as 'TipoRosca', tbl_material.descricao as 'Material',
	tbl_discrim_peca.descricao as 'DiscrimPeca', tbl_localizacao.descricao as 'Localizacao',tbl_qnt_uso_acess_uso.qnt as 'QntUso', 
	tbl_qnt_estoque_acess_uso.qnt as 'QntEst', tbl_qnt_estoque_acess_uso.qnt_ok as 'Ok', tbl_qnt_estoque_acess_uso.qnt_nok as 'Nok',
	tbl_espec_fabrica.descricao as 'EspecFab', tbl_espec_sap.descricao as 'EspecSap',
    tbl_normal.descricao as 'Normal', tbl_acessorios_uso.num_reserva_sap as 'NumReservaSap', tbl_acessorios_uso.qnt_solic as 'QntSolic',
    tbl_acessorios_uso.status_reserva as 'StatusReserva', tbl_acessorios_uso.dt_reserva as 'DtReserva', tbl_acessorios_uso.dt_ult_pedido_recebido as 'DtUltimoPedido'
		FROM tbl_maquina JOIN tbl_pontas JOIN tbl_tipo_acessorios JOIN tbl_localizacao JOIN tbl_acessorios_uso JOIN tbl_material JOIN tbl_tipo_rosca
			JOIN tbl_discrim_peca JOIN tbl_qnt_uso_acess_uso JOIN tbl_qnt_estoque_acess_uso JOIN tbl_espec_fabrica JOIN tbl_espec_sap JOIN tbl_normal
				ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina 
					AND tbl_pontas.id_pontas = tbl_acessorios_uso.tbl_pontas_id_pontas
					AND tbl_tipo_acessorios.id = tbl_acessorios_uso.tbl_tipo_acessorios_id 
					AND tbl_localizacao.id_localizacao = tbl_acessorios_uso.tbl_localizacao_id_localizacao
					AND tbl_material.id_material = tbl_acessorios_uso.tbl_material_id_material 
					AND tbl_tipo_rosca.id_tipo_rosca = tbl_acessorios_uso.tbl_tipo_rosca_id_tipo_rosca
					AND tbl_discrim_peca.id_discrim_peca = tbl_acessorios_uso.tbl_discrim_peca_id_discrim_peca
					AND tbl_qnt_estoque_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_qnt_uso_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_espec_fabrica.id = tbl_acessorios_uso.tbl_espec_fabrica_id
                    AND tbl_espec_sap.id = tbl_acessorios_uso.tbl_espec_sap_id
                    AND tbl_normal.id_normal = tbl_acessorios_uso.tbl_normal_id_normal
						WHERE tbl_maquina.nome = 'Accura' AND tbl_pontas.num_nome='Ponta 6'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$infos_p6 = [];

				while ($info_p6 = mysqli_fetch_assoc($resultado)){
					$infos_p6[]=$info_p6;
				}

				return $infos_p6;
			}
			
			function buscar_p7($conexao)
			{				
				$sqlBusca = "SELECT tbl_pontas.num_nome as 'NumeroPonta'
		FROM tbl_pontas 
						WHERE tbl_pontas.id_pontas = '14'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$b_p7 = [];

				while ($b_p7 = mysqli_fetch_assoc($resultado)){
					$p7[]=$b_p7;
				}

				return $p7;
			}
			
			function buscar_informacao_p7($conexao)
			{				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta', 
	tbl_tipo_acessorios.descricao as 'AcessoriosPonta', tbl_acessorios_uso.haste as 'HastePonta', 
	tbl_acessorios_uso.comprimento as 'ComprimentoPonta', tbl_tipo_rosca.descricao as 'TipoRosca', tbl_material.descricao as 'Material',
	tbl_discrim_peca.descricao as 'DiscrimPeca', tbl_localizacao.descricao as 'Localizacao',tbl_qnt_uso_acess_uso.qnt as 'QntUso', 
	tbl_qnt_estoque_acess_uso.qnt as 'QntEst', tbl_qnt_estoque_acess_uso.qnt_ok as 'Ok', tbl_qnt_estoque_acess_uso.qnt_nok as 'Nok',
	tbl_espec_fabrica.descricao as 'EspecFab', tbl_espec_sap.descricao as 'EspecSap',
    tbl_normal.descricao as 'Normal', tbl_acessorios_uso.num_reserva_sap as 'NumReservaSap', tbl_acessorios_uso.qnt_solic as 'QntSolic',
    tbl_acessorios_uso.status_reserva as 'StatusReserva', tbl_acessorios_uso.dt_reserva as 'DtReserva', tbl_acessorios_uso.dt_ult_pedido_recebido as 'DtUltimoPedido'
		FROM tbl_maquina JOIN tbl_pontas JOIN tbl_tipo_acessorios JOIN tbl_localizacao JOIN tbl_acessorios_uso JOIN tbl_material JOIN tbl_tipo_rosca
			JOIN tbl_discrim_peca JOIN tbl_qnt_uso_acess_uso JOIN tbl_qnt_estoque_acess_uso JOIN tbl_espec_fabrica JOIN tbl_espec_sap JOIN tbl_normal
				ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina 
					AND tbl_pontas.id_pontas = tbl_acessorios_uso.tbl_pontas_id_pontas
					AND tbl_tipo_acessorios.id = tbl_acessorios_uso.tbl_tipo_acessorios_id 
					AND tbl_localizacao.id_localizacao = tbl_acessorios_uso.tbl_localizacao_id_localizacao
					AND tbl_material.id_material = tbl_acessorios_uso.tbl_material_id_material 
					AND tbl_tipo_rosca.id_tipo_rosca = tbl_acessorios_uso.tbl_tipo_rosca_id_tipo_rosca
					AND tbl_discrim_peca.id_discrim_peca = tbl_acessorios_uso.tbl_discrim_peca_id_discrim_peca
					AND tbl_qnt_estoque_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_qnt_uso_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_espec_fabrica.id = tbl_acessorios_uso.tbl_espec_fabrica_id
                    AND tbl_espec_sap.id = tbl_acessorios_uso.tbl_espec_sap_id
                    AND tbl_normal.id_normal = tbl_acessorios_uso.tbl_normal_id_normal
						WHERE tbl_maquina.nome = 'Accura' AND tbl_pontas.num_nome='Ponta 7'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$infos_p7 = [];

				while ($info_p7 = mysqli_fetch_assoc($resultado)){
					$infos_p7[]=$info_p7;
				}

				return $infos_p7;
			}
			
			function buscar_p8($conexao)
			{				
				$sqlBusca = "SELECT tbl_pontas.num_nome as 'NumeroPonta'
		FROM tbl_pontas 
						WHERE tbl_pontas.id_pontas = '15'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$b_p8 = [];

				while ($b_p8 = mysqli_fetch_assoc($resultado)){
					$p8[]=$b_p8;
				}

				return $p8;
			}
			
			function buscar_informacao_p8($conexao)
			{				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta', 
	tbl_tipo_acessorios.descricao as 'AcessoriosPonta', tbl_acessorios_uso.haste as 'HastePonta', 
	tbl_acessorios_uso.comprimento as 'ComprimentoPonta', tbl_tipo_rosca.descricao as 'TipoRosca', tbl_material.descricao as 'Material',
	tbl_discrim_peca.descricao as 'DiscrimPeca', tbl_localizacao.descricao as 'Localizacao',tbl_qnt_uso_acess_uso.qnt as 'QntUso', 
	tbl_qnt_estoque_acess_uso.qnt as 'QntEst', tbl_qnt_estoque_acess_uso.qnt_ok as 'Ok', tbl_qnt_estoque_acess_uso.qnt_nok as 'Nok',
	tbl_espec_fabrica.descricao as 'EspecFab', tbl_espec_sap.descricao as 'EspecSap',
    tbl_normal.descricao as 'Normal', tbl_acessorios_uso.num_reserva_sap as 'NumReservaSap', tbl_acessorios_uso.qnt_solic as 'QntSolic',
    tbl_acessorios_uso.status_reserva as 'StatusReserva', tbl_acessorios_uso.dt_reserva as 'DtReserva', tbl_acessorios_uso.dt_ult_pedido_recebido as 'DtUltimoPedido'
		FROM tbl_maquina JOIN tbl_pontas JOIN tbl_tipo_acessorios JOIN tbl_localizacao JOIN tbl_acessorios_uso JOIN tbl_material JOIN tbl_tipo_rosca
			JOIN tbl_discrim_peca JOIN tbl_qnt_uso_acess_uso JOIN tbl_qnt_estoque_acess_uso JOIN tbl_espec_fabrica JOIN tbl_espec_sap JOIN tbl_normal
				ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina 
					AND tbl_pontas.id_pontas = tbl_acessorios_uso.tbl_pontas_id_pontas
					AND tbl_tipo_acessorios.id = tbl_acessorios_uso.tbl_tipo_acessorios_id 
					AND tbl_localizacao.id_localizacao = tbl_acessorios_uso.tbl_localizacao_id_localizacao
					AND tbl_material.id_material = tbl_acessorios_uso.tbl_material_id_material 
					AND tbl_tipo_rosca.id_tipo_rosca = tbl_acessorios_uso.tbl_tipo_rosca_id_tipo_rosca
					AND tbl_discrim_peca.id_discrim_peca = tbl_acessorios_uso.tbl_discrim_peca_id_discrim_peca
					AND tbl_qnt_estoque_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_qnt_uso_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_espec_fabrica.id = tbl_acessorios_uso.tbl_espec_fabrica_id
                    AND tbl_espec_sap.id = tbl_acessorios_uso.tbl_espec_sap_id
                    AND tbl_normal.id_normal = tbl_acessorios_uso.tbl_normal_id_normal
						WHERE tbl_maquina.nome = 'Accura' AND tbl_pontas.num_nome='Ponta 8'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$infos_p8 = [];

				while ($info_p8 = mysqli_fetch_assoc($resultado)){
					$infos_p8[]=$info_p8;
				}

				return $infos_p8;
			}
			
			function buscar_p9($conexao)
			{				
				$sqlBusca = "SELECT tbl_pontas.num_nome as 'NumeroPonta'
		FROM tbl_pontas 
						WHERE tbl_pontas.id_pontas = '16'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$b_p9 = [];

				while ($b_p9 = mysqli_fetch_assoc($resultado)){
					$p9[]=$b_p9;
				}

				return $p9;
			}
			
			function buscar_informacao_p9($conexao)
			{				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta', 
	tbl_tipo_acessorios.descricao as 'AcessoriosPonta', tbl_acessorios_uso.haste as 'HastePonta', 
	tbl_acessorios_uso.comprimento as 'ComprimentoPonta', tbl_tipo_rosca.descricao as 'TipoRosca', tbl_material.descricao as 'Material',
	tbl_discrim_peca.descricao as 'DiscrimPeca', tbl_localizacao.descricao as 'Localizacao',tbl_qnt_uso_acess_uso.qnt as 'QntUso', 
	tbl_qnt_estoque_acess_uso.qnt as 'QntEst', tbl_qnt_estoque_acess_uso.qnt_ok as 'Ok', tbl_qnt_estoque_acess_uso.qnt_nok as 'Nok',
	tbl_espec_fabrica.descricao as 'EspecFab', tbl_espec_sap.descricao as 'EspecSap',
    tbl_normal.descricao as 'Normal', tbl_acessorios_uso.num_reserva_sap as 'NumReservaSap', tbl_acessorios_uso.qnt_solic as 'QntSolic',
    tbl_acessorios_uso.status_reserva as 'StatusReserva', tbl_acessorios_uso.dt_reserva as 'DtReserva', tbl_acessorios_uso.dt_ult_pedido_recebido as 'DtUltimoPedido'
		FROM tbl_maquina JOIN tbl_pontas JOIN tbl_tipo_acessorios JOIN tbl_localizacao JOIN tbl_acessorios_uso JOIN tbl_material JOIN tbl_tipo_rosca
			JOIN tbl_discrim_peca JOIN tbl_qnt_uso_acess_uso JOIN tbl_qnt_estoque_acess_uso JOIN tbl_espec_fabrica JOIN tbl_espec_sap JOIN tbl_normal
				ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina 
					AND tbl_pontas.id_pontas = tbl_acessorios_uso.tbl_pontas_id_pontas
					AND tbl_tipo_acessorios.id = tbl_acessorios_uso.tbl_tipo_acessorios_id 
					AND tbl_localizacao.id_localizacao = tbl_acessorios_uso.tbl_localizacao_id_localizacao
					AND tbl_material.id_material = tbl_acessorios_uso.tbl_material_id_material 
					AND tbl_tipo_rosca.id_tipo_rosca = tbl_acessorios_uso.tbl_tipo_rosca_id_tipo_rosca
					AND tbl_discrim_peca.id_discrim_peca = tbl_acessorios_uso.tbl_discrim_peca_id_discrim_peca
					AND tbl_qnt_estoque_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_qnt_uso_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_espec_fabrica.id = tbl_acessorios_uso.tbl_espec_fabrica_id
                    AND tbl_espec_sap.id = tbl_acessorios_uso.tbl_espec_sap_id
                    AND tbl_normal.id_normal = tbl_acessorios_uso.tbl_normal_id_normal
						WHERE tbl_maquina.nome = 'Accura' AND tbl_pontas.num_nome='Ponta 9'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$infos_p9 = [];

				while ($info_p9 = mysqli_fetch_assoc($resultado)){
					$infos_p9[]=$info_p9;
				}

				return $infos_p9;
			}
			
			function buscar_itens($conexao)
			{				
				$sqlBusca = "SELECT tbl_pontas.num_nome as 'NumeroPonta'
		FROM tbl_pontas 
						WHERE tbl_pontas.id_pontas = '17'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$b_itens = [];

				while ($b_itens = mysqli_fetch_assoc($resultado)){
					$itens[]=$b_itens;
				}

				return $itens;
			}
			
			function buscar_informacao_itens($conexao)
			{				
				$sqlBusca = "SELECT tbl_maquina.nome as 'NomeMaquina', tbl_pontas.num_nome as 'NumeroPonta', 
	tbl_tipo_acessorios.descricao as 'AcessoriosPonta', tbl_acessorios_uso.haste as 'HastePonta', 
	tbl_acessorios_uso.comprimento as 'ComprimentoPonta', tbl_tipo_rosca.descricao as 'TipoRosca', tbl_material.descricao as 'Material',
	tbl_discrim_peca.descricao as 'DiscrimPeca', tbl_localizacao.descricao as 'Localizacao',tbl_qnt_uso_acess_uso.qnt as 'QntUso', 
	tbl_qnt_estoque_acess_uso.qnt as 'QntEst', tbl_qnt_estoque_acess_uso.qnt_ok as 'Ok', tbl_qnt_estoque_acess_uso.qnt_nok as 'Nok',
	tbl_espec_fabrica.descricao as 'EspecFab', tbl_espec_sap.descricao as 'EspecSap',
    tbl_normal.descricao as 'Normal', tbl_acessorios_uso.num_reserva_sap as 'NumReservaSap', tbl_acessorios_uso.qnt_solic as 'QntSolic',
    tbl_acessorios_uso.status_reserva as 'StatusReserva', tbl_acessorios_uso.dt_reserva as 'DtReserva', tbl_acessorios_uso.dt_ult_pedido_recebido as 'DtUltimoPedido'
		FROM tbl_maquina JOIN tbl_pontas JOIN tbl_tipo_acessorios JOIN tbl_localizacao JOIN tbl_acessorios_uso JOIN tbl_material JOIN tbl_tipo_rosca
			JOIN tbl_discrim_peca JOIN tbl_qnt_uso_acess_uso JOIN tbl_qnt_estoque_acess_uso JOIN tbl_espec_fabrica JOIN tbl_espec_sap JOIN tbl_normal
				ON tbl_maquina.id_maquina = tbl_pontas.tbl_maquina_id_maquina 
					AND tbl_pontas.id_pontas = tbl_acessorios_uso.tbl_pontas_id_pontas
					AND tbl_tipo_acessorios.id = tbl_acessorios_uso.tbl_tipo_acessorios_id 
					AND tbl_localizacao.id_localizacao = tbl_acessorios_uso.tbl_localizacao_id_localizacao
					AND tbl_material.id_material = tbl_acessorios_uso.tbl_material_id_material 
					AND tbl_tipo_rosca.id_tipo_rosca = tbl_acessorios_uso.tbl_tipo_rosca_id_tipo_rosca
					AND tbl_discrim_peca.id_discrim_peca = tbl_acessorios_uso.tbl_discrim_peca_id_discrim_peca
					AND tbl_qnt_estoque_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_qnt_uso_acess_uso.tbl_acessorios_uso_id_acessorios = tbl_acessorios_uso.id_acessorios
					AND tbl_espec_fabrica.id = tbl_acessorios_uso.tbl_espec_fabrica_id
                    AND tbl_espec_sap.id = tbl_acessorios_uso.tbl_espec_sap_id
                    AND tbl_normal.id_normal = tbl_acessorios_uso.tbl_normal_id_normal
						WHERE tbl_maquina.nome = 'Accura' AND tbl_pontas.num_nome='Itens'";
				$resultado = mysqli_query($conexao, $sqlBusca);

				$infos_itens = [];

				while ($info_itens = mysqli_fetch_assoc($resultado)){
					$infos_itens[]=$info_itens;
				}

				return $infos_itens;
			}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<link href="css/menu-vertical-lateral.css" rel="stylesheet">
		<script>
			$(function () {
			  $('[data-toggle="popover"]').popover()
			})
		</script>
		<style>
			td, th{ font-size: 11px; }
			.loc { color: #007bff; }
			.loc:hover { color: #0056b3; text-decoration: underline; cursor: help; }
		</style>
	</head>
        <?php
			$lista_titulo = buscar_titulo($conexao);
			$lista_master = buscar_master($conexao);
            $lista_info_master = buscar_informacao_master($conexao);
			$lista_p2 = buscar_p2($conexao);
            $lista_info_p2 = buscar_informacao_p2($conexao);
			$lista_p3 = buscar_p3($conexao);
            $lista_info_p3 = buscar_informacao_p3($conexao);
			$lista_p4 = buscar_p4($conexao);
            $lista_info_p4 = buscar_informacao_p4($conexao);
			$lista_p5 = buscar_p5($conexao);
            $lista_info_p5 = buscar_informacao_p5($conexao);
			$lista_p6 = buscar_p6($conexao);
            $lista_info_p6 = buscar_informacao_p6($conexao);
			$lista_p7 = buscar_p7($conexao);
            $lista_info_p7 = buscar_informacao_p7($conexao);
			$lista_p8 = buscar_p8($conexao);
            $lista_info_p8 = buscar_informacao_p8($conexao);
			$lista_p9 = buscar_p9($conexao);
            $lista_info_p9 = buscar_informacao_p9($conexao);
			$lista_itens = buscar_itens($conexao);
            $lista_info_itens = buscar_informacao_itens($conexao);
        ?>
	<body style="background: #f9f9f9"> 
		<div class="container">
			<div class="row">
			<table class="table table-sm table-striped">
				  <thead>
					<tr>
						<td colspan='17'>
						<h3><center><?php foreach ($lista_titulo as $titulo) { ?>
							<?php echo utf8_encode ($titulo['NomeMaquina']); ?>
						<?php } ?>
						</center></h3>
						</td>
					</tr>
					<tr>
						<td colspan='17'>
						<h5><center><?php foreach ($lista_master as $master) { ?>
							<?php echo utf8_encode ($master['NumeroPonta']); ?>
						<?php } ?>
						</center></h5>
						</td>
					</tr>
					<tr>
					  <th scope="col"><center>Acessórios</center></th>
					  <th scope="col"><center>Haste (mm)</center></th>
					  <th scope="col"><center>Comprimento (mm)</center></th>
					  <th scope="col"><center>Rosca</center></th>
					  <th scope="col"><center>Material</center></th>
					  <th scope="col"><center>Discriminação da peça</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top" title="Legenda" 
								data-content="<table>
									<tr>
										<td colspan='2'> <Center> A = Armário </center> </td>
									</tr>
									<tr>
										<td colspan='2'><Center> K = Kit </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> P = Prateleira </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> AC = Accura </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> DM = Duramax </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> N/A = Não se aplica </center></td>
									</tr>
									<tr>
										<td colspan='2'><Center> INSTALADO = Instalado na máquina </center></td>
									</tr>
									<tr>
										<td colspan='2'><center> - = Sem especificações </center></td>
									</tr> 
								</table>">Localização
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Quantidade em uso</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top"
							   title="Legenda"
							   data-content="<table>
									<tr>
										<td style='background-color: #00b050; color: #00b050;'> -------- </td><td> Estoque OK</td>
									</tr>
									<tr>
										<td style='background-color: #ffff00; color: #ffff00;'> -------- </td><td> Estoque Atenção</td>
									</tr>
									<tr>
										<td style='background-color: #ff0000; color: #ff0000;'> -------- </td><td> Estoque NOK</td>
									</tr>
									<tr>
										<td colspan='2' style='font-style: italic; font-size: 10px;'>* Os estoques sem identificação são de acessórios que não precisam ser requisitados</td>
									</tr>
								</table>">Quantidade em estoque
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Especificação fábrica</center></th>
					  <th scope="col"><center>Especificação no SAP</center></th>
					  <th scope="col"><center>Normal</center></th>
					  <th scope="col"><center>Número da reserva no SAP</center></th>
					  <th scope="col"><center>Quantidade solicitada</center></th>
					  <th scope="col"><center>Status da reserva</center></th>
					  <th scope="col"><center>Data da reserva</center></th>
					  <th scope="col"><center>Data do último pedido recebido e quantidade</center></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach ($lista_info_master as $info_master) { ?>
							<tr>
								
								<td><?php echo utf8_encode ($info_master['AcessoriosPonta']); ?></td>
								<td><center><?php echo utf8_encode ($info_master['HastePonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['ComprimentoPonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['TipoRosca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['Material']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['DiscrimPeca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['Localizacao']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['QntUso']); ?></center></td>
								<?php
									$lim_ok = $info_master['Ok'];
									$lim_nok = $info_master['Nok'];
									$qnt = $info_master['QntEst'];

									if (is_null($lim_ok) AND is_null($lim_nok))
									{
										echo "<td><center>".$info_master['QntEst']."</center></td>";
									}
									else if($qnt > $lim_ok)
									{
										echo "<td style='background-color:#00b050;'><center>".$info_master['QntEst']."</center></td>";
									}
									else if ($qnt < $lim_nok)
									{
										echo "<td style='background-color:#ff0000;'><center>".$info_master['QntEst']."</center></td>";
									}
									else
									{
										echo "<td style='background-color:#ffff00;'><center>".$info_master['QntEst']."</center></td>";
									}
								?>
								<td><center><?php echo utf8_encode ($info_master['EspecFab']); ?></center></td>		
								<td><center><?php echo utf8_encode ($info_master['EspecSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['Normal']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['NumReservaSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['QntSolic']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['StatusReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['DtReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_master['DtUltimoPedido']); ?></center></td>
							</tr>
							<?php } ?>
				  </tbody>
				  <thead>
						<td colspan='17'>
						<h5><center><?php foreach ($lista_p2 as $p2) { ?>
							<?php echo utf8_encode ($p2['NumeroPonta']); ?>
						<?php } ?>
						</center></h5>
						</td>
					<tr>
					  <th scope="col"><center>Acessórios</center></th>
					  <th scope="col"><center>Haste (mm)</center></th>
					  <th scope="col"><center>Comprimento (mm)</center></th>
					  <th scope="col"><center>Rosca</center></th>
					  <th scope="col"><center>Material</center></th>
					  <th scope="col"><center>Discriminação da peça</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top" title="Legenda" 
								data-content="<table>
									<tr>
										<td colspan='2'> <Center> A = Armário </center> </td>
									</tr>
									<tr>
										<td colspan='2'><Center> K = Kit </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> P = Prateleira </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> AC = Accura </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> DM = Duramax </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> N/A = Não se aplica </center></td>
									</tr>
									<tr>
										<td colspan='2'><Center> INSTALADO = Instalado na máquina </center></td>
									</tr>
									<tr>
										<td colspan='2'><center> - = Sem especificações </center></td>
									</tr> 
								</table>">Localização
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Quantidade em uso</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top"
							   title="Legenda"
							   data-content="<table>
									<tr>
										<td style='background-color: #00b050; color: #00b050;'> -------- </td><td> Estoque OK</td>
									</tr>
									<tr>
										<td style='background-color: #ffff00; color: #ffff00;'> -------- </td><td> Estoque Atenção</td>
									</tr>
									<tr>
										<td style='background-color: #ff0000; color: #ff0000;'> -------- </td><td> Estoque NOK</td>
									</tr>
									<tr>
										<td colspan='2' style='font-style: italic; font-size: 10px;'>* Os estoques sem identificação são de acessórios que não precisam ser requisitados</td>
									</tr>
								</table>">Quantidade em estoque
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Especificação fábrica</center></th>
					  <th scope="col"><center>Especificação no SAP</center></th>
					  <th scope="col"><center>Normal</center></th>
					  <th scope="col"><center>Número da reserva no SAP</center></th>
					  <th scope="col"><center>Quantidade solicitada</center></th>
					  <th scope="col"><center>Status da reserva</center></th>
					  <th scope="col"><center>Data da reserva</center></th>
					  <th scope="col"><center>Data do último pedido recebido e quantidade</center></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach ($lista_info_p2 as $info_p2) { ?>
							<tr>
								<td><?php echo utf8_encode ($info_p2['AcessoriosPonta']); ?></td>
								<td><center><?php echo utf8_encode ($info_p2['HastePonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['ComprimentoPonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['TipoRosca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['Material']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['DiscrimPeca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['Localizacao']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['QntUso']); ?></center></td>
								<?php
									$lim_ok = $info_p2['Ok'];
									$lim_nok = $info_p2['Nok'];
									$qnt = $info_p2['QntEst'];

									if (is_null($lim_ok) AND is_null($lim_nok))
									{
										echo "<td><center>".$info_p2['QntEst']."</center></td>";
									}
									else if($qnt > $lim_ok)
									{
										echo "<td style='background-color:#00b050;'><center>".$info_p2['QntEst']."</center></td>";
									}
									else if ($qnt < $lim_nok)
									{
										echo "<td style='background-color:#ff0000;'><center>".$info_p2['QntEst']."</center></td>";
									}
									else
									{
										echo "<td style='background-color:#ffff00;'><center>".$info_p2['QntEst']."</center></td>";
									}
								?>
								<td><center><?php echo utf8_encode ($info_p2['EspecFab']); ?></center></td>			
								<td><center><?php echo utf8_encode ($info_p2['EspecSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['Normal']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['NumReservaSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['QntSolic']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['StatusReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['DtReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p2['DtUltimoPedido']); ?></center></td>				
							
							</tr>
							<?php } ?>
				  </tbody>
				  <thead>
						<td colspan='17'>
						<h5><center><?php foreach ($lista_p3 as $p3) { ?>
							<?php echo utf8_encode ($p3['NumeroPonta']); ?>
						<?php } ?>
						</center></h5>
						</td>
					<tr>
					  <th scope="col"><center>Acessórios</center></th>
					  <th scope="col"><center>Haste (mm)</center></th>
					  <th scope="col"><center>Comprimento (mm)</center></th>
					  <th scope="col"><center>Rosca</center></th>
					  <th scope="col"><center>Material</center></th>
					  <th scope="col"><center>Discriminação da peça</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top" title="Legenda" 
								data-content="<table>
									<tr>
										<td colspan='2'> <Center> A = Armário </center> </td>
									</tr>
									<tr>
										<td colspan='2'><Center> K = Kit </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> P = Prateleira </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> AC = Accura </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> DM = Duramax </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> N/A = Não se aplica </center></td>
									</tr>
									<tr>
										<td colspan='2'><Center> INSTALADO = Instalado na máquina </center></td>
									</tr>
									<tr>
										<td colspan='2'><center> - = Sem especificações </center></td>
									</tr> 
								</table>">Localização
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Quantidade em uso</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top"
							   title="Legenda"
							   data-content="<table>
									<tr>
										<td style='background-color: #00b050; color: #00b050;'> -------- </td><td> Estoque OK</td>
									</tr>
									<tr>
										<td style='background-color: #ffff00; color: #ffff00;'> -------- </td><td> Estoque Atenção</td>
									</tr>
									<tr>
										<td style='background-color: #ff0000; color: #ff0000;'> -------- </td><td> Estoque NOK</td>
									</tr>
									<tr>
										<td colspan='2' style='font-style: italic; font-size: 10px;'>* Os estoques sem identificação são de acessórios que não precisam ser requisitados</td>
									</tr>
								</table>">Quantidade em estoque
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Especificação fábrica</center></th>
					  <th scope="col"><center>Especificação no SAP</center></th>
					  <th scope="col"><center>Normal</center></th>
					  <th scope="col"><center>Número da reserva no SAP</center></th>
					  <th scope="col"><center>Quantidade solicitada</center></th>
					  <th scope="col"><center>Status da reserva</center></th>
					  <th scope="col"><center>Data da reserva</center></th>
					  <th scope="col"><center>Data do último pedido recebido e quantidade</center></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach ($lista_info_p3 as $info_p3) { ?>
							<tr>
								
								<td><?php echo utf8_encode ($info_p3['AcessoriosPonta']); ?></td>
								<td><center><?php echo utf8_encode ($info_p3['HastePonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['ComprimentoPonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['TipoRosca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['Material']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['DiscrimPeca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['Localizacao']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['QntUso']); ?></center></td>
								<?php
									$lim_ok = $info_p3['Ok'];
									$lim_nok = $info_p3['Nok'];
									$qnt = $info_p3['QntEst'];

									if (is_null($lim_ok) AND is_null($lim_nok))
									{
										echo "<td><center>".$info_p3['QntEst']."</center></td>";
									}
									else if($qnt > $lim_ok)
									{
										echo "<td style='background-color:#00b050;'><center>".$info_p3['QntEst']."</center></td>";
									}
									else if ($qnt < $lim_nok)
									{
										echo "<td style='background-color:#ff0000;'><center>".$info_p3['QntEst']."</center></td>";
									}
									else
									{
										echo "<td style='background-color:#ffff00;'><center>".$info_p3['QntEst']."</center></td>";
									}
								?>
								<td><center><?php echo utf8_encode ($info_p3['EspecFab']); ?></center></td>			
								<td><center><?php echo utf8_encode ($info_p3['EspecSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['Normal']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['NumReservaSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['QntSolic']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['StatusReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['DtReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p3['DtUltimoPedido']); ?></center></td>						
							
							</tr>
							<?php } ?>
				  </tbody>
				  <thead>
						<td colspan='17'>
						<h5><center><?php foreach ($lista_p4 as $p4) { ?>
							<?php echo utf8_encode ($p4['NumeroPonta']); ?>
						<?php } ?>
						</center></h5>
						</td>
					<tr>
					  <th scope="col"><center>Acessórios</center></th>
					  <th scope="col"><center>Haste (mm)</center></th>
					  <th scope="col"><center>Comprimento (mm)</center></th>
					  <th scope="col"><center>Rosca</center></th>
					  <th scope="col"><center>Material</center></th>
					  <th scope="col"><center>Discriminação da peça</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top" title="Legenda" 
								data-content="<table>
									<tr>
										<td colspan='2'> <Center> A = Armário </center> </td>
									</tr>
									<tr>
										<td colspan='2'><Center> K = Kit </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> P = Prateleira </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> AC = Accura </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> DM = Duramax </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> N/A = Não se aplica </center></td>
									</tr>
									<tr>
										<td colspan='2'><Center> INSTALADO = Instalado na máquina </center></td>
									</tr>
									<tr>
										<td colspan='2'><center> - = Sem especificações </center></td>
									</tr> 
								</table>">Localização
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Quantidade em uso</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top"
							   title="Legenda"
							   data-content="<table>
									<tr>
										<td style='background-color: #00b050; color: #00b050;'> -------- </td><td> Estoque OK</td>
									</tr>
									<tr>
										<td style='background-color: #ffff00; color: #ffff00;'> -------- </td><td> Estoque Atenção</td>
									</tr>
									<tr>
										<td style='background-color: #ff0000; color: #ff0000;'> -------- </td><td> Estoque NOK</td>
									</tr>
									<tr>
										<td colspan='2' style='font-style: italic; font-size: 10px;'>* Os estoques sem identificação são de acessórios que não precisam ser requisitados</td>
									</tr>
								</table>">Quantidade em estoque
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Especificação fábrica</center></th>
					  <th scope="col"><center>Especificação no SAP</center></th>
					  <th scope="col"><center>Normal</center></th>
					  <th scope="col"><center>Número da reserva no SAP</center></th>
					  <th scope="col"><center>Quantidade solicitada</center></th>
					  <th scope="col"><center>Status da reserva</center></th>
					  <th scope="col"><center>Data da reserva</center></th>
					  <th scope="col"><center>Data do último pedido recebido e quantidade</center></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach ($lista_info_p4 as $info_p4) { ?>
							<tr>
								
								<td><?php echo utf8_encode ($info_p4['AcessoriosPonta']); ?></td>
								<td><center><?php echo utf8_encode ($info_p4['HastePonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['ComprimentoPonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['TipoRosca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['Material']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['DiscrimPeca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['Localizacao']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['QntUso']); ?></center></td>
								<?php
									$lim_ok = $info_p4['Ok'];
									$lim_nok = $info_p4['Nok'];
									$qnt = $info_p4['QntEst'];

									if (is_null($lim_ok) AND is_null($lim_nok))
									{
										echo "<td><center>".$info_p4['QntEst']."</center></td>";
									}
									else if($qnt > $lim_ok)
									{
										echo "<td style='background-color:#00b050;'><center>".$info_p4['QntEst']."</center></td>";
									}
									else if ($qnt < $lim_nok)
									{
										echo "<td style='background-color:#ff0000;'><center>".$info_p4['QntEst']."</center></td>";
									}
									else
									{
										echo "<td style='background-color:#ffff00;'><center>".$info_p4['QntEst']."</center></td>";
									}
								?>
								<td><center><?php echo utf8_encode ($info_p4['EspecFab']); ?></center></td>			
								<td><center><?php echo utf8_encode ($info_p4['EspecSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['Normal']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['NumReservaSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['QntSolic']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['StatusReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['DtReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p4['DtUltimoPedido']); ?></center></td>						
							
							</tr>
							<?php } ?>
				  </tbody>
				  <thead>
						<td colspan='17'>
						<h5><center><?php foreach ($lista_p5 as $p5) { ?>
							<?php echo utf8_encode ($p5['NumeroPonta']); ?>
						<?php } ?>
						</center></h5>
						</td>
					<tr>
					  <th scope="col"><center>Acessórios</center></th>
					  <th scope="col"><center>Haste (mm)</center></th>
					  <th scope="col"><center>Comprimento (mm)</center></th>
					  <th scope="col"><center>Rosca</center></th>
					  <th scope="col"><center>Material</center></th>
					  <th scope="col"><center>Discriminação da peça</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top" title="Legenda" 
								data-content="<table>
									<tr>
										<td colspan='2'> <Center> A = Armário </center> </td>
									</tr>
									<tr>
										<td colspan='2'><Center> K = Kit </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> P = Prateleira </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> AC = Accura </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> DM = Duramax </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> N/A = Não se aplica </center></td>
									</tr>
									<tr>
										<td colspan='2'><Center> INSTALADO = Instalado na máquina </center></td>
									</tr>
									<tr>
										<td colspan='2'><center> - = Sem especificações </center></td>
									</tr> 
								</table>">Localização
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Quantidade em uso</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top"
							   title="Legenda"
							   data-content="<table>
									<tr>
										<td style='background-color: #00b050; color: #00b050;'> -------- </td><td> Estoque OK</td>
									</tr>
									<tr>
										<td style='background-color: #ffff00; color: #ffff00;'> -------- </td><td> Estoque Atenção</td>
									</tr>
									<tr>
										<td style='background-color: #ff0000; color: #ff0000;'> -------- </td><td> Estoque NOK</td>
									</tr>
									<tr>
										<td colspan='2' style='font-style: italic; font-size: 10px;'>* Os estoques sem identificação são de acessórios que não precisam ser requisitados</td>
									</tr>
								</table>">Quantidade em estoque
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Especificação fábrica</center></th>
					  <th scope="col"><center>Especificação no SAP</center></th>
					  <th scope="col"><center>Normal</center></th>
					  <th scope="col"><center>Número da reserva no SAP</center></th>
					  <th scope="col"><center>Quantidade solicitada</center></th>
					  <th scope="col"><center>Status da reserva</center></th>
					  <th scope="col"><center>Data da reserva</center></th>
					  <th scope="col"><center>Data do último pedido recebido e quantidade</center></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach ($lista_info_p5 as $info_p5) { ?>
							<tr>
								
								<td><?php echo utf8_encode ($info_p5['AcessoriosPonta']); ?></td>
								<td><center><?php echo utf8_encode ($info_p5['HastePonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['ComprimentoPonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['TipoRosca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['Material']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['DiscrimPeca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['Localizacao']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['QntUso']); ?></center></td>
								<?php
									$lim_ok = $info_p5['Ok'];
									$lim_nok = $info_p5['Nok'];
									$qnt = $info_p5['QntEst'];

									if (is_null($lim_ok) AND is_null($lim_nok))
									{
										echo "<td><center>".$info_p5['QntEst']."</center></td>";
									}
									else if($qnt > $lim_ok)
									{
										echo "<td style='background-color:#00b050;'><center>".$info_p5['QntEst']."</center></td>";
									}
									else if ($qnt < $lim_nok)
									{
										echo "<td style='background-color:#ff0000;'><center>".$info_p5['QntEst']."</center></td>";
									}
									else
									{
										echo "<td style='background-color:#ffff00;'><center>".$info_p5['QntEst']."</center></td>";
									}
								?>
								<td><center><?php echo utf8_encode ($info_p5['EspecFab']); ?></center></td>			
								<td><center><?php echo utf8_encode ($info_p5['EspecSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['Normal']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['NumReservaSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['QntSolic']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['StatusReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['DtReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p5['DtUltimoPedido']); ?></center></td>						
							
							</tr>
							<?php } ?>
				  </tbody>
				  <thead>
						<td colspan='17'>
						<h5><center><?php foreach ($lista_p6 as $p6) { ?>
							<?php echo utf8_encode ($p6['NumeroPonta']); ?>
						<?php } ?>
						</center></h5>
						</td>
					<tr>
					  <th scope="col"><center>Acessórios</center></th>
					  <th scope="col"><center>Haste (mm)</center></th>
					  <th scope="col"><center>Comprimento (mm)</center></th>
					  <th scope="col"><center>Rosca</center></th>
					  <th scope="col"><center>Material</center></th>
					  <th scope="col"><center>Discriminação da peça</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top" title="Legenda" 
								data-content="<table>
									<tr>
										<td colspan='2'> <Center> A = Armário </center> </td>
									</tr>
									<tr>
										<td colspan='2'><Center> K = Kit </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> P = Prateleira </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> AC = Accura </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> DM = Duramax </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> N/A = Não se aplica </center></td>
									</tr>
									<tr>
										<td colspan='2'><Center> INSTALADO = Instalado na máquina </center></td>
									</tr>
									<tr>
										<td colspan='2'><center> - = Sem especificações </center></td>
									</tr> 
								</table>">Localização
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Quantidade em uso</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top"
							   title="Legenda"
							   data-content="<table>
									<tr>
										<td style='background-color: #00b050; color: #00b050;'> -------- </td><td> Estoque OK</td>
									</tr>
									<tr>
										<td style='background-color: #ffff00; color: #ffff00;'> -------- </td><td> Estoque Atenção</td>
									</tr>
									<tr>
										<td style='background-color: #ff0000; color: #ff0000;'> -------- </td><td> Estoque NOK</td>
									</tr>
									<tr>
										<td colspan='2' style='font-style: italic; font-size: 10px;'>* Os estoques sem identificação são de acessórios que não precisam ser requisitados</td>
									</tr>
								</table>">Quantidade em estoque
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Especificação fábrica</center></th>
					  <th scope="col"><center>Especificação no SAP</center></th>
					  <th scope="col"><center>Normal</center></th>
					  <th scope="col"><center>Número da reserva no SAP</center></th>
					  <th scope="col"><center>Quantidade solicitada</center></th>
					  <th scope="col"><center>Status da reserva</center></th>
					  <th scope="col"><center>Data da reserva</center></th>
					  <th scope="col"><center>Data do último pedido recebido e quantidade</center></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach ($lista_info_p6 as $info_p6) { ?>
							<tr>
								
								<td><?php echo utf8_encode ($info_p6['AcessoriosPonta']); ?></td>
								<td><center><?php echo utf8_encode ($info_p6['HastePonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['ComprimentoPonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['TipoRosca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['Material']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['DiscrimPeca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['Localizacao']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['QntUso']); ?></center></td>
								<?php
									$lim_ok = $info_p6['Ok'];
									$lim_nok = $info_p6['Nok'];
									$qnt = $info_p6['QntEst'];

									if (is_null($lim_ok) AND is_null($lim_nok))
									{
										echo "<td><center>".$info_p6['QntEst']."</center></td>";
									}
									else if($qnt > $lim_ok)
									{
										echo "<td style='background-color:#00b050;'><center>".$info_p6['QntEst']."</center></td>";
									}
									else if ($qnt < $lim_nok)
									{
										echo "<td style='background-color:#ff0000;'><center>".$info_p6['QntEst']."</center></td>";
									}
									else
									{
										echo "<td style='background-color:#ffff00;'><center>".$info_p6['QntEst']."</center></td>";
									}
								?>
								<td><center><?php echo utf8_encode ($info_p6['EspecFab']); ?></center></td>				
								<td><center><?php echo utf8_encode ($info_p6['EspecSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['Normal']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['NumReservaSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['QntSolic']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['StatusReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['DtReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p6['DtUltimoPedido']); ?></center></td>					
							
							</tr>
							<?php } ?>
				  </tbody>
				  <thead>
						<td colspan='17'>
						<h5><center><?php foreach ($lista_p7 as $p7) { ?>
							<?php echo utf8_encode ($p7['NumeroPonta']); ?>
						<?php } ?>
						</center></h5>
						</td>
					<tr>
					  <th scope="col"><center>Acessórios</center></th>
					  <th scope="col"><center>Haste (mm)</center></th>
					  <th scope="col"><center>Comprimento (mm)</center></th>
					  <th scope="col"><center>Rosca</center></th>
					  <th scope="col"><center>Material</center></th>
					  <th scope="col"><center>Discriminação da peça</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top" title="Legenda" 
								data-content="<table>
									<tr>
										<td colspan='2'> <Center> A = Armário </center> </td>
									</tr>
									<tr>
										<td colspan='2'><Center> K = Kit </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> P = Prateleira </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> AC = Accura </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> DM = Duramax </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> N/A = Não se aplica </center></td>
									</tr>
									<tr>
										<td colspan='2'><Center> INSTALADO = Instalado na máquina </center></td>
									</tr>
									<tr>
										<td colspan='2'><center> - = Sem especificações </center></td>
									</tr> 
								</table>">Localização
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Quantidade em uso</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top"
							   title="Legenda"
							   data-content="<table>
									<tr>
										<td style='background-color: #00b050; color: #00b050;'> -------- </td><td> Estoque OK</td>
									</tr>
									<tr>
										<td style='background-color: #ffff00; color: #ffff00;'> -------- </td><td> Estoque Atenção</td>
									</tr>
									<tr>
										<td style='background-color: #ff0000; color: #ff0000;'> -------- </td><td> Estoque NOK</td>
									</tr>
									<tr>
										<td colspan='2' style='font-style: italic; font-size: 10px;'>* Os estoques sem identificação são de acessórios que não precisam ser requisitados</td>
									</tr>
								</table>">Quantidade em estoque
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Especificação fábrica</center></th>
					  <th scope="col"><center>Especificação no SAP</center></th>
					  <th scope="col"><center>Normal</center></th>
					  <th scope="col"><center>Número da reserva no SAP</center></th>
					  <th scope="col"><center>Quantidade solicitada</center></th>
					  <th scope="col"><center>Status da reserva</center></th>
					  <th scope="col"><center>Data da reserva</center></th>
					  <th scope="col"><center>Data do último pedido recebido e quantidade</center></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach ($lista_info_p7 as $info_p7) { ?>
							<tr>
								
								<td><?php echo utf8_encode ($info_p7['AcessoriosPonta']); ?></td>
								<td><center><?php echo utf8_encode ($info_p7['HastePonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['ComprimentoPonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['TipoRosca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['Material']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['DiscrimPeca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['Localizacao']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['QntUso']); ?></center></td>
								<?php
									$lim_ok = $info_p7['Ok'];
									$lim_nok = $info_p7['Nok'];
									$qnt = $info_p7['QntEst'];

									if (is_null($lim_ok) AND is_null($lim_nok))
									{
										echo "<td><center>".$info_p7['QntEst']."</center></td>";
									}
									else if($qnt > $lim_ok)
									{
										echo "<td style='background-color:#00b050;'><center>".$info_p7['QntEst']."</center></td>";
									}
									else if ($qnt < $lim_nok)
									{
										echo "<td style='background-color:#ff0000;'><center>".$info_p7['QntEst']."</center></td>";
									}
									else
									{
										echo "<td style='background-color:#ffff00;'><center>".$info_p7['QntEst']."</center></td>";
									}
								?>
								<td><center><?php echo utf8_encode ($info_p7['EspecFab']); ?></center></td>				
								<td><center><?php echo utf8_encode ($info_p7['EspecSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['Normal']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['NumReservaSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['QntSolic']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['StatusReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['DtReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p7['DtUltimoPedido']); ?></center></td>							
							
							</tr>
							<?php } ?>
				  </tbody>
				  <thead>
						<td colspan='17'>
						<h5><center><?php foreach ($lista_p8 as $p8) { ?>
							<?php echo utf8_encode ($p8['NumeroPonta']); ?>
						<?php } ?>
						</center></h5>
						</td>
					<tr>
					  <th scope="col"><center>Acessórios</center></th>
					  <th scope="col"><center>Haste (mm)</center></th>
					  <th scope="col"><center>Comprimento (mm)</center></th>
					  <th scope="col"><center>Rosca</center></th>
					  <th scope="col"><center>Material</center></th>
					  <th scope="col"><center>Discriminação da peça</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top" title="Legenda" 
								data-content="<table>
									<tr>
										<td colspan='2'> <Center> A = Armário </center> </td>
									</tr>
									<tr>
										<td colspan='2'><Center> K = Kit </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> P = Prateleira </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> AC = Accura </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> DM = Duramax </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> N/A = Não se aplica </center></td>
									</tr>
									<tr>
										<td colspan='2'><Center> INSTALADO = Instalado na máquina </center></td>
									</tr>
									<tr>
										<td colspan='2'><center> - = Sem especificações </center></td>
									</tr> 
								</table>">Localização
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Quantidade em uso</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top"
							   title="Legenda"
							   data-content="<table>
									<tr>
										<td style='background-color: #00b050; color: #00b050;'> -------- </td><td> Estoque OK</td>
									</tr>
									<tr>
										<td style='background-color: #ffff00; color: #ffff00;'> -------- </td><td> Estoque Atenção</td>
									</tr>
									<tr>
										<td style='background-color: #ff0000; color: #ff0000;'> -------- </td><td> Estoque NOK</td>
									</tr>
									<tr>
										<td colspan='2' style='font-style: italic; font-size: 10px;'>* Os estoques sem identificação são de acessórios que não precisam ser requisitados</td>
									</tr>
								</table>">Quantidade em estoque
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Especificação fábrica</center></th>
					  <th scope="col"><center>Especificação no SAP</center></th>
					  <th scope="col"><center>Normal</center></th>
					  <th scope="col"><center>Número da reserva no SAP</center></th>
					  <th scope="col"><center>Quantidade solicitada</center></th>
					  <th scope="col"><center>Status da reserva</center></th>
					  <th scope="col"><center>Data da reserva</center></th>
					  <th scope="col"><center>Data do último pedido recebido e quantidade</center></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach ($lista_info_p8 as $info_p8) { ?>
							<tr>
								
								<td><?php echo utf8_encode ($info_p8['AcessoriosPonta']); ?></td>
								<td><center><?php echo utf8_encode ($info_p8['HastePonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['ComprimentoPonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['TipoRosca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['Material']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['DiscrimPeca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['Localizacao']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['QntUso']); ?></center></td>
								<?php
									$lim_ok = $info_p8['Ok'];
									$lim_nok = $info_p8['Nok'];
									$qnt = $info_p8['QntEst'];

									if (is_null($lim_ok) AND is_null($lim_nok))
									{
										echo "<td><center>".$info_p8['QntEst']."</center></td>";
									}
									else if($qnt > $lim_ok)
									{
										echo "<td style='background-color:#00b050;'><center>".$info_p8['QntEst']."</center></td>";
									}
									else if ($qnt < $lim_nok)
									{
										echo "<td style='background-color:#ff0000;'><center>".$info_p8['QntEst']."</center></td>";
									}
									else
									{
										echo "<td style='background-color:#ffff00;'><center>".$info_p8['QntEst']."</center></td>";
									}
								?>
								<td><center><?php echo utf8_encode ($info_p8['EspecFab']); ?></center></td>				
								<td><center><?php echo utf8_encode ($info_p8['EspecSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['Normal']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['NumReservaSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['QntSolic']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['StatusReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['DtReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p8['DtUltimoPedido']); ?></center></td>						
							
							</tr>
							<?php } ?>
				  </tbody>
				  <thead>
						<td colspan='17'>
						<h5><center><?php foreach ($lista_p9 as $p9) { ?>
							<?php echo utf8_encode ($p9['NumeroPonta']); ?>
						<?php } ?>
						</center></h5>
						</td>
					<tr>
					  <th scope="col"><center>Acessórios</center></th>
					  <th scope="col"><center>Haste (mm)</center></th>
					  <th scope="col"><center>Comprimento (mm)</center></th>
					  <th scope="col"><center>Rosca</center></th>
					  <th scope="col"><center>Material</center></th>
					  <th scope="col"><center>Discriminação da peça</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top" title="Legenda" 
								data-content="<table>
									<tr>
										<td colspan='2'> <Center> A = Armário </center> </td>
									</tr>
									<tr>
										<td colspan='2'><Center> K = Kit </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> P = Prateleira </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> AC = Accura </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> DM = Duramax </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> N/A = Não se aplica </center></td>
									</tr>
									<tr>
										<td colspan='2'><Center> INSTALADO = Instalado na máquina </center></td>
									</tr>
									<tr>
										<td colspan='2'><center> - = Sem especificações </center></td>
									</tr> 
								</table>">Localização
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Quantidade em uso</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top"
							   title="Legenda"
							   data-content="<table>
									<tr>
										<td style='background-color: #00b050; color: #00b050;'> -------- </td><td> Estoque OK</td>
									</tr>
									<tr>
										<td style='background-color: #ffff00; color: #ffff00;'> -------- </td><td> Estoque Atenção</td>
									</tr>
									<tr>
										<td style='background-color: #ff0000; color: #ff0000;'> -------- </td><td> Estoque NOK</td>
									</tr>
									<tr>
										<td colspan='2' style='font-style: italic; font-size: 10px;'>* Os estoques sem identificação são de acessórios que não precisam ser requisitados</td>
									</tr>
								</table>">Quantidade em estoque
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Especificação fábrica</center></th>
					  <th scope="col"><center>Especificação no SAP</center></th>
					  <th scope="col"><center>Normal</center></th>
					  <th scope="col"><center>Número da reserva no SAP</center></th>
					  <th scope="col"><center>Quantidade solicitada</center></th>
					  <th scope="col"><center>Status da reserva</center></th>
					  <th scope="col"><center>Data da reserva</center></th>
					  <th scope="col"><center>Data do último pedido recebido e quantidade</center></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach ($lista_info_p9 as $info_p9) { ?>
							<tr>
								
								<td><?php echo utf8_encode ($info_p9['AcessoriosPonta']); ?></td>
								<td><center><?php echo utf8_encode ($info_p9['HastePonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['ComprimentoPonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['TipoRosca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['Material']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['DiscrimPeca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['Localizacao']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['QntUso']); ?></center></td>
								<?php
									$lim_ok = $info_p9['Ok'];
									$lim_nok = $info_p9['Nok'];
									$qnt = $info_p9['QntEst'];

									if (is_null($lim_ok) AND is_null($lim_nok))
									{
										echo "<td><center>".$info_p9['QntEst']."</center></td>";
									}
									else if($qnt > $lim_ok)
									{
										echo "<td style='background-color:#00b050;'><center>".$info_p9['QntEst']."</center></td>";
									}
									else if ($qnt < $lim_nok)
									{
										echo "<td style='background-color:#ff0000;'><center>".$info_p9['QntEst']."</center></td>";
									}
									else
									{
										echo "<td style='background-color:#ffff00;'><center>".$info_p9['QntEst']."</center></td>";
									}
								?>
								<td><center><?php echo utf8_encode ($info_p9['EspecFab']); ?></center></td>				
								<td><center><?php echo utf8_encode ($info_p9['EspecSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['Normal']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['NumReservaSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['QntSolic']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['StatusReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['DtReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_p9['DtUltimoPedido']); ?></center></td>								
							</tr>
							<?php } ?>
				  </tbody>
				  <thead>
						<td colspan='17'>
						<h5><center><?php foreach ($lista_itens as $itens) { ?>
							<?php echo utf8_encode ($itens['NumeroPonta']); ?>
						<?php } ?>
						</center></h5>
						</td>
					<tr>
					  <th scope="col"><center>Acessórios</center></th>
					  <th scope="col"><center>Haste (mm)</center></th>
					  <th scope="col"><center>Comprimento (mm)</center></th>
					  <th scope="col"><center>Rosca</center></th>
					  <th scope="col"><center>Material</center></th>
					  <th scope="col"><center>Discriminação da peça</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top" title="Legenda" 
								data-content="<table>
									<tr>
										<td colspan='2'> <Center> A = Armário </center> </td>
									</tr>
									<tr>
										<td colspan='2'><Center> K = Kit </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> P = Prateleira </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> AC = Accura </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> DM = Duramax </centeR></td>
									</tr>
									<tr>
										<td colspan='2'><Center> N/A = Não se aplica </center></td>
									</tr>
									<tr>
										<td colspan='2'><Center> INSTALADO = Instalado na máquina </center></td>
									</tr>
									<tr>
										<td colspan='2'><center> - = Sem especificações </center></td>
									</tr> 
								</table>">Localização
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Quantidade em uso</center></th>
					  <th scope="col" class="loc">
						<center>
							<a tabindex="0" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="top"
							   title="Legenda"
							   data-content="<table>
									<tr>
										<td style='background-color: #00b050; color: #00b050;'> -------- </td><td> Estoque OK</td>
									</tr>
									<tr>
										<td style='background-color: #ffff00; color: #ffff00;'> -------- </td><td> Estoque Atenção</td>
									</tr>
									<tr>
										<td style='background-color: #ff0000; color: #ff0000;'> -------- </td><td> Estoque NOK</td>
									</tr>
									<tr>
										<td colspan='2' style='font-style: italic; font-size: 10px;'>* Os estoques sem identificação são de acessórios que não precisam ser requisitados</td>
									</tr>
								</table>">Quantidade em estoque
							</a>
						</center>
					  </th>
					  <th scope="col"><center>Especificação fábrica</center></th>
					  <th scope="col"><center>Especificação no SAP</center></th>
					  <th scope="col"><center>Normal</center></th>
					  <th scope="col"><center>Número da reserva no SAP</center></th>
					  <th scope="col"><center>Quantidade solicitada</center></th>
					  <th scope="col"><center>Status da reserva</center></th>
					  <th scope="col"><center>Data da reserva</center></th>
					  <th scope="col"><center>Data do último pedido recebido e quantidade</center></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach ($lista_info_itens as $info_itens) { ?>
							<tr>
								
								<td><?php echo utf8_encode ($info_itens['AcessoriosPonta']); ?></td>
								<td><center><?php echo utf8_encode ($info_itens['HastePonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['ComprimentoPonta']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['TipoRosca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['Material']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['DiscrimPeca']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['Localizacao']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['QntUso']); ?></center></td>
								<?php
									$lim_ok = $info_itens['Ok'];
									$lim_nok = $info_itens['Nok'];
									$qnt = $info_itens['QntEst'];

									if (is_null($lim_ok) AND is_null($lim_nok))
									{
										echo "<td><center>".$info_itens['QntEst']."</center></td>";
									}
									else if($qnt > $lim_ok)
									{
										echo "<td style='background-color:#00b050;'><center>".$info_itens['QntEst']."</center></td>";
									}
									else if ($qnt < $lim_nok)
									{
										echo "<td style='background-color:#ff0000;'><center>".$info_itens['QntEst']."</center></td>";
									}
									else
									{
										echo "<td style='background-color:#ffff00;'><center>".$info_itens['QntEst']."</center></td>";
									}
								?>
								<td><center><?php echo utf8_encode ($info_itens['EspecFab']); ?></center></td>				
								<td><center><?php echo utf8_encode ($info_itens['EspecSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['Normal']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['NumReservaSap']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['QntSolic']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['StatusReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['DtReserva']); ?></center></td>
								<td><center><?php echo utf8_encode ($info_itens['DtUltimoPedido']); ?></center></td>							
							
							</tr>
							<?php } ?>
				  </tbody>
				</table>
			</div>
		</div>
    </body>
</html>