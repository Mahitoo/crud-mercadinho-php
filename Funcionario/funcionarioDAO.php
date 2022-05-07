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
                window.alert('Cadastrado com sucesso');
                window.location.href='../index.php';
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
                window.alert('Atualizado com sucesso');
                window.location.href='../index.php';
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
                window.alert('Deletado com sucesso');
                window.location.href='../index.php';
                </script>";
            }
        }
        

        public function consultarFuncionario(){
            $sql = 'select * from funcionario';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->execute();
            if($resultado->rowCount()>0){
                $valor = $resultado->fetchAll(\PDO::FETCH_ASSOC);
                return $valor;
            }

            
        }

    }
?>