<div class="modal fade" id="Department_update{{$department->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Actualizar Datos del Departamento</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form action="{{route('departamentos.update',$department->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label class="control-label mb-10" for="exampleInputuname_1">Nombre:</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                          <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="Nombre del Departamento" value="{{$department->name}}" required>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputuname_2">Clientes:</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                            <input type="number" class="form-control" id="exampleInputuname_1" name="status" placeholder="Nombre del Departamento" value="{{$department->status}}" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success waves-effect">Actualizar Datos</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                    </div>
              </form>
          </div>
      </div>
  </div>
</div>
