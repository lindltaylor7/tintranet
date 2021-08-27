<div class="modal fade bs-example-modal-lg" id="Users{{$project->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
  
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h5 class="modal-title" id="myLargeModalLabel">Usuarios del proyecto {{$project->name}}</h5>
        </div>
  
        <div class="modal-body">
          <div class="table-responsive">
              <table id="datable_1" class="table  display table-hover border-none">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Departamento</th>
                    <th>Area</th>
                    <th>Acciones</th>
                  </tr>
                    </thead>
                <tbody>
                    @foreach($project->users as $user)
                    <tr>
                      <td>{{$user->name}}</td>
                      <td>{{$user->area->department->name}}</td>
                      <td>{{$user->area->name}}</td>
                      <td>
                          ACCIONES...
                      </td>    
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
        </div>
  
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  
  
  
  