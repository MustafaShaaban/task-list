@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    @forelse($tasks as $task)
        <p><a href="{{route('tasks.show', ['id' => $task->id])}}">{{$task->title}}</a></p>
    @empty
        No Tasks
    @endforelse
@endsection