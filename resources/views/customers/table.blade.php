<table class="table table-responsive" id="customers-table">
    <thead>
        <th>Name</th>
        <th>Gender</th>
        <th>Dob</th>
        <th>Nic</th>
        <th>Cell Number</th>
        <th>Address</th>
        <th>Company Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{!! $customer->name !!}</td>
            <td>{!! $customer->gender !!}</td>
            <td>{!! $customer->dob !!}</td>
            <td>{!! $customer->nic !!}</td>
            <td>{!! $customer->cell_number !!}</td>
            <td>{!! $customer->address !!}</td>
            <td>{!! $customer->company_id !!}</td>
            <td>
                {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('customers.show', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('customers.edit', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>