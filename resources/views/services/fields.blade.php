<!-- Current Reading Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_reading', 'Current Reading:') !!}
    {!! Form::number('current_reading', null, ['class' => 'form-control']) !!}
</div>

<!-- Next Reading Field -->
<div class="form-group col-sm-6">
    {!! Form::label('next_reading', 'Next Reading:') !!}
    {!! Form::number('next_reading', null, ['class' => 'form-control']) !!}
</div>

<!-- Next Service Field -->
<div class="form-group col-sm-6">
    {!! Form::label('next_service', 'Next Service:') !!}
    {!! Form::date('next_service', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Charges Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_charges', 'Service Charges:') !!}
    {!! Form::number('service_charges', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_amount', 'Total Amount:') !!}
    {!! Form::number('total_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Vehicle Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehicle_id', 'Vehicle Id:') !!}
    {!! Form::number('vehicle_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('services.index') !!}" class="btn btn-default">Cancel</a>
</div>
