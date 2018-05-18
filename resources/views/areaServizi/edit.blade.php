@extends('layouts.app')

@section('title', '| Modifica Area Servizi')

@section('content')
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Modifica Area Servizi</h1>
            <hr>
            @include ('errors.list')
            {{ Form::model($areaServizi, array('route' => array('areaServizi.update', $areaServizi->id), 'method' => 'PUT')) }}
            <div class="form-group">
                {{ Form::label('denominazione', 'Denominazione') }}
                {{ Form::text('denominazione', null, array('class' => 'form-control')) }}<br>

                {{ Form::label('note', 'Note') }}
                {{ Form::textarea('note', null, array('class' => 'form-control')) }}<br>

                {{ Form::submit('Salva', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection