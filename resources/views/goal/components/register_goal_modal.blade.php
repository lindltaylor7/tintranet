<div class="modal fade" id="Goal_register" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i>Nueva Meta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                
                <form method="POST" action="{{ route('goals.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="box box-info padding-1">
                        <div class="box-body">
                            
                            <div class="form-group">
                                {{ Form::label('Descripción') }}
                                {{ Form::text('description', '', ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese una descripción', 'required']) }}
                                {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Fecha de inicio') }}
                                {{ Form::date('start_date', '', ['class' => 'form-control' . ($errors->has('start_date') ? ' is-invalid' : ''), 'placeholder' => 'Start Date', 'required']) }}
                                {!! $errors->first('start_date', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Fecha límite') }}
                                {{ Form::date('final_date', '', ['class' => 'form-control' . ($errors->has('final_date') ? ' is-invalid' : ''), 'placeholder' => 'Final Date', 'required']) }}
                                {!! $errors->first('final_date', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Cantidad de Meta') }}
                                {{ Form::number('desired_quantity','', ['class' => 'form-control' . ($errors->has('desired_quantity') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad propuesta', 'required']) }}
                                {!! $errors->first('desired_quantity', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Unidades') }}
                                {!! Form::select('unit_asigment',['soles'=>'soles','porcentaje'=>'porcentaje','nuemrico'=>'numerico'] , null, ['class' => 'form-control', 'required']) !!}
                                {!! $errors->first('unit_asigment', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                           
                            <div class="form-group">
                                {{ Form::label('Area') }}
                                {!! Form::select('area_id', $areas, null, ['class' => 'form-control', 'required']) !!}
                                {!! $errors->first('area_id', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                        <div class="box-footer mt20">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  