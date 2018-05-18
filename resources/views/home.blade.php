@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><i class="fa fa-tachometer"></i> Cruscotto </h1>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card text-white bg-primary" style="border-radius: 5px;padding: 15px">
                        <div class="card-header">
                            <h5 class="card-title text-center">Comunicazioni</h5>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-success">Leggi</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card text-danger bg-success" style="border-radius: 5px;padding: 15px;color: royalblue;">
                        <div class="card-header">
                            <h5 class="card-title text-center">Informazioni</h5>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-success">Leggi</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card text-white bg-danger" style="border-radius: 5px;padding: 15px">
                        <div class="card-header text-center">
                            <h5 class="card-title">Richieste</h5>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-success">Richiedi</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card text-white bg-warning" style="border-radius: 5px;padding: 15px">
                        <div class="card-header text-center">
                            <h5 class="card-title">Supporto</h5>
                            <hr>
                        </div>
                        <div class="card-body">

                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-success">Vai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
