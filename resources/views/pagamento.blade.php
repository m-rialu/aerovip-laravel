<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUFJREFUSEvVlNFxwkAMRJdOoBOohFBJoBKgEtJJ0kmSx2iNfD5jG8MHmmE82LpdrbS6hV4cixfj660I1pK2kn4kHdyZZyj4CGAIOrhzCGrAEKBgNUcBwJ+SlqninaSvfyXfcwgABdzA7vUpiGjRJYg2UxQcA9hnqJQh8swxiYAqXfE9YHLsGNRRDIpo2TXKIdtqJDs4cC4qNhhAbhFk+/hVbeqEDEwivXbkAbfcEorvEuCAcoD0GSCUUUD2eq6eAgYVOCk7hXeQZOCO10OezdAi7ls0ADmQvZ4dgw1LF2FRzrW+DW2yrVc48gpC6/J8HiIA+LdEj/8osLsgejpB5sWqtjb3UKNsqEU1BRz2IpXO6uzWVALa0twzIcHLaac1N2ltk2vt9gxqzukZz+31GAUMr3a5DYKPVTAKqC9pjIJZBH/kdFAZSAulaQAAAABJRU5ErkJggg==">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Aerovip - Check-out</title>
</head>

<body>
    <div class="all_informations">


        <form class="credit_card">
            <h2>Pagar com o Cartão</h2>

            <h3>Informações do passageiro</h3>
            @foreach ($passengers->all() as $passenger)
                <label class="dbname">
                    <p>Nome: {{ $passenger->name }}</p>
                </label>
                <label class="email">
                    <p>Email: {{ $passenger->email }}</p>
                </label>
            @endforeach

            <label class="numerocard">
                <p>Número de passagens</p><input min="1" type="number" required class="tamanho">
            </label>
            <label class="name">
                <p>Nome no Cartão</p><input type="text" required class="tamanho">
            </label>
            <label class="valor">
                <h3>Valor total: R$ 00.00</h3>
            </label>
            <label class="numbem">
                <p>Número do Cartão</p><input type="text" maxlength="16" required class="tamanho">
            </label>
            <label class="date">
                <p>Data de Validade</p><input type="date" required class="tamanho">
            </label>
            <label class="csc">
                <p>Código de Segurança (CSC)</p><input type="password" maxlength="3" required class="tamanho">
            </label>
            <button class="tamanho"><a href="{{route('donePayment')}}">Finalizar Pagamento</a></button>

        </form>


    </div>
    <div>
        <tbody>

        <h3>Informações da passagem</h3>
            @foreach($cards->all() as $card)
                <label >
                    <p>Preço: {{ $card->price }}</p>
                </label>
                <label>
                    <p>Data: {{ $card->date }}</p>
                </label>
                <label>
                    <p>Local: {{ $card->local }}</p>
                </label>
                <label>
                    <p>Horário: {{ $card->time }}</p>
                </label>
            @endforeach

                    <form action="{{ route('cards.destroy', $card->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
            </tbody>
    </div>


</body>

</html>
