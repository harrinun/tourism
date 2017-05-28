@extends('layouts.admin')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Edit {{$attraction->name}}</div>
            <div class="panel-body">
                {!! Form::model($attraction,
                        ['method' =>'put',
                         'route'  => ['admin.attractions.update',$attraction->slug],
                         'files'=>'true',
                         'class'=>'form-horizontal'
                    ])!!}

                @include('admin.attractions._form',['buttonText'=>'Save'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection