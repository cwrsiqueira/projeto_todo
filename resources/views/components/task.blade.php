<div class="area_tasks_item"
    title="Prazo: {{ date('d/m/Y H:i:s', strtotime($data->due_date)) }} - Responsável: {{ $data->user->name }} - Descrição: {{ $data->description }}">
    <div class="area_tasks_item_title">

        <x-input_checkbox title="{{ $data->title }}" name="done_{{ $data->id }}" value="{{ $data->done ?? '0' }}"
            onclick="marcarConcluida(this)" />

    </div>
    <div class="area_tasks_item_due_date">
        <div class="due_date">{{ date('d/m/Y ( H:i:s )', strtotime($data->due_date)) }}</div>
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
