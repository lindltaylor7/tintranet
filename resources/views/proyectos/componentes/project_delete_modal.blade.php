<div class="modal fade" id="Project-remove{{$project->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal--padding text-center p-top-40 p-bottom-50">
                <span class="la la-exclamation-circle color-warning"></span>
                <h5 class="modal-title modal__title--red">¿Estas seguro?</h5>
                <p class="m-bottom-30 modal__paragraph">¿Deseas eliminar este Proyecto?</p>
                <div class="d-flex justify-content-center modal--btn">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                    <form action="{{route('proyecto.delete',$project->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger modal__btn--margin modal__btn--red">Si, ¡Borrar Proyecto!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>