<?php

    //include 'log.php';
    function armazena_section($email_verifica, $senha_verifica)
    {
       
        
        
    }

    function seguranca_Login($email_verifica, $senha_verifica)
    {
        if(session_status() !== PHP_SESSION_ACTIVE)
        {
            echo "<script language='javascript' type='text/javascript'>
            alert('Para acessar esta página, é necessário fazer login!');
            </script>";
            header('location:../index.php');
        }elseif(session_status() == PHP_SESSION_ACTIVE)
        {
            echo "ai pai para";
            if($email_verifica == '' || $senha_verifica == '')
            {
                $email_verifica = $_SESSION('email');
                $senha_verifica = $_SESSION('senha');
            }
            $con = mysqli_connect('localhost', 'root', '', 'hortibook');	

            $select = ("SELECT email, senha FROM `tab_usuarios` WHERE `email` = '$email_verifica' AND `senha` = '$senha_verifica'");
            $resultado = mysqli_query($con, $select);
            if($resultado)
            {
                if($email_verifica == $select['email'] && $senha_verifica == $select['senha'])
                {
                    header('location:../PageOn.php');
                }
            }else{
                echo "<script language='javascript' type='text/javascript'>
            alert('Erro de conexão!');
            </script>";
            }
        }
    }

?>