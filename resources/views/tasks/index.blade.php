@extends('layouts.app')

@section('content')
    @if(Auth::check())
         <h1>Task List</h1>
        
        @if (count($tasks) > 0 )
            <table class='table table-striped'>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Status</th>
                        <th>Task</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id])!!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $tasks->links()}}
        @endif
        
        {!! link_to_route('tasks.create', 'Add new task', [], ['class' => 'btn btn-primary']) !!}
    @else
        <div class='center jumbotron'>
            <div class='text-center'>
                <h1>Welcome to the Tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary'])!!}
            </div>
        </div>
    @endif
@endsection