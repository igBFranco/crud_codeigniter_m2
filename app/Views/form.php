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
    <div class="container mt-5">

        <?php echo form_open('funcionario/store') ?>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" value="<?php echo isset($funcionario['nome']) ? $funcionario['nome'] : '' ?>" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" value="<?php echo isset($funcionario['email']) ? $funcionario['email'] : '' ?>" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" value="<?php echo isset($funcionario['telefone']) ? $funcionario['telefone'] : '' ?>" name="telefone" id="telefone" class="form-control">
            </div>
            <div class="form-group">
                <label for="salario">Salario</label>
                <input type="text" value="<?php echo isset($funcionario['salario']) ? $funcionario['salario'] : '' ?>" name="salario" id="salario" class="form-control">
            </div>
            <div class="form-group">
                <label for="departamento_id">Departamento</label>
                <input type="select" value="<?php echo isset($funcionario['departamento_id']) ? $funcionario['departamento_id'] : '' ?>" name="departamento_id" id="departamento_id" class="form-control">
            </div>
            <input type="submit" value="Salvar" class="btn btn-primary">
            <input type="hidden" name="id" value="<?php echo isset($funcionario['id']) ? $funcionario['id'] : '' ?>">
        <?php echo form_close(); ?>

    </div>
</body>
</html>