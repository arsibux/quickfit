<!-- Reg No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reg_no', 'Reg No:') !!}
    {!! Form::text('reg_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::number('color', null, ['class' => 'form-control']) !!}
</div>

<!-- Vehicle Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehicle_company', 'Vehicle Company:') !!}
    {!! Form::text('vehicle_company', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model_year', 'Model Year:') !!}
    {!! Form::date('model_year', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vehicles.index') !!}" class="btn btn-default">Cancel</a>
</div>
