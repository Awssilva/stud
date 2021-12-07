<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" type="img.fav">
    <title>Cadastrar usuário</title>
</head>
<body>
  
    <form class = "form" action="{{route('user.store')}}" method="POST"></form>
    @csrf
        <div class = 'inserir'></div>
            <p>Cadastrar pessoa</p>
            <label>Nome</label>
            <input type="text" name = "nome" placeholder="Insira o nome" required>
            <label>CPF</label>
            <input type="text" name = "cpf" placeholder="Insira o cpf" required>
            <button type="submit">CRIAR</button>
</body>
</html>