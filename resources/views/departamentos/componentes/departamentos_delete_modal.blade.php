<div class="modal fade" id="Department-remove{{$department->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal--padding text-center p-top-40 p-bottom-50">
                <span class="la la-exclamation-circle color-warning"></span>
                @if ($department->areas->isEmpty())
                <h5 class="modal-title modal__title--red">¿Estas seguro?</h5>
                <p class="m-bottom-30 modal__paragraph">¿Deseas eliminar este Departamento?</p>
                @else 
                <h5 class="modal-title modal__title--red">Lo sentimos :(</h5>
                <p class="m-bottom-30 modal__paragraph">No se puede eliminar este departamento porque hay áreas registradas en este departamento</p>
                @endif
                <div class="d-flex justify-content-center modal--btn">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                    <form action="{{route('departamentos.delete', $department->id)}}" method="post">
                        @csrf
                        @method('delete')
                        @if ($department->areas->isEmpty())
                        <button type="submit" class="btn btn-danger modal__btn--margin modal__btn--red">Eliminar</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>