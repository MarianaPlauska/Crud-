<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro:</h1>
                    <form action="cadastro_script.php" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control"name="nome"required>
                        </div>
                        <div class="form-group">
                            <label for="matricula">Matricula</label>
                            <input type="text" class="form-control" name="matricula">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
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