<?php


    $con = mysqli_connect('localhost', 'root', '', 'hortibook');	

    $email = $_POST['email_log'];
    $senha = $_POST['senha_log'];

    //echo  $email . "<br>" . $senha . "<br>";

    $sql = ("SELECT * FROM `tab_usuarios` WHERE email = '" . $email . "' AND senha = '" . $senha . "'");
    //$select = ("SELECT * FROM tab_usuarios WHERE email = '" . $email . "' AND senha = '" . $senha'" .);	

    $resultado = mysqli_query($con, $sql);
    $valores = mysqli_fetch_assoc($resultado);
    //var_dump($valores);
    if($email == $valores['email'] && $senha == $valores['senha'])
    {
        session_unset();
        if($resultado)
        {
            if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão já não está aberta.
                session_cache_expire(50);
                $carimbo_horario = date("Y-m-d H:i:s");
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['hora_inicio'] = $carimbo_horario;
                $_SESSION['hora_fim'] = date('Y-m-d H:i:s', strtotime("+5 min"));
                $_SESSION['senha'] = $senha; 
            }elseif (session_status() == PHP_SESSION_ACTIVE){
                session_unset();
                session_cache_expire(50);
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha; 
            }
            header('location:../PageOn.php');
        }
    }else{
        session_unset();
        echo "<script language='javascript' type='text/javascript'>
        alert('E-mail e(ou) senha incorretos!');
        </script>";
        sleep(3);
        header('location:../index.php');
    }
    
    



?>