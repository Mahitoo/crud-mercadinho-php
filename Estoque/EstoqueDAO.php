<?php
    include '../conexao.php';

    class estoqueDao{
        public function cadastrarEstoque(Estoque $e){
            $sql = 'insert into estoque (codigo_estoque, produto, quantidade, valor_compra) values(?,?,?,?)';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultadoEstoque = $con->prepare($sql);
            $resultadoEstoque->bindValue(1, $e->getCodigo_estoque());
            $resultadoEstoque->bindValue(2, $e->getProduto());
            $resultadoEstoque->bindValue(3, $e->getQuantidade());
            $resultadoEstoque->bindValue(4, $e->getValor());
            
            $final = $resultadoEstoque->execute();

            if($final){
                echo "<script LANGUAGE='JavaScript'>
                window.alert('Estoque cadastrado com sucesso');
                window.location.href='EstoquePage.php';
                </script>";
            }
        }

        public function atualizarEstoque(Estoque $e){
            $sql = 'update estoque set produto=?, quantidade=?, valor_compra=? where codigo_estoque=?';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultadoEstoque = $con->prepare($sql);
            $resultadoEstoque->bindValue(4, $e->getCodigo_estoque());
            $resultadoEstoque->bindValue(3, $e->getValor());
            $resultadoEstoque->bindValue(1, $e->getProduto());
            $resultadoEstoque->bindValue(2, $e->getQuantidade());
            
            $final = $resultadoEstoque->execute();

            if($final){
                echo "<script LANGUAGE='JavaScript'>
                window.alert('Estoque atualizado com sucesso');
                window.location.href='EstoquePage.php';
                </script>";
            }
        }

        public function deletarEstoque($codigo_estoque){
            $sql = 'delete from estoque where codigo_estoque=?';
            $banco = new conexao();
            $con = $banco->getConexao();
            $resultadoEstoque = $con->prepare($sql);
            $resultadoEstoque->bindValue(1, $codigo_estoque); 
            $final = $resultadoEstoque->execute();
            if($final){
                echo "<script LANGUAGE='JavaScript'>
                window.alert('Estoque deletado com sucesso');
                window.location.href='EstoquePage.php';
                </script>";
            }
        }
    }
?>