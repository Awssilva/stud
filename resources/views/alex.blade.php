<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <form class="form" action="#">
        <div class="card">
            <div class="card-top">
                <img class="imglogin" src="imagem/computer-user-icon-16405.png" alt="user">
                <h2 class="title">Painel de controle</h2>
                <p>Gerenciar seu negócio</p>
            </div>

            <i class="fas fa-alien-monster"></i>

            <div class="card-group">
                <label>Email</label>
                <input type="email"name="Email" placeholder="Digite seu email" required>
            </div>

            <div class="card-group">
                <label>Senha</label>
                <input type="password"name="senha" placeholder="Digite sua senha" required>
            </div>

            <div class="card-group">
                <label>
                    <input type="checkbox">Lembrar</label>
            </div>

            <div class="card-group btn">
                <button type="submit">ACESSAR</button>
                <input type="btn" class="btn btn-success">

            </div>

        </div>
    </form>
</body>
</html>