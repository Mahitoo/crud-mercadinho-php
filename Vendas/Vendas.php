<?php
class vendas{
    private $codigo_vendas, $produto_vendas, $quantidade_vendas, $funcionario_vendas;
    public function getCodigo_vendas(){
        return $this->codigo_vendas;
    }

    public function setCodigo_vendas($codigo_Vendas){
        $this->codigo_vendas = $codigo_Vendas;
    }

    public function getProduto_vendas(){
        return $this->produto_vendas;
    }

    public function setProduto_vendas($produto_vendas){
        $this->produto_vendas = $produto_vendas;
    }

    public function getQuantidade_vendas(){
        return $this->quantidade_vendas;
    }

    public function setQuantidade_vendas($quantidade_vendas){
        $this->quantidade_vendas = $quantidade_vendas;
    }

    public function getFuncionario_vendas(){
        return $this->funcionario_vendas;
    }

    public function setFuncionario_vendas($funcionario_vendas){
        $this->funcionario_vendas = $funcionario_vendas;
    }

  
}
?>