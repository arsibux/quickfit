<table class="table table-responsive" id="vehicles-table">
    <thead>
        <th>Reg No</th>
        <th>Color</th>
        <th>Vehicle Company</th>
        <th>Customer Id</th>
        <th>Model Year</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($vehicles as $vehicle)
        <tr>
            <td>{!! $vehicle->reg_no !!}</td>
            <td>{!! $vehicle->color !!}</td>
            <td>{!! $vehicle->vehicle_company !!}</td>
            <td>{!! $vehicle->customer_id !!}</td>
            <td>{!! $vehicle->model_year !!}</td>
            <td>
                {!! Form::open(['route' => ['vehicles.destroy', $vehicle->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vehicles.show', [$vehicle->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('vehicles.edit', [$vehicle->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>