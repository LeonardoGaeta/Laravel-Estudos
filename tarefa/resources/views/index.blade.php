@extends('layouts.app');

@section('title')
    Lista Tarefas | Página Inicial
@endsection

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">

            {{ session()->get('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach ($tarefas as $tarefa)
                    <li class="list-group-item">
                        <a href="details/{{ $tarefa->id }}" style="color: cornflowerblue">{{ $tarefa->nome }}</a>
                    </li>
                @endforeach
            </ul>
            {{ $tarefas->links() }}
        </div>
    </div>
@endsection