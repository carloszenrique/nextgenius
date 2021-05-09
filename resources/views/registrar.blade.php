@extends('template')
@section('title')
    <title>Registro</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="panel panel-default" style="margin-top:100px;">
                    <div class="panel-heading text-center text-bold text-primary">
                        <h1 style="font-size:36px;">Registrate</h1>
                    </div>
                    <form class="form-horizontal" action="{{route('welcomeAgregar')}}" method="POST">
                        <div class="panel-body">
                            @csrf
                            <h1>HOLIS</h1>
                        </div>
                        <div class="panel-footer" style="background-color: white">
                            <div style="text-align: end;border-width:0">
                                <button type="submit" class="btn btn-success">Grabar</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection