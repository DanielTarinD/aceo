    <div class="modal-header">
        <h4 class="modal-title">Presupuesto Original</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
    </div>

    <div class="modal-body">

        <!-- BEGIN table-responsive -->
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <th colspan="2" style="text-align:center"><b>Datos de la Obra</b></th>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td><b>PGO:</b></td>
                        <td>{{ $obra->pgo }}</td>
                    </tr>
                    <tr class="table-info">
                        <td><b>Nombre:</b></td>
                        <td>{{ $obra->nombre }}</td>
                    </tr>
                    <tr class="table-info">
                        <td><b>Monto Original:</b></td>
                        <td>$ {{ $obra->monto_original }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br />
        <!-- END table-responsive -->

        <form action="#" method="#" autocomplete="off">

            <fieldset>
                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Obra Nueva</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="obra_nueva" value="{{ $obra->presupuestoOriginal->obra_nueva }}" disabled placeholder="Obra Nueva" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Reparaciones</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="reparaciones" value="{{ $obra->presupuestoOriginal->reparaciones }}" disabled placeholder="Reparaciones" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Adaptaciones</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="adaptaciones" value="{{ $obra->presupuestoOriginal->adaptaciones }}" disabled placeholder="Adaptaciones" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Mobiliario</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="mobiliario" value="{{ $obra->presupuestoOriginal->mobiliario }}" disabled placeholder="Mobiliario" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Prefabricado</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="prefabricado" value="{{ $obra->presupuestoOriginal->prefabricado }}" disabled placeholder="Prefabricado" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Otros</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="otros" value="{{ $obra->presupuestoOriginal->otros }}" disabled placeholder="Otros" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Anexo</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="otros" value="{{ $obra->presupuestoOriginal->otros }}" disabled placeholder="Otros" />
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
    <div class="modal-footer">
        <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Cerrar</a>
    </div>
