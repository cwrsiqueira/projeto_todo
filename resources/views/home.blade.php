<x-layout page="Home">

    <x-slot name="btn">
        <x-button href="{{route('tasks.create')}}" title="Adicionar Tarefa" class="btn-primary" />
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
            <select name="" id="">
                <option value="">Todas as tarefas</option>
            </select>
        </div>
        <div class="area_tasks">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach
        </div>
    </section>
</x-layout>
