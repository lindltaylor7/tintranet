<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('description', $goal->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de inicio') }}
            {{ Form::date('start_date', $goal->start_date, ['class' => 'form-control' . ($errors->has('start_date') ? ' is-invalid' : ''), 'placeholder' => 'Start Date']) }}
            {!! $errors->first('start_date', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha limite') }}
            {{ Form::date('final_date', $goal->final_date, ['class' => 'form-control' . ($errors->has('final_date') ? ' is-invalid' : ''), 'placeholder' => 'Final Date']) }}
            {!! $errors->first('final_date', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad de meta') }}
            {{ Form::text('desired_quantity', $goal->desired_quantity, ['class' => 'form-control' . ($errors->has('desired_quantity') ? ' is-invalid' : ''), 'placeholder' => 'Desired Quantity']) }}
            {!! $errors->first('desired_quantity', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Unidades') }}
            {{ Form::text('unit_asigment', $goal->unit_asigment, ['class' => 'form-control' . ($errors->has('unit_asigment') ? ' is-invalid' : ''), 'placeholder' => 'Unit Asigment']) }}
            {!! $errors->first('unit_asigment', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Unidades') }}
            {!! Form::select('unit_asigment',['soles'=>'soles','porcentaje'=>'porcentaje','nuemrico'=>'numerico'] , null, ['class' => 'form-control']) !!}
            {!! $errors->first('unit_asigment', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad Parcial') }}
            {{ Form::text('partial_quantity', $goal->partial_quantity, ['class' => 'form-control' . ($errors->has('partial_quantity') ? ' is-invalid' : ''), 'placeholder' => 'Partial Quantity']) }}
            {!! $errors->first('partial_quantity', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Area') }}
            {{ Form::text('area_id', $goal->area_id, ['class' => 'form-control' . ($errors->has('area_id') ? ' is-invalid' : ''), 'placeholder' => 'Area Id']) }}
            {!! $errors->first('area_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>