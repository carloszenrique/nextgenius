<div class="modal fade" id="modalEvaluaciones {{$evaluacion->id}}" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info" id="myModalLabel">
                    Detalles de la evaluación
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="padd">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-sm-5 control-label">Fecha y Hora:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" style="text-align: right" id="fechaHora" name="fechaHora" value="{{$evaluacion->created_at}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Id:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" style="text-align: right" id="idEvaluacion" name="idEvaluacion" value="{{$evaluacion->id}}" required readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Nombre:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" style="text-align: right" id="nombre" name="nombre" value="{{$evaluacion->nombre}}" required readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Estrellas:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" style="text-align: right" id="rating" name="rating" value="{{$evaluacion->rating}}" required readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Título:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" style="text-align: right" id="tituloEvaluacion" name="tituloEvaluacion" value="{{$evaluacion->titulo}}" readonly required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Estado:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" style="text-align: right" name="status" id="status" value="{{$evaluacion->status}}" readonly required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-sm-4 control-label">Texto Parcial:</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="textoParcial" id="textoParcial" cols="30" rows="10" readonly required>{{$evaluacion->texto_parcial}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">
                    Salir
                </button>
            </div>
        </div>   
    </div>
</div>
