@extends('layouts.app')

@section('title', '| Utenti')

@section('content')

<div class="col-md-11 col-md-offset-1">
    <h1><i class="fa fa-users"></i> Gestione Utenti<a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Ruoli</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permessi</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Data di registrazione</th>
                    <th>Ruoli</th>
                    <th class="col-md-2">Azioni</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    <td>{{ $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                    <td>
                        <a href="/users/{{$user->id}}/edit" class="btn btn-info pull-left" style="margin-right: 3px;"><i class="fa fa-pencil"></i></a>
                        {{--<a action="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left"><i class="fa fa-pencil"></i></a>--}}
                        <Form action="/users/{{$user->id}}" method="POST">
                            {{method_field('delete')}}
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a onclick=return confirm'Sicuro di vole eliminare l\'utente?'><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                        </Form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('users.create') }}" class="btn btn-success">Aggiungi Utente</a>

</div>

@endsection