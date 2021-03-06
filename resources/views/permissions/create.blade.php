@extends('layouts.app')

@section('title', '| Nuovo Permesso')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    {{-- @include ('errors.list') --}}

    <h1><i class='fa fa-key'></i> Add Permission</h1>
    <br>

    {{ Form::open(array('url' => 'permissions')) }}

    <div class="form-group">
        {{ Form::label('name', 'Codice') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}

        {{ Form::label('description', 'Descrizione') }}
        {{ Form::text('description', '', array('class' => 'form-control')) }}
    </div>
    <br>

    @if(!$roles->isEmpty())

        <h4>Assign Permission to Roles</h4>

        @foreach ($roles as $role) 
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach

    @endif
    
    <br>
    {{ Form::submit('Aggiungi', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection
