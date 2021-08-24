<div class="modal fade" id="Department_register" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Nuevo Departamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('departamentos.store')}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_1">Nombre:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                            <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="Nombre del Departamento" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_2">Estado:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                            <input type="text" class="form-control" id="exampleInputuname_1" name="status" placeholder="Estado del Departamento" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success waves-effect">Registrar</button>
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
