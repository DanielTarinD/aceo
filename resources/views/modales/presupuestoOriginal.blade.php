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

        <form action="/pptosOriginales" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" name="obra_id" value="{{ $obra->id }}"/>
            <fieldset>
                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Obra Nueva</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="obra_nueva" value="" placeholder="Obra Nueva" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Reparaciones</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="reparaciones" value="" placeholder="Reparaciones" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Adaptaciones</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="adaptaciones" value="" placeholder="Adaptaciones" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Mobiliario</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="mobiliario" value="" placeholder="Mobiliario" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Prefabricado</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="prefabricado" value="" placeholder="Prefabricado" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Otros</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="otros" value="" placeholder="Otros" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="form-label col-form-label col-md-3">Anexo</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" name="file" value="" />
                    </div>
                </div>

                <div class="row">
                    <div class="d-flex justify-content-end">
                        <button  type="button" class="btn btn-danger w-100px me-5px" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary w-100px">Guardar</button>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
