<?php
    include("database.php");

    switch ($_POST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO  usuarios (nome, email, senha, data_nasc ) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn ->query($sql);
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$nome}', data_nasc='{$data_nasc}' WHERE id=".$_REQUEST["id"];

            $res = $conn ->query($sql);
            
            if($res===true){
                print "<script>location.href='cadastrosucesso.php'</script>";
            }else{
                print "<script>location.href='resultados.php'; alert('Não foi possível editar usuário');</script>";
            }

            break;
        case 'excluir':
            $sql= "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn ->query($sql);
            
            if($res===true){
                print "<script>location.href='resultados.php'; alert('Usuário removido com sucesso.');</script>";
            }else{
                print "<script>location.href='resultados.php'; alert('Não foi possível remover usuário.');</script>";
            }

            break;
        
        default:
            # code...
            break;
    }

    if($res === true){
        print "<script>location.href='cadastrosucesso.php'</script>";
    }else{
        print "<script>location.href='index.php'</script>";
    }
?>
