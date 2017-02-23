<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $service->id !!}</p>
</div>

<!-- Current Reading Field -->
<div class="form-group">
    {!! Form::label('current_reading', 'Current Reading:') !!}
    <p>{!! $service->current_reading !!}</p>
</div>

<!-- Next Reading Field -->
<div class="form-group">
    {!! Form::label('next_reading', 'Next Reading:') !!}
    <p>{!! $service->next_reading !!}</p>
</div>

<!-- Next Service Field -->
<div class="form-group">
    {!! Form::label('next_service', 'Next Service:') !!}
    <p>{!! $service->next_service !!}</p>
</div>

<!-- Service Charges Field -->
<div class="form-group">
    {!! Form::label('service_charges', 'Service Charges:') !!}
    <p>{!! $service->service_charges !!}</p>
</div>

<!-- Total Amount Field -->
<div class="form-group">
    {!! Form::label('total_amount', 'Total Amount:') !!}
    <p>{!! $service->total_amount !!}</p>
</div>

<!-- Vehicle Id Field -->
<div class="form-group">
    {!! Form::label('vehicle_id', 'Vehicle Id:') !!}
    <p>{!! $service->vehicle_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $service->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $service->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $service->deleted_at !!}</p>
</div>

