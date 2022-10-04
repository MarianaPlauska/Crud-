<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <?php
            $pesquisa = $_POST['buscar'] ?? '';

        include "conexao.php";
        
        $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%' OR matricula LIKE '%$pesquisa%' OR email LIKE '%$pesquisa%'";

        $dados = mysqli_query($conn, $sql);

        while ($linha = mysqli_fetch_assoc($dados))
        {
            /*foreach ($linha as $key => $value)
            {
                echo "$key: $value <br>";
            }
            echo "<hr>";   para mostrar as informações fora da tabela - teste*/ 
        }
    ?>
    <div class="container">
        <div class="pos">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome do usuário" aria-label="Buscar">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
         <table class="table table-hover">
            <thread>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Email</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    $sql = "SELECT * FROM usuarios";
                    $result = mysqli_query($conn, $sql);
                    while($pos = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>
                                <th scope='row'>{$pos['id']}</th>
                                <td>$matricula</td>
                                <td>$email</td>
                                <td width=150px>
                                    <a href='edit.php?id={$pos['id']}' class='btn btn-primary'>Editar</a>
                                    <a href='delete.php?id={$pos['id']}' class='btn btn-danger'>Excluir</a>
                                </td>
                            </tr>";
                    }
                ?>

         </table>
                <a href="index.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>


    <!-- Javascript -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>