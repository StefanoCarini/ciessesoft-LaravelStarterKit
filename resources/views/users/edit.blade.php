@extends('layouts.app')

@section('title', '| Modifica Utente')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h1>
    <hr>
     @include ('errors.list')

    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}
    {{-- Form model binding to automatically populate our fields with user data --}}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Assegna un Ruolo</b></h5>

    <div class='form-group'>
        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    </div>
    <div class="form-group">
        <label for="office_id">Ufficio</label>
        <select class="form-control" name="office_id" id="office_id">
            <option>Selezionare Ufficio</option>
            @foreach($offices as $of)
                @if($of->id == $user->office_id)
                    <option value="{{$of->id}}" selected>{{$of->denominazione}}</option>
                @else
                    <option value="{{$of->id}}">{{$of->denominazione}}</option>
                @endif
            @endforeach
        </select>
    </div>

    {{ Form::submit('Salva', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection