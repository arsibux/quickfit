@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Serviceitem
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($serviceitem, ['route' => ['serviceitems.update', $serviceitem->id], 'method' => 'patch']) !!}

                        @include('serviceitems.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection