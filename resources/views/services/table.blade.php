<table class="table table-responsive" id="services-table">
    <thead>
        <th>Current Reading</th>
        <th>Next Reading</th>
        <th>Next Service</th>
        <th>Service Charges</th>
        <th>Total Amount</th>
        <th>Vehicle Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
            <td>{!! $service->current_reading !!}</td>
            <td>{!! $service->next_reading !!}</td>
            <td>{!! $service->next_service !!}</td>
            <td>{!! $service->service_charges !!}</td>
            <td>{!! $service->total_amount !!}</td>
            <td>{!! $service->vehicle_id !!}</td>
            <td>
                {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('services.show', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('services.edit', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>