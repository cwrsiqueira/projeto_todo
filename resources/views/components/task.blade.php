<div class="area_tasks_item"
    title="Prazo: {{ date('d/m/Y H:i:s', strtotime($data->due_date)) }} - Responsável: {{ $data->user->name }} - Descrição: {{ $data->description }}">
    <div class="area_tasks_item_title">

        <div id="inputPreview" title="Marcar/Desmarcar Concluída">
            <input name="cssCheckbox" id="demo_opt_{{ $data->id }}" type="checkbox" class="css-checkbox"
                @if ($data && $data->done) checked @endif>
            <label for="demo_opt_{{ $data->id }}">
                <div class="text">{{ $data->title }}</div>
            </label>
        </div>

    </div>
    <div class="area_tasks_item_priority">
        <div class="priority_mark" style="background-color:{{ $data->category->color }}"></div>
        <div class="priority_description">{{ $data->category->title }}</div>
    </div>
    <div class="area_tasks_item_actions">
        <a href="{{ route('tasks.edit', ['task' => $data->id]) }}">
            <img src="{{ asset('storage/assets/images/icon-edit.png') }}" alt="edit" title="Editar Tarefa"
                class="btn-edit">
        </a>
        <form action="{{ route('tasks.destroy', ['task' => $data->id]) }}" method="post"
            id="destroy{{ $data->id }}">
            @method('DELETE')
            @csrf
            <a
                onclick="return confirm('Confirma a exclusão da tarefa?') ? document.querySelector('#destroy{{ $data->id }}').submit() : ''">
                <img src="{{ asset('storage/assets/images/icon-delete.png') }}" alt="delete" title="Excluir Tarefa"
                    class="btn-delete">
            </a>
        </form>
    </div>
</div>
@section('js')
    <script>
        alert('carregando script na página de tarefas')
    </script>
@endsection
