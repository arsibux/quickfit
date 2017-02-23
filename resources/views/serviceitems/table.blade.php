<table class="table table-responsive" id="serviceitems-table">
    <thead>
        <th>Name</th>
        <th>Price</th>
        <th>Service Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($serviceitems as $serviceitem)
        <tr>
            <td>{!! $serviceitem->name !!}</td>
            <td>{!! $serviceitem->price !!}</td>
            <td>{!! $serviceitem->service_id !!}</td>
            <td>
                {!! Form::open(['route' => ['serviceitems.destroy', $serviceitem->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('serviceitems.show', [$serviceitem->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('serviceitems.edit', [$serviceitem->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>