<div class="modal fade" id="Area_update{{$area->id}}" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Actualizar Datos de Área</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form action="{{route('area.update', $area->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  <div class="form-group">
                      <label class="control-label mb-10" for="exampleInputuname_1">Nombre:</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                          <input type="text" class="form-control" id="exampleInputuname_1" name="name" placeholder="Nombre del Proyecto" value="{{$area->name}}" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label mb-10" for="exampleInputuname_2">Estado:</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                          <input type="number" class="form-control" name="status" placeholder="Estado de la Área" value="{{$area->status}}" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label mb-10" for="exampleInputuname_3">Departamento:</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fas fa-signature"></i></div>
                          <select name="department" class="form-control" required>
                            @foreach ($departments as $department)
                            @if ($department->id === $area->department->id) 
                            <option value="{{$area->department->id}}" selected>{{$area->department->name}}</option>
                            @else
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endif
                            @endforeach
                          </select> 
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
