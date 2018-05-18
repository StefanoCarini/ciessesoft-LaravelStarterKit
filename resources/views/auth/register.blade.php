@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrazione</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nominativo</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Nominativo" aria-describedby="basic-addon1" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Si suggerisce di usare la mail A.M." aria-describedby="basic-addon2" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3"><i class="fa fa-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Almeno 8 caratteri" aria-describedby="basic-addon3" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Conferma Password</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon4"><i class="fa fa-lock"></i></span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Ripetere la password" aria-describedby="basic-addon4" required>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="office" class="col-md-4 control-label">Ufficio</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon4"><i class="fa fa-bars"></i></span>
                                    <select name="office" id="office" class="form-control">
                                        <option value="">Selezionare un ufficio</option>
                                        @foreach($office as $of)
                                            <option value="{{$of->id}}">{{ $of->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrati
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
