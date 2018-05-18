@extends('layouts.app')

@section('title', '| Crea Area Servizi')

@section('content')

    <div class='col-lg-8 col-lg-offset-1'>

        <h1><i class='fa fa-key'></i> Crea Area Servizi</h1>
        <hr>
        {{-- @include ('errors.list') --}}

        {{ Form::open(array('route' => 'areaServizi.store')) }}

        <div class="form-group">
            {{ Form::label('denominazione', 'Denominazione') }}
            {{ Form::text('denominazione', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('note', 'Note') }}
            {{ Form::textarea('note', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Aggiungi', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>

@endsection
