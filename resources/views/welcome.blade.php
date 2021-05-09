@extends('template')
@section('title')
    <title>NextGeniusProject</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="panel panel-default" style="margin-top:100px;">
                    <div class="panel-heading text-center text-bold text-primary">
                        <h1 style="font-size:36px;">Nueva Evaluación</h1>
                    </div>
                    <form class="form-horizontal" action="{{route('welcomeAgregar')}}" method="POST">
                        <div class="panel-body">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer; font-size: 25px;" id="1star" ></span>
                                    <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer; font-size: 25px;" id="2star"></span>
                                    <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer; font-size: 25px;" id="3star"></span></span>
                                    <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer; font-size: 25px;" id="4star"></span></span>
                                    <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer; font-size: 25px;" id="5star"></span>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" name="rating" id="rating" required>
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

@push('scripts')
    <script>
        var contador;
        function calificar(item){
            contador = item.id[0];
            let nombre = item.id.substring(1);

            for(let i=0; i<5; i++){
                if(i<contador){
                    document.getElementById((i+1)+nombre).style.color="orange";
                    $('#rating').val(contador);
                }else{
                    document.getElementById((i+1)+nombre).style.color="black";
                    $('#rating').val(contador);
                }
            }
        }
    </script>