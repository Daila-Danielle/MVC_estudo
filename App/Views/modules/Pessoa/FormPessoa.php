<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoa</title>
<!--     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 -->

</head>
<body>
    <fieldset>
        <legend>Cadastro de Pessoa</legend>
        <form method="post" action="/MVC/pessoa/form/save">

            <label for= "nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <label>CPF:</label>
            <input type="text" name="cpf" id="cpf">

            <label>Data Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento">

            <button type="submit">Salvar</button>

        </form>
    </fieldset>
    
</body>
</html>