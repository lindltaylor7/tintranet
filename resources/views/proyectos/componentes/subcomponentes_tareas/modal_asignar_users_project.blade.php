<div class="modal fade bs-example-modal-lg" id="Asignar_Users{{$project->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
  
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h5 class="modal-title" id="myLargeModalLabel">Asignar Colaboradores al proyecto {{$project->name}}</h5>
        </div>
  
        <div class="modal-body">
            <form action="{{route('proyecto.update',$project->id)}}" id="signup-form" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <label class="control-label mb-10" for="exampleInputuname_5">Usuarios: </label>
                    @foreach ($colabs as $colab)
                         <br>
                        <input type="checkbox" name="users[]" id="" value="{{$colab->id}}"> {{$colab->name}}
                    @endforeach             
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success waves-effect">Registrar</button>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
        </div>
  
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  
  
  
  