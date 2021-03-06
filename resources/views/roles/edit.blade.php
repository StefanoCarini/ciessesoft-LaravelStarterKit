@extends('layouts.app')

@section('title', '| Modifica Ruolo')

@section('content')

<div class='col-lg-8 col-lg-offset-1'>
    <h1><i class='fa fa-key'></i> Modifica Ruolo: {{$role->name}}</h1>
    <hr>
    {{-- @include ('errors.list')
 --}}
    {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Nome Ruolo') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Assign Permissions</b></h5>
    @foreach ($permissions as $permission)

        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
        {{Form::label($permission->name, ucfirst($permission->name)) }}
        {{Form::label($permission->description, ucfirst($permission->description)) }}<br>

    @endforeach
    <br>
    {{ Form::submit('Modifica', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}    
</div>

@endsection