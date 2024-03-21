<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/reset1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <title>Aerovip - Cadastro</title>
</head>

<body>
    <div class="all_informations">

        <form method="POST" action="{{ route('user.register') }}" class="register">
            <!--  <form method="POST" action="{.{route('user.register')}.}" class="register">-- <-- original -->
            @csrf
            <h2>Cadastro</h2>

            <label for="name" class="name">
                <p>Nome</p><input name="name" type="text" required class="tamanho" min="1">
            </label>
            <label for="password" class="password">
                <p>Senha</p><input name="password" type="password" required class="tamanho">
            </label>
            <label for="email" class="email">
                <p>Email</p><input name="email" type="text" required class="tamanho">
            </label>

            <button type="submit" class="tamanho">Finalizar cadastro</button>
            <!-- <button type="submit" class="tamanho"><a href="{.{route('payment')}.}">Finalizar cadastro</a></button> -->


        </form>


    </div>
</body>

</html>
