<?php
class Maquina
{
    private $id_maquina;
    private $nome_maquina;

    public function setId($id_maquina)
    {
        $this->id_maquina = (int) $id_maquina;
    }

    public function getId()
    {
        return $this->id_maquina;
    }

    public function setNome($nome_maquina)
    {
        $this->nome_maquina = $nome_maquina;
    }

    public function getNome()
    {
        return $this->nome_maquina;
    }
} 
?>