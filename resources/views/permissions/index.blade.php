@extends('layouts.app')

@section('title', '| Permessi')

@section('content')

<div class="col-md-11 col-md-offset-1">
    <h1><i class="fa fa-lock"></i>&nbsp;Permessi

    <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Utenti</a>
    <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Ruoli</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Codice</th>
                    <th>Descrizione</th>
                    <th class="col-md-2">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->description }}</td>
                    <td>
                        <a href="{{ route('permissions.edit', $permission->id) }}">
                        <button class="btn btn-info" title="Modifica Permesso" ><i class="fa fa-pencil"></i></button>
                        </a>
                        <a href="{{ route('permissions.destroy', $permission->id, 'DELETE') }}">
                            <button class="btn btn-danger" title="Elimina Permesso" ><i class="fa fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>

</div>

@endsection