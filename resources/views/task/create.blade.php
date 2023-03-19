<x-layout>
    <x-slot name="btn">
        <x-button href="/" title="Voltar" />
    </x-slot>
    <h1>Adicionar Tarefa</h1>
    <form action="{{route('tasks.store')}}" method="post">
        @csrf

        <label for="title">Título:</label>
        <input class="form-control @if($errors->any()) is_invalid @endif" type="text" name="title" id="title" value="{{old('title')}}">
        @if ($errors->any())
            <small class="alert-small">O campo Título é obrigatório.</small>
        @endif

        <label for="title">Descrição:</label>
        <input class="form-control" type="text" name="description" id="description" value="{{old('description')}}">

        <div class="row">
            <div class="form-group m-3">
                <label for="title">Prazo:</label>
                <input class="form-control" type="datetime-local" name="due_date" id="due_date" value="{{old('due_date') ?? date('Y-d-m h:i')}}">
            </div>

            <div class="form-group m-3">
                <label for="user">Responsável:</label>
                <select class="form-control" name="user_id" id="user">
                    <option>Selecione...</option>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group m-3">
                <label for="category">Categoria:</label>
                <select class="form-control" name="category_id" id="category">
                    <option>Selecione...</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <input type="submit" value="Salvar" class="btn btn-primary">
    </form>
</x-layout>
