<?php
class estoque{
    private $codigo_estoque, $produto, $quantidade, $valor;

    public function getCodigo_estoque(){
        return $this->codigo_estoque;
    }

    public function setCodigo($codigo_estoque){
        $this->codigo_estoque = $codigo_estoque;
    }

    public function getProduto(){
        return $this->produto;
    }

    public function setProduto($produto){
        $this->produto = $produto;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setvalor($valor){
        $this->valor = $valor;
    }

  
}
?>