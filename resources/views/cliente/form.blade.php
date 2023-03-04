<div class="box box-info padding-1">
    <div class="box-body">
        
        {{--  --}}
        <div class="form-group">
            {{ Form::label('ciudades_id') }}
            {{ Form::select('ciudades_id', $city, $cliente->ciudades_id, ['class' => 'form-control' . ($errors->has('ciudades_id') ? ' is-invalid' : ''), 'placeholder' => 'Ciudades Id']) }}
            {!! $errors->first('ciudades_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        {{--  --}}
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cliente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('documento') }}
            {{ Form::text('documento', $cliente->documento, ['class' => 'form-control' . ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'Documento']) }}
            {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>