<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Todo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
</head>

<body>
    <div class="container">
        <div class="sidebar">
            Logo
        </div>
        <div class="content">
            <nav>
                <a href="" class="btn btn-primary">Criar Tarefa</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph-info-area">
                        <div class="graph-info-area-top">
                            <h2>Progresso do dia</h2>
                            <div class="line"></div>
                            <div class="date-area">
                                <div class="date-area-btn left"> &lt; </div>
                                <div class="date-area-center"> 13 de Dez </div>
                                <div class="date-area-btn righ"> &gt; </div>
                            </div>
                        </div>
                        <div class="graph-info-area-bot">
                            Tarefas: <b>3/6</b>
                        </div>
                    </div>
                </section>
                <section class="list">
                    Lista
                </section>
            </main>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
