<?php
  $codigo_estoque = filter_input(INPUT_GET,'codigo_estoque');
  $produto = filter_input(INPUT_GET,'produto');
  $quantidade = filter_input(INPUT_GET,'quantidade');
  $valor = filter_input(INPUT_GET,'valor');
  $botao_estoque = filter_input(INPUT_GET,'botao_estoque');

  include 'estoque.php';
  $estoq = new estoque();

  $estoq->setCodigo($codigo_estoque);
  $estoq->setProduto($produto);
  $estoq->setQuantidade($quantidade);
  $estoq->setValor($valor);

  include 'estoqueDAO.php';
  $estoqDao = new estoqueDao();

  if($botao_estoque=='Cadastrar'){
    $estoqDao->cadastrarEstoque($estoq);
  }else if($botao_estoque=='consultar_estoque'){
      $estoqDao->consultarEstoque();
      foreach($estoqDao->consultarEstoque() as $resEstoq){
        echo $resEstoq['codigo_estoque']."<br>";
        echo $resEstoq['produto']."<br>";
        echo $resEstoq['quantidade']."<br>";
        echo $resEstoq['valor_compra']."<br><br>";
      }
    }else if ($botao_estoque=='Atualizar'){
      $estoqDao->atualizarEstoque($estoq);
    }else if ($botao_estoque=='Deletar'){
      $estoqDao->deletarEstoque($estoq);
    }
  

  
?>