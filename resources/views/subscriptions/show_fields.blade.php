<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $subscription->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $subscription->name !!}</p>
</div>

<!-- Trial Ends At Field -->
<div class="form-group">
    {!! Form::label('trial_ends_at', 'Trial Ends At:') !!}
    <p>{!! $subscription->trial_ends_at !!}</p>
</div>

<!-- Ends At Field -->
<div class="form-group">
    {!! Form::label('ends_at', 'Ends At:') !!}
    <p>{!! $subscription->ends_at !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $subscription->user_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $subscription->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $subscription->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $subscription->deleted_at !!}</p>
</div>

