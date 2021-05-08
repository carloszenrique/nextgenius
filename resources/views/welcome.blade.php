@extends('template')
@section('title')
    <title>NextGeniusProject</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="panel panel-default" style="margin-top:100px;">
                    <div class="panel-heading text-center">
                        <h2 class="text-bold">Nueva Evaluación</h2>
                    </div>
                    <form class="form-horizontal" action="{{route('welcomeAgregar')}}" method="POST">
                        <div class="panel-body">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" id="nombreUsuario" name="nombreUsuario" type="text" placeholder="Su nombre" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" id="tituloEvaluacion" name="tituloEvaluacion" type="text" placeholder="El título de su evaluación" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="textoParcial" id="textoParcial" cols="30" rows="10" placeholder="Su evaluación" required></textarea>
                                </div>
                            </div>
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