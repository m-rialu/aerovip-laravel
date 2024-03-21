<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aerovip - Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="website icon"
        href="/images/icon.png" type="image/png">
</head>

<body class="flex items-center justify-center h-screen">
    <main class="all_informations">
        <img src="/images/logoAerovip.jpg" alt="Logo do site">
        @if ($errors->any())
           @foreach ($errors->all() as $error)
           <p>{{ $error }}</p>
           @endforeach
        @endif
        <form action="{{route('login')}}" method="post" class="flex flex-col w-full">
            @csrf
            <label for="email" class="custom-label">Email:</label>
            <input type="email" id="email" name="email" class="mb-6 custom-input" placeholder="seu@email.com.br"
                required>
            <label for="password" class="custom-label">Senha:</label>
            <input type="password" id="password" name="password" class="custom-input" placeholder="********" required>
            <button type="submit" class="custom-button red-button">Entrar</button>
            <button type="submit" class="custom-button red-button"><a href="{{route('user.register')}}">Cadastrar</a></button>
        </form>
    </main>

    <div style="display: flex; width: 1330px; height: 47px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
        <div style="display: flex; width: 1330px; height: 36px; left: 0px; top: 47px; position: absolute; background: #249CD0"></div>
        <div style="display: flex; left: 515px; top: 57px; position: absolute; color: white; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">Compre suas passagens com a Aerovip!</div>
        <div style="display: flex; width: 1330px; height: 72px; left: 0px; top: 696px; position: absolute; background: #61BDF1"></div>
        <div style="display: flex; width: 132px; height: 27px; left: 595px; top: 717px; position: absolute; color: #264DB1; font-size: 20px; font-family: Lemon; font-weight: 400; word-wrap: break-word">AEROVIP</div>
        <div style="display: flex; width: 187px; height: 52px; left: 49px; top: 711px; position: absolute; color: white; font-size: 15px; font-family: Lemon; font-weight: 400; word-wrap: break-word">aerovip@gmail.com<br/>(51) 4002-8922<br/></div>
</body>

</html>
