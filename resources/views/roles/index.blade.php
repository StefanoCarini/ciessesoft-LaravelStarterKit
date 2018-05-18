@extends('layouts.app')

@section('title', '| Ruoli')

@section('content')

<div class="col-md-11 col-md-offset-1">
    <h1><i class="fa fa-key"></i> Ruoli

    <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Utenti</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permessi</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Ruolo</th>
                    <th>Autorizzazioni</th>
                    <th class="col-md-2">Azioni</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{  $role->permissions()->pluck('description')->implode('; ') }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td>
                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;"><i class="fa fa-pencil"></i></a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ URL::to('roles/create') }}" class="btn btn-success">Crea ruolo</a>

</div>

@endsection