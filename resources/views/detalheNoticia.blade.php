<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Noticias</title>
</head>

<body>
    <div class="container">
        <h1>Notícias</h1>
        <div class="col-md-12">
            <div class="row">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset('/img/capa.jpg') }}" alt="Imagem de capa do card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $noticiaDetalhe->titulo }}</h5>
                      <p class="card-text">{{$noticiaDetalhe->noticiaDetalhe->conteudo}}</p>
                      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</body>

</html>