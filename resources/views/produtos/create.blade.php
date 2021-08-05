<DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Criar register</title>
    </head>

    <body>
        <form action="{{route('registar_produto')}}" method="POST">
            @csrf
            <label for="">Nome</label><br>
            <input type="text" name="nome"> <br>
            <label for="">Custo</label><br>
            <input type="text" name="custo"><br>
            <label for="">Preco</label><br>
            <input type="text" name="preco"><br>
            <label for="">Quantidade</label><br>
            <input type="text" name="quantidade"> <br>
            <button> salvar</button>
        </form>
    </body>

    </html>