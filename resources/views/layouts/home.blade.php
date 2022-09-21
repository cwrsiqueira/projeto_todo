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
            <img src="{{ asset('storage/assets/images/logo.png') }}" alt="logo">
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
                                <div class="date-area-btn left">
                                    <img src="{{ asset('storage/assets/images/icon-prev.png') }}" alt="prev">
                                </div>
                                <div class="date-area-center"> 13 de Dez </div>
                                <div class="date-area-btn righ">
                                    <img src="{{ asset('storage/assets/images/icon-next.png') }}" alt="next">
                                </div>
                            </div>
                        </div>
                        <div class="graph-info-area-bot">
                            Tarefas: <b>3/6</b>
                        </div>
                    </div>
                    <div class="graph-img-area">
                        <img src="{{ asset('storage/assets/images/graph.png') }}" alt="graph">
                    </div>
                    <div class="graph-msg-area">
                        <img src="{{ asset('storage/assets/images/icon-info.png') }}" alt="info">
                        Restam 3 tarefas a serem realizadas
                    </div>
                </section>
                <section class="list">
                    <div class="select_tasks">
                        <select name="" id="">
                            <option value="">Todas as tarefas</option>
                        </select>
                    </div>
                    <div class="area_tasks">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="area_tasks_item">
                                <div class="area_tasks_item_title">

                                    <div id="inputPreview">
                                        <input name="cssCheckbox" id="demo_opt_{{ $i }}" type="checkbox"
                                            class="css-checkbox">
                                        <label for="demo_opt_{{ $i }}">
                                            <div class="text">Fazer tal coisa pra fulano</div>
                                        </label>
                                    </div>

                                </div>
                                <div class="area_tasks_item_priority">
                                    <div class="priority_mark"></div>
                                    <div class="priority_description">Alta Prioridade</div>
                                </div>
                                <div class="area_tasks_item_actions">
                                    <img src="{{ asset('storage/assets/images/icon-edit.png') }}" alt="edit"
                                        title="Editar Tarefa" class="btn-edit">
                                    <img src="{{ asset('storage/assets/images/icon-delete.png') }}" alt="delete"
                                        title="Excluir Tarefa" class="btn-delete">
                                </div>
                            </div>
                        @endfor
                    </div>
                </section>
            </main>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
