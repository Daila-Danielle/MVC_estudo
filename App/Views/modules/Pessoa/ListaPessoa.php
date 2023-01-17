<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>DATA NASCIMENTO</th>
        </tr>
<?php foreach($model->rows as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->nome ?></td>
            <td><?= $item->cpf ?></td>
            <td><?= $item->data_nascimento ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
