<div class="modal fade" id="Area_register" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Nuevo Proyecto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form action="{{route('area.store')}}" id="signup-form" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label class="control-label mb-10" for="exampleInputuname_1">Nombre:</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                          <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="Nombre de Área" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label mb-10" for="exampleInputuname_3">Departamento:</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                          <select name="department_id" class="form-control" required>
                            <option value="" selected disabled>Elige un departamento</option>
                            @foreach ($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                          </select> 
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
