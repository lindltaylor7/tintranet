<div class="modal fade" id="Cliente_register" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Nuevo Cliente</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form action="{{route('clientes.store')}}" id="signup-form" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label class="control-label mb-10" for="exampleInputuname_1">Nombre:</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                          <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="Nombre del Cliente" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label mb-10" for="exampleInputuname_2">Teléfono:</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                          <input type="number" class="form-control" placeholder="Telefono del Cliente" name="phone" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label mb-10" for="exampleInputuname_2">Email:</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                          <input type="email" class="form-control" placeholder="Email del Cliente" name="email" required>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-success waves-effect">Registrar</button>
                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
