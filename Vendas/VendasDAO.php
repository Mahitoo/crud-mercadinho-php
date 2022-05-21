<?php
    include '../conexao.php';

    class vendasDao{
        public function cadastrarVendas(Vendas $v){
            $sql = 'insert into vendas (codigo_venda, produto_venda, quantidade_venda, funcionario_venda) values(?,?,?,?)';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultadoVendas = $con->prepare($sql);
            $resultadoVendas->bindValue(1, $v->getCodigo_vendas());
            $resultadoVendas->bindValue(2, $v->getProduto_vendas());
            $resultadoVendas->bindValue(3, $v->getQuantidade_vendas());
            $resultadoVendas->bindValue(4, $v->getFuncionario_vendas());
            
            $final = $resultadoVendas->execute();

            if($final){
                echo "<script LANGUAGE='JavaScript'>
                window.alert('Venda Cadastrada com sucesso');
                window.location.href='VendasPage.php';
                </script>";
            }
        }

        public function atualizarVendas(Vendas $v){
            $sql = 'update vendas set funcionario_venda=?, quantidade_venda=?, produto_vendas=? where codigo_venda=?';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultadoVendas = $con->prepare($sql);
            $resultadoVendas->bindValue(4, $v->getCodigo_vendas());
            $resultadoVendas->bindValue(3, $v->getProduto_vendas());
            $resultadoVendas->bindValue(1, $v->getFuncionario_vendas());
            $resultadoVendas->bindValue(2, $v->getQuantidade_vendas());
            
            $final = $resultadoVendas->execute();

            if($final){
                echo "<script LANGUAGE='JavaScript'>
                window.alert('Venda atualizada com sucesso');
                window.location.href='VendasPage.php';
                </script>";
            }
        }

       
        public function deletarVendas($codigo_vendas){
            $sql = 'delete from vendas where codigo_venda=?';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->bindValue(1, $codigo_vendas);

            $final = $resultado->execute();

            if($final){
                echo "<script LANGUAGE='JavaScript'>
                window.alert('Venda deletada com sucesso');
                window.location.href='VendasPage.php';
                </script>";
            }
        }
    }
?>