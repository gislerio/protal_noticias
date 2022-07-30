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
                @foreach ($noticiashome as $noticia)
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ 'img/capa.jpg' }}" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $noticia->titulo }}</h5>
                                <p class="card-text">
                                    {{ $noticia->descricao}}
                                </p>
                                <a href="#" class="btn btn-primary">Visitar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>
