@extends('layouts.app')

@section('title', '| Nuovo Utente')

@section('content')

<div class='col-md-8 col-md-offset-2'>

    <h1><i class='fa fa-user-plus'></i> Nuovo Utente</h1>
    <hr>

     @include ('errors.list')

    {{ Form::open(array('url' => 'users')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', '', array('class' => 'form-control')) }}
    </div>

    <div class='form-group'>
        @foreach ($roles as $role)
            
            @if($role->name == 'User')
                {{ Form::checkbox('roles[]',  $role->id, true ) }}
                {{ Form::label($role->name, ucfirst($role->name)), ['class' => 'color:red'] }}<br>
            @else
                {{ Form::checkbox('roles[]',  $role->id ) }}
                {{ Form::label($role->name, ucfirst($role->name)) }}<br>
            @endif
        @endforeach
    </div>

    <div class="form-group">
        <label for="office_id">Ufficio</label>
        <select class="form-control" name="office_id" id="office_id">
            <option>Selezionare Ufficio</option>
            @foreach($offices as $of)
                <option value="{{$of->id}}">{{$of->denominazione}}</option>
            @endforeach
        </select>
    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection