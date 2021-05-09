@extends('template')

@section('content')
<!--main content start-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="panel" style="margin-top:100px;">
                <h1 class="text-center text-info">Evaluaciones</h1>
                <div class="panel-body">
                    <table id="tableEvaluacion" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Hora</th>
                                <th class="text-center">Evaluación Nº</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Estrellas Asignadas</th>
                                <th class="text-center">Título</th>
                                <th class="text-center">Texto Parcial</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($evaluaciones as $evaluacion)
                                <tr>
                                    <td class="text-center">
                                        {{$evaluacion->created_at->format('d/m/Y')}}
                                    </td>
                                    <td class="text-center">
                                        {{$evaluacion->created_at->format('h:m:s')}}
                                    </td>
                                    <td class="text-center">
                                        {{$evaluacion->id}}
                                    </td>
                                    <td class="text-center">
                                        {{$evaluacion->nombre}} 
                                    </td>
                                    <td class="text-center">
                                        {{$evaluacion->rating}} 
                                    </td>
                                    <td class="text-center">
                                        {{$evaluacion->titulo}} 
                                    </td>
                                    <td class="text-center">
                                        {{$evaluacion->texto_parcial}}
                                    </td>
                                    <td class="text-center">
                                        {{$evaluacion->status}}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a  class="btn btn-primary" title="Ver" data-toggle="modal"
                                                data-target="#modalEvaluaciones">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <form action="{{route('homeEliminar', $evaluacion)}}" style="display: inline" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" title="Eliminar">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
@push('modals')
    @include('modals.verEvaluacionModal')
@endpush
@push('scritps')
    <script>
        $(document).ready( function () {
        $('#tableEvaluacion').DataTable();
        } );

    </script>
@endpush

