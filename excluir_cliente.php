<?php

    include "conexao.php";

    if(isset($_GET['id'])){
       
        $id = $_GET['id']; 

       
        $sql = "delete from cliente where id = '$id'";
        $excluir = mysqli_query($conexao,$sql);

        if($excluir){
            echo "
                <script> 
                    alert('Registro Excluído com Sucesso!');
                    window.location = 'listar_cliente.php';
                </script>
            ";

        }
        else{
            echo "
                <p> Banco de Dados Temporariamente fora do ar. Tente novamente mais tarde. </p>
                <p> Entre em contato com o administrador do Site ... </p>
            ";
            echo mysqli_error($conexao);
        }
    }
    else {     
        echo "
            <p> Esta é uma página de tratamento de dados </p>
            <p> Clique <a href='listar_cliente.php'> aqui </a> para a acessar a lista de clientes cadastrados. </p>
        ";
    }
?>