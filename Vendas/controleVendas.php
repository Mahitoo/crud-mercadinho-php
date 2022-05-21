<?php
  $codigo_vendas = filter_input(INPUT_GET,'codigo_vendas');
  $produto_vendas = filter_input(INPUT_GET,'produto_vendas');
  $quantidade_vendas = filter_input(INPUT_GET,'quantidade_vendas');
  $funcionario_vendas = filter_input(INPUT_GET,'funcionario_vendas');
  $botao_vendas= filter_input(INPUT_GET,'botao_vendas');

  include 'Vendas.php';
  $venda = new vendas();

  $venda->setCodigo_vendas($codigo_vendas);
  $venda->setProduto_vendas($produto_vendas);
  $venda->setQuantidade_vendas($quantidade_vendas);
  $venda->setFuncionario_vendas($funcionario_vendas);

  include 'VendasDAO.php';
  $vendaDao = new vendasDao();

  if($botao_vendas=='Cadastrar'){
     $vendaDao->cadastrarVendas($venda);
  }else if ($botao_vendas=='Atualizar'){
       $vendaDao->atualizarVendas($venda);
    }else if ($botao_vendas=='Deletar'){
       $vendaDao->deletarVendas($codigo_vendas);
    }
?>