<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Edição</title>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #812DCF;">
            <a class="navbar-brand" href="#">
                <img src="https://cdn-icons.flaticon.com/png/512/1056/premium/1056665.png?token=exp=1637590483~hmac=0551a174af4b082db3d784b5974aebe6" width="40" height="40" alt="">
            </a>
            <a class="navbar-brand" href="#">
                <i class="fa fa-book-open"></i>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- criando um botão Home -->
                    <li class="nav-item active">
                        <a class="nav-link" href="welcome_message.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/funcionarios" role="button">
                            Funcionários
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/departamentos" role="button">
                            Departamentos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/equipes"role="button">
                            Equipes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projetos" >
                            Projetos
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>    
    <div class="container mt-5">

        <?php echo form_open('projeto/store') ?>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" value="<?php echo isset($projeto['nome']) ? $projeto['nome'] : '' ?>" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="orcamento">Orçamento</label>
                <input type="text" value="<?php echo isset($projeto['orcamento']) ? $projeto['orcamento'] : '' ?>" name="orcamento" id="orcamento" class="form-control">
            </div>
            <div class="row justify-content-end">
                <div class="col-1">
                    <a href="/projetos" class="btn btn-secondary">Voltar</a>
                </div>
                <div class="col-1">
                    <input type="submit" value="Salvar" class="btn btn-primary">
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo isset($projeto['id']) ? $projeto['id'] : '' ?>">
        <?php echo form_close(); ?>

    </div>
</body>
</html>