<?php

    if(isset($_POST['start_Now']) !== false)
    {
        // $vendas = false;
        // $cultivo = false;
        $nome_Usuario = $_POST['nome_Usuario'];
        $data_Nasc = $_POST['data_Nasc'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $celular_telefone = $_POST['celular_telefone'];
        $logradouro = $_POST['logradouro'];
        $numero_Resid = $_POST['numero_Resid'];
        $complemento = $_POST['complemento'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cod_Atuacao = "1";
        // if($_POST['Cultivo'] == false)
        // {
        //     $cod_Atuacao = $_POST['Vendas'];
        // }
        $senha = $_POST['senha'];
        $confirm_Senha = $_POST['confirm_Senha'];
        // header('location:cocacola.com.br');
        // if($vendas !== false){
        //     $cod_Atuacao = $vendas;
        //     $cultivo = false;
        // }else{
        //     $cod_Atuacao = $cultivo;
        //     $vendas = false;
        // }


        // if($senha !== $confirm_Senha){
        //     echo "<script language='javascript' type='text/javascript'>
        //         function senha_nao_coincide();
        //         {
        //             alert('Atenção, as senhas precisam coincidir!');
        //         }
        //     </script>";
        // }

        // if($senha == "" || $confirm_Senha == ""){
        //     echo "<script language='javascript' type='text/javascript'>
        //         function senha_nao_coincide();
        //         {
        //             alert('Atenção, as senhas precisam ser preenchidas!');
        //         }
        //     </script>";
        // }


        $con = mysqli_connect('localhost', 'root', '', 'hortibook');

        if ($con->connect_error) {
            die("Erro de conexão: " . $con->connect_error);
          }
        if($senha == $confirm_Senha)
        {
            $sql = "INSERT INTO tab_usuarios (nome_Usuario,	data_Nasc, cpf,	email, celular_telefone, logradouro, numero_Resid, complemento, cep, cidade, estado, cod_Atuacao, senha, confirm_Senha) 
                    VALUES 	('$nome_Usuario', '$data_Nasc', '$cpf', '$email', '$celular_telefone', '$logradouro', '$numero_Resid', '$complemento', '$cep', '$cidade', '$estado', '$cod_Atuacao', '$senha', '$confirm_Senha')";

            //print_r($sql);

            $resultado = mysqli_query($con, $sql);
            //$resultado = mysqli_fetch_assoc($con, $sql);		

            if ($resultado)
            {
                echo "<script language='javascript' type='text/javascript'>
                alert('Usuário cadastrado com sucesso!');
                </script>";
                //header('location:index.php');
            }
            else
            {
                echo "<script language='javascript' type='text/javascript'>
                        alert('Erro ao se cadastrar!');
                </script>";
                //header('location:index.php');
            }
        }else{
            echo "<script language='javascript' type='text/javascript'>
                alert('As senhas não coincidem!');
                </script>";
               // header('location:index.php');
        }

    }
    $con->close();
?>