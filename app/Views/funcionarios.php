<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Funcionarios</title>
    <style>
        ul.pagination li {
            display: inline;
        }

        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .active {
            background-color: #4CAF50;
            color: white;
        }

        ul.pagination li a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
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
    
    <div class="container mt-5">
    <?php echo anchor(base_url('funcionario/create'), 'Novo Funcionário', ['class' => 'btn btn-info mb-3 justify-content-center']) ?>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Salario</th>
                <th>Departamento</th>
                <th>Ações</th>
            </tr>
            <?php foreach($funcionarios as $funcionario): ?>
                <tr>
                    <td><?php echo $funcionario['id'] ?></td>
                    <td><?php echo $funcionario['nome'] ?></td>
                    <td><?php echo $funcionario['email'] ?></td>
                    <td><?php echo $funcionario['telefone'] ?></td>
                    <td><?php echo $funcionario['salario'] ?></td>
                    <td><?php echo $funcionario['departamento_id'] ?></td>
                    <td>
                        <?php echo anchor('funcionario/edit/' . $funcionario['id'], 'Editar') ?>
                        -
                        <?php echo anchor('funcionario/delete/' . $funcionario['id'], 'Excluir', ['onclick' => 'return confirma()']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php echo $pager->links(); ?>
    </div>

</body>
</html>