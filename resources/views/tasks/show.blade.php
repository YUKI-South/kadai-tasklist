@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }}task details</h1>

<table class='table table-bordered'>
    <tr>
        <th>id</th>
        <td>{{ $task->id }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>{{ $task->status }}</td>
    </tr>
    <tr>
        <th>Task</th>
        <td>{{ $task->content }}</td>
    </tr>
</table>

{!! link_to_route('tasks.edit', 'Edit this task', ['task' => $task->id ], ['class' => 'btn btn-light'])!!}

{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}


@endsection