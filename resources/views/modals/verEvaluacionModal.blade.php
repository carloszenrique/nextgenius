{{-- <div class="modal fade" id="modalEvaluaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="pull-left">Detalles de las evaluaciones</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wclose" data-dismiss="modal"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="padd">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-sm-3 control-label"><b>Fecha y Hora:</b></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" style="text-align: right" id="fechaHora" name="fechaHora" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-sm-3 control-label"><b>Evaluacion Nº:</b></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" style="text-align: right" id="idEvaluacion" name="idEvaluacion" required readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-sm-3 control-label"><b>Nombre:</b></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" style="text-align: right" id="nombre" name="nombre" required readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-sm-3 control-label"><b>Estrellas Asignadas:</b></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" style="text-align: right" id="rating" name="rating" required readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-sm-3 control-label"><b>Título:</b></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" style="text-align: right" id="tituloEvaluacion" name="tituloEvaluacion" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-sm-3 control-label"><b>Texto Parcial:</b></label>
                                <div class="col-sm-9">
                                    <textarea name="textoParcial" id="textoParcial" cols="30" rows="10" readonly required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-sm-3 control-label"><b>Estado</b></label>
                                <div class="col-sm-9">
                                    <input name="status" id="status" readonly required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-foot">
                        <div style="text-align: end;border-width:0; background:white">
                            <a type="button" href="#" data-dismiss="modal" class="btn btn-primary wclose">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="modal" id="modalEvaluaciones">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header text-info">
          Detalles de la Evaluación
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-sm-4 control-label"><b>Fecha y Hora:</b></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" style="text-align: right" id="fechaHora" name="fechaHora" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-sm-4 control-label"><b>Evaluacion Nº:</b></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" style="text-align: right" id="idEvaluacion" name="idEvaluacion" required readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-sm-4 control-label"><b>Nombre:</b></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" style="text-align: right" id="nombre" name="nombre" required readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-sm-4 control-label"><b>Estrellas Asignadas:</b></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" style="text-align: right" id="rating" name="rating" required readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-sm-4 control-label"><b>Título:</b></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" style="text-align: right" id="tituloEvaluacion" name="tituloEvaluacion" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-sm-4 control-label"><b>Estado</b></label>
                        <div class="col-sm-8">
                            <input class="form-control" name="status" id="status" readonly required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-sm-4 control-label"><b>Texto Parcial:</b></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="textoParcial" id="textoParcial" cols="30" rows="10" readonly required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Salir</button>
        </div>
  
      </div>
    </div>
  </div>
 --}}

      
<div class="modal fade" id="modalEvaluaciones" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
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
                                <label class="col-sm-4 control-label">Fecha:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" style="text-align: right" id="fechaHora" name="fechaHora" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Id:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" style="text-align: right" id="idEvaluacion" name="idEvaluacion" required readonly>
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
                                    <input type="text" class="form-control" style="text-align: right" id="nombre" name="nombre" required readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Estrellas:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" style="text-align: right" id="rating" name="rating" required readonly>
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
                                    <input type="text" class="form-control" style="text-align: right" id="tituloEvaluacion" name="tituloEvaluacion" readonly required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Estado:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="status" id="status" readonly required>
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
                                    <textarea class="form-control" name="textoParcial" id="textoParcial" cols="30" rows="10" readonly required></textarea>
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
        
        
