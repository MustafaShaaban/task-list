@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <div>
        <a href="{{route('tasks.create')}}"> Add New Task</a>
    </div>
    @forelse($tasks as $task)
        <p><a href="{{route('tasks.show', ['task' => $task->id])}}" @class(['line-through' => $task->completed])>{{$task->title}}</a></p>
    @empty
        No Tasks
    @endforelse


    @if ($tasks->count())
        {{$tasks->links()}}
    @endif
@endsection