<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Funcionarios</title>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/funcionarios" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Funcionários
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="funcionario">
                                <i class="fas fa-user-tie"></i>
                                Funcionários
                            </a>
                            <a class="dropdown-item" href="funcionario/create">
                                <i class="fas fa-store-alt"></i>
                                Novo Funcionário
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/departamentos" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Departamentos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">
                                <i class="fas fa-user-tie"></i>
                                
                            </a>
                            <a class="dropdown-item" href="">
                                <i class="fas fa-store-alt"></i>
                                Novo 
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/equipes" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Equipes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">
                                <i class="fas fa-user-tie"></i>
                                
                            </a>
                            <a class="dropdown-item" href="">
                                <i class="fas fa-store-alt"></i>
                                
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/projetos" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Projetos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">
                                <i class="fas fa-user-tie"></i>
                                
                            </a>
                            <a class="dropdown-item" href="">
                                <i class="fas fa-store-alt"></i>
                                
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>    

    <div class="container mt-5">
    <?php echo anchor(base_url('funcionario/create'), 'Novo Funcionário', ['class' => 'btn btn-secondary mb-3 justify-content-center']) ?>
        <table class="table table-hover table-striped table-bordered" style="text-align:center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Salario</th>
                    <th>Departamento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($funcionarios as $funcionario): ?>
                <tr>
                    <td><?php echo $funcionario['id'] ?></td>
                    <td><?php echo $funcionario['nome'] ?></td>
                    <td><?php echo $funcionario['email'] ?></td>
                    <td><?php echo $funcionario['telefone'] ?></td>
                    <td><?php echo $funcionario['salario'] ?></td>
                    <td><?php echo $funcionario['departamento_id'] ?></td>
                    <td>
                        <?php echo anchor('funcionario/edit/' . $funcionario['id'], 'Editar', ['class' => 'btn btn-info mb-3']) ?>
                        <?php echo anchor('funcionario/delete/' . $funcionario['id'], 'Excluir', ['class' => 'btn btn-danger mb-3', 'onclick' => 'return confirma()']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>