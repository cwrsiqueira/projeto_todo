<x-layout>
    <x-slot name="btn">
        <x-button href="/" title="Voltar" />
    </x-slot>
    <h1>Editar Tarefa</h1>
    <form action="{{route('task.update', ['id'=>$task->id])}}" method="post">
        @method('PUT')
        @csrf
        <label for="title">Título:</label>
        <input class="form-control" type="text" name="title" id="title" value="{{$task->title}}">

        <label for="title">Descrição:</label>
        <input class="form-control" type="text" name="description" id="description" value="{{$task->description}}">

        <div class="row">
            <div class="form-group m-3">
                <label for="title">Prazo:</label>
                <input class="form-control" type="datetime-local" name="due_date" id="due_date" value="{{date('Y-m-d h:i', strtotime($task->due_date)) ?? date('Y-m-d')}}">
            </div>

            <div class="form-group m-3">
                <label for="user">Responsável:</label>
                <select class="form-control" name="user_id" id="user">
                    <option>Selecione...</option>
                    @foreach ($users as $user)
                        <option @if($task->user_id == $user->id) selected @endif value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group m-3">
                <label for="category">Categoria:</label>
                <select class="form-control" name="category_id" id="category">
                    <option>Selecione...</option>
                    @foreach ($categories as $category)
                        <option @if($task->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <input type="submit" value="Salvar" class="btn btn-primary">
    </form>
</x-layout>
