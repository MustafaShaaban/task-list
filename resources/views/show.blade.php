@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div>
        <a href="{{route('tasks.index')}}">Go back to the task list</a>
    </div>
    <p>{{ $task->description }}</p>

    @if($task->long_description)
        <p>{{$task->long_description}}</p>
    @endif

    <p>Created: {{$task->created_at->diffForHumans()}} . Updated: {{$task->updated_at->diffForHumans()}}</p>
    <p></p>

    <p>
        @if ($task->completed)
            Completed
        @else
            Not Completed
        @endif
    </p>
    <div>
        <form method="POST" action="{{route('tasks.toggle-complete', ['task' => $task])}}">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-primary">Mark as {{$task->completed ? 'Not Completed' : 'Completed'}}</button>
        </form>
    </div>
    <div>
        <a href="{{route('tasks.edit', ['task' => $task])}}">Edit</a>
    </div>
    <form method="POST" action="{{ route('tasks.destroy', ['task'=> $task]) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endsection