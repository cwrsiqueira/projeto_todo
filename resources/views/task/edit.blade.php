<x-layout>
    <x-slot name="btn">
        <x-button href="/" title="Voltar" class="btn-primary" />
    </x-slot>
    <div class="form-area">
        <h1>Editar Tarefa</h1>
        <x-alert type="success" message="{{ session('success') }}" />
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('tasks.update', ['task' => $task->id]) }}" method="post">
            @method('PUT')
            @csrf
            <x-input name="title" label="Título" placeholder="Digite o título"
                value="{{ old('title') ?? ($task->title ?? '') }}" />

            <x-text_area name="description" label="Descrição" placeholder="Digite a descrição"
                value="{{ old('description') ?? ($task->description ?? '') }}" />

            <x-select name="user_id" label="Responsável" :items=$users optionValue="id" optionLabel="name"
                currentValue="{{ $task->user_id }}" />

            <div class="row">
                <x-input name="due_date" label="Prazo" type="datetime-local"
                    value="{{ old('due_date') ?? (date('Y-m-d H:i', strtotime($task->due_date)) ?? date('Y-m-d H:i')) }}" />

                <x-select name="category_id" label="Categoria" :items=$categories optionValue="id" optionLabel="title"
                    currentValue="{{ $task->category_id }}" />
            </div>

            <x-input_checkbox title="Marcar como concluída" name="done" value="{{ $task->done }}" />

            <div class="row">
                <x-input type="submit" value="Salvar" class="btn btn-primary" />
                @if (!old())
                    <x-input type="reset" value="Limpar Formulário" class="btn" />
                @else
                    <x-button href="{{ route('tasks.edit', ['task' => $task->id]) }}" title="Limpar Formulário"
                        class="form-control tagA-inputBtn" />
                @endif
            </div>
        </form>
    </div>
</x-layout>
