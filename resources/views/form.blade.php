@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection


@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task'=> $task->id]) : route('tasks.store') }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$task->title ?? old('title')}}" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
            @error('title')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{$task->description ?? old('description')}}</textarea>
            @error('description')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="long_description">Long Description</label>
            <textarea class="form-control" name="long_description" id="long_description" rows="4">{{$task->long_description ?? old('long_description')}}</textarea>
            @error('long_description')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <button type="submit" class="btn btn-primary">{{isset($task) ? 'Edit Task' : 'Add Task'}}</button>
        <a href="{{route('tasks.index')}}"> Cancel</a>
    </form>
@endsection