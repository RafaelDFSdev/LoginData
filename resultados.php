<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resultados.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <a class="logo" href="index.php">Login Data</a>
            <div class="mobileMenu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="navList">
                <li><a href="">Início</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <?php 
    include("database.php");
    $sql = " SELECT * FROM  usuarios";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table style='width:70%;' class='tabela table table-hover table-bordered'>";
            print "<th>ID</th>"; 
            print "<th>NOME</th>"; 
            print "<th>EMAIL</th>"; 
            print "<th>SENHA</th>"; 
            print "<th>DATA NASC</th>"; 
            print "<th>Ações</th>"; 
        while($row =$res->fetch_object() ){
            print "<tr>";
            print "<td>".$row->id."</td>"; 
            print "<td>".$row->nome."</td>"; 
            print "<td>".$row->email."</td>"; 
            print "<td style='max-width: 50px; text-overflow: ellipsis; white-space: nowrap;overflow: hidden;'>".$row->senha."</td>"; 
            print "<td>".$row->data_nasc."</td>"; 
            print "<td style='text-align: center;'>
                    <button onclick=\"location.href='editar.php?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='cadastro.php?page=cadastro&acao=excluir&id=".$row->id."'}else{false;};\" class='btn btn-danger'>Excluir</button>
                    </td>"; 
        }
        print "</table>";
    }else{
        print"<p class='alert alert-danger'>Não encontrou resultados</p>";
    }
?>
        <button class="btn btn-primary visualizar"><a href="index.php">Voltar Para Cadastro</a> </button>

    </main>
    <footer>

    </footer>
    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>