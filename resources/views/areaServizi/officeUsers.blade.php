@extends('layouts.app')

@section('title', '| Utenti dell\'ufficio')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> Utenti dell'Ufficio: {{$office}}
            {{--<a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Ruoli</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permessi</a>--}}
        </h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>

                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection