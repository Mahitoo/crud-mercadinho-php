<?php
class funcionario{
    private $codigo, $nome, $cargo;

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function getCargo(){
        return $this->cargo;
    }
  
}
?>