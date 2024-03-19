<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/reset1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}" >
    <title>Aerovip - Cadastro</title>
</head>

<body>
    <div class="all_informations">

        <form method="POST" action="{{route('user.register')}}" class="register">
            @csrf
            <h2>Cadastro</h2>

            <label class="name">
                <p>Nome</p><input type="text" required class="tamanho" min="1">
            </label>
            <label class="password">
            <p>Senha</p><input type="password" required class="tamanho">
            </label>
            <label class="email">
            <p>Email</p><input type="text" required class="tamanho">
            </label>

            <button type="submit" class="tamanho"><a href="{{route('payment')}}">Finalizar cadastro</a></button>


        </form>


    </div>
</body>

</html>
