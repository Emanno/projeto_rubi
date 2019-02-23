<?php
    class RepositorioMaquinas
    {
        private $conexao;

        public function __construct($conexao)
        {
            $this->conexao = $conexao;
        }

        private function buscar_maquinas()
        {
            $sqlBusca = 'SELECT * FROM tbl_maquinas';
            $resultado = $this->conexao->query($sqlBusca);

            $maquinas = [];

            while ($maquina = $resultado->fetch_object('Maquina')) {
                $maquinas[] = $maquina;
            }

            return $maquinas;
        }
    }

?>