<div class="modal fade" id="User-remove{{$usuario->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center p-top-40 p-bottom-50">
                <span class="la la-exclamation-circle color-warning"></span>
                <h1 class="display-3 m-bottom-10">¿Estas seguro?</h1>
                <p class="m-bottom-30">¿Deseas eliminar este usuario?</p>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary m-right-15" data-dismiss="modal">Cancelar</button>
                    <form action="{{route('usuario.delete',$usuario->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Si, ¡Borrar Usuario!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>