@extends('layouts.app')

@section('title', '| Aree Servizi')

@section('content')

    <div class="col-md-11 col-md-offset-1">
        <h1><i class="fa fa-bank"></i> Aree Servizi </h1>

        <hr>
        <a href="{{ URL::to('areaServizi/create') }}" class="btn btn-success">Crea Area Servizi</a><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Denominazione</th>
                    <th>Note</th>
                    <th class="col-md-2">Azioni</th>
                </tr>
                </thead>

                <tbody>
                @if($areaServizi)
                    @foreach ($areaServizi as $area)
                        <tr>
                            <td><a href="{{ route('areaServizi.usersInArea', ['id' => $area->id, 'office' => $area->denominazione]) }}">{{ $area->denominazione }}</a> </td>
                            <td>{{ $area->note }}</td>
                            <td>
                                <a href="{{ URL::to('areaServizi/'.$area->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;"><i class="fa fa-pencil"></i></a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['areaServizi.destroy', $area->id] ]) !!}
                                    <button id="btnDelete" type="submit" class="btn btn-danger" onclick="return confirm('Sicuro di voler eliminare l\'area Servizi？')"><i class="fa fa-trash"></i></button>
                                {!! Form::close() !!}

                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>

            </table>
        </div>

        <a href="{{ URL::to('areaServizi/create') }}" class="btn btn-success">Crea Area Servizi</a>

    </div>

@endsection
