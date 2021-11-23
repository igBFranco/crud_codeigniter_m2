<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Home</title>
    <script>
        function confirma(){
            if(!confirm("Deseja realmente excluir o registro?")){
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #812DCF;">
            <a class="navbar-brand" href="#">
                <img src="https://user-images.githubusercontent.com/88065589/143140590-b2d2c5dc-2c70-42f6-8948-c19bac4d7e92.png" width="40" height="40" alt="">
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
        <div class="card">
            <div class="card-header text-align-center">
                <?php echo anchor(base_url('funcionario'), 'Funcionários', ['class' => 'btn btn-warning mb-3 justify-content-center btn-lg btn-block']) ?>
                <?php echo anchor(base_url('departamento'), 'Departamentos', ['class' => 'btn btn-warning mb-3 justify-content-center btn-lg btn-block']) ?>
                <?php echo anchor(base_url('equipe'), 'Equipes', ['class' => 'btn btn-warning mb-3 justify-content-center btn-lg btn-block']) ?>
                <?php echo anchor(base_url('projeto'), 'Projetos', ['class' => 'btn btn-warning mb-3 justify-content-center btn-lg btn-block']) ?>
            </div>
        </div>
    </div>

</body>
</html>