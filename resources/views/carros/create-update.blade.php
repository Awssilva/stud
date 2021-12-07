<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de carros</title>
</head>
<body>
@if (isset($carro))   
    <form class="form" action="{{route('carro.update', ['carro' => $carro->id])}}" method="POST" >  
    @method('PUT')
@else
    <form class="form" action="{{route('carro.store')}}" method="POST" >  
@endif
<!-- <form class="form" action="{{url('/carro')}}" method="POST" > -->
    @csrf
        <div class="card">
            <div class="card-top">
                
                <h2 class="title">Painel de controle</h2>
                <p>Cadastrar carros</p>
            </div>

            <div class="card-group">
                <label>Modelo</label>
                <input name="modelo" placeholder="Digite o modelo" required>
            </div>

            <div class="card-group">
                <label>Placa</label>
                <input name="placa" placeholder="Digite a placa" required>
            </div>

            <div class="card-group btn">
                <button type="submit">@if(isset($carro)) ATUALIZAR {{$carro->modelo}} @else CADASTRAR @endif</button>
            </div>
        </div>
</form>
</body>
</html>