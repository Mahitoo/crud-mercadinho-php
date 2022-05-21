<?php
    include '../conexao.php';

    class funcionarioDao{
        public function cadastrarFuncionario(Funcionario $f){
            $sql = 'insert into funcionario (codigo_funcionario, nome, cargo) values(?,?,?)';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->bindValue(1, $f->getCodigo());
            $resultado->bindValue(2, $f->getNome());
            $resultado->bindValue(3, $f->getCargo());

            $final = $resultado->execute();

            if($final){
                echo "<script LANGUAGE='JavaScript'>
                window.alert('Funcionario cadastrado com sucesso');
                window.location.href='FuncionarioPage.php';
                </script>";
            }
        }

        public function atualizarFuncionario(Funcionario $f){
            $sql = 'update funcionario set nome=?, cargo=? where codigo_funcionario=?';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->bindValue(3, $f->getCodigo());
            $resultado->bindValue(1, $f->getNome());
            $resultado->bindValue(2, $f->getCargo());

            $final = $resultado->execute();

            if($final){
                echo "<script LANGUAGE='JavaScript'>
                window.alert('Funcionario atualizado com sucesso');
                window.location.href='FuncionarioPage.php';
                </script>";
            }
        }

        public function deletarFuncionario($codigo){
            $sql = 'delete from funcionario where codigo_funcionario=?';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->bindValue(1, $codigo);

            $final = $resultado->execute();

            if($final){
                echo "<script LANGUAGE='JavaScript'>
                window.alert('Funcionario deletado com sucesso');
                window.location.href='FuncionarioPage.php';
                </script>";
            }
        }
    }
?>