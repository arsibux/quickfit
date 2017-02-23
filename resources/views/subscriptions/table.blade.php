<table class="table table-responsive" id="subscriptions-table">
    <thead>
        <th>Name</th>
        <th>Trial Ends At</th>
        <th>Ends At</th>
        <th>User Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($subscriptions as $subscription)
        <tr>
            <td>{!! $subscription->name !!}</td>
            <td>{!! $subscription->trial_ends_at !!}</td>
            <td>{!! $subscription->ends_at !!}</td>
            <td>{!! $subscription->user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['subscriptions.destroy', $subscription->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('subscriptions.show', [$subscription->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('subscriptions.edit', [$subscription->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>