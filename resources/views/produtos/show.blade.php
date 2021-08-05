<DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ver um produto</title>
    </head>

    <body>
            <label for="">Nome</label><br>
            <input type="text" name="nome" value="{{$produtos->nome}}"> <br>
            <label for="">Custo</label><br>
            <input type="text" name="custo" value="{{$produtos->custo}}"><br>
            <label for="">Preco</label><br>
            <input type="text" name="preco" value="{{$produtos->preco}}"><br>
            <label for="">Quantidade</label><br>
            <input type="text" name="quantidade"value="{{$produtos->quantidade}}"><br>
            <button>salvar</button>
            
    </body>
    <style></style>
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/MrWRpYaPvNM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
   
</html>