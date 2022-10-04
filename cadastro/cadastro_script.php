<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
           <?php
                include "conexao.php";

                $nome = $_POST['nome'];
                $matricula = $_POST['matricula'];  
                $email = $_POST['email'];
                
               $sql = "INSERT INTO pessoas (nome, matricula, email) VALUES ('$nome', '$matricula', '$email')";
               
               if (mysqli_query($conn, $sql))
               {
                mensagem ("$nome cadastrado com sucesso!", "success");
               } 
                else
                {
                 mensagem("Erro ao cadastrar $nome!", "danger");
                }
           ?>
           <br>
           <hr>
           <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>

    <!-- Javascript -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>