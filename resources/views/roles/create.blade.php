@extends('layouts.app')

@section('title', '| Crea Ruolo')

@section('content')

<div class='col-lg-8 col-lg-offset-1'>

    <h1><i class='fa fa-key'></i> Crea Ruolo</h1>
    <hr>
    {{-- @include ('errors.list') --}}

    {{ Form::open(array('url' => 'roles')) }}

    <div class="form-group">
        {{ Form::label('name', 'Denominazione') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Assign Permissions</b></h5>

    <div class='form-group'>
        @foreach ($permissions as $permission)
            {{ Form::checkbox('permissions[]',  $permission->id ) }}
            {{ Form::label($permission->name, strtoupper($permission->name)) }}
            {{ Form::label($permission->description, ucfirst($permission->description)) }}
            <br>

        @endforeach
    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection