@extends('layouts.app')

@section('content')

    <h1>Add Task</h1>
    
    <div class='row'>
        <div class='col-6'>
            {!! Form::open(['route' => 'tasks.store']) !!}
                
                <div class='form-group'>
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control'] )!!}
                </div>
            
                <div class='form-group'>
                    {!! Form::label('content', 'Task:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@endsection