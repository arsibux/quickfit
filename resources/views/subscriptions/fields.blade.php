<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Trial Ends At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trial_ends_at', 'Trial Ends At:') !!}
    {!! Form::date('trial_ends_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Ends At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ends_at', 'Ends At:') !!}
    {!! Form::date('ends_at', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('subscriptions.index') !!}" class="btn btn-default">Cancel</a>
</div>
