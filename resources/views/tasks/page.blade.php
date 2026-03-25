@extends('layouts.app')

@section('content')

<h1>Minhas tarefas</h1>

@include('tasks.partials.form')

<ul>
    @foreach($tasks as $task)
        @include('tasks.partials.item', ['task' => $task])
    @endforeach
</ul>

@endsection