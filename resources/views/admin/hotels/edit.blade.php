@extends('layouts.admin')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Edit {{$hotel->name}}</div>
            <div class="panel-body">
                {!! Form::model($hotel,
                        ['method' =>'put',
                         'route'  => ['admin.hotels.update',$hotel->slug],
                         'files'=>'true',
                         'class'=>'form-horizontal'
                    ])!!}

                     @include('admin.hotels._form',['buttonText'=>'Save'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection