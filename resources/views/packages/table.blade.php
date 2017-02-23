<table class="table table-responsive" id="packages-table">
    <thead>
        <th>Name</th>
        <th>Validity</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($packages as $package)
        <tr>
            <td>{!! $package->name !!}</td>
            <td>{!! $package->validity !!}</td>
            <td>
                {!! Form::open(['route' => ['packages.destroy', $package->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('packages.show', [$package->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('packages.edit', [$package->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>