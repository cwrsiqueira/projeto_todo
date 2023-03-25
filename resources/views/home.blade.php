<x-layout page="Home">

    <x-slot name="btn">
        <x-button href="{{ route('tasks.create') }}" title="Adicionar Tarefa" class="btn-primary" />
    </x-slot>

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
            <select name="checkUncheckAll" id="checkUncheckAll">
                <option selected disabled value="">Todas as tarefas</option>
                <option value="checkAll">Marcar Todas</option>
                <option value="uncheckAll">Desmarcar Todas</option>
            </select>
        </div>
        <div class="area_tasks">
            <x-alert type="success" message="{{ session('success') }}" />
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach
        </div>
    </section>
    @section('js')
        <script>
            document.querySelector("#checkUncheckAll").addEventListener('change', (e) => {
                marcarConcluida({
                    checked: e.target.value == 'checkAll',
                    all: true
                });
            })

            const marcarConcluida = (v) => {
                let checkTask = v.checked ? 1 : 0;

                if (!v.all) {
                    let idTask = v.getAttribute("id").split("_")[1];
                    let ajax = new XMLHttpRequest();
                    ajax.open("GET", "/checkTask?done=" + checkTask + "&id=" + idTask, true);
                    ajax.send();
                    ajax.onreadystatechange = () => {
                        if (ajax.readyState == 4 && ajax.status == 200) {
                            let data = ajax.responseText;
                            location.reload();
                        }
                    }
                    return;
                }

                let idTask = 'all';
                let ajax = new XMLHttpRequest();
                ajax.open("GET", "/checkTask?done=" + checkTask + "&id=" + idTask, true);
                ajax.send();
                ajax.onreadystatechange = () => {
                    if (ajax.readyState == 4 && ajax.status == 200) {
                        let data = ajax.responseText;
                        location.reload();
                    }
                }
                return;
            };
        </script>
    @endsection
</x-layout>
