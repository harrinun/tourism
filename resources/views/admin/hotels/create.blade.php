@extends('layouts.admin')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Add New Hotel</div>
            <div class="panel-body">
            {!! Form::open(['action'=>'HotelsController@store','files'=>'true','method'=>'post','class'=>'form-horizontal']) !!}

                @include('admin.hotels._form',['buttonText'=>'Add'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection