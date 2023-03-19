<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Todo | {{$page ?? 'ToDo'}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="{{ asset('storage/assets/images/logo.png') }}" alt="logo">
        </div>
        <div class="content">
            <nav>
                {{$btn ?? null}}
            </nav>
            <main>
                {{$slot}}
            </main>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
