@extends('layouts.admin')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Add New Attraction</div>
            <div class="panel-body">
                {!! Form::open(['action'=>'AttractionsController@store','files'=>'true','method'=>'post','class'=>'form-horizontal']) !!}

                @include('admin.attractions._form',['buttonText'=>'Add'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection