@extends('layouts.admin')

@section('content')
    <!-- page start-->
    <section class="panel">
        <header class="panel-heading">
            Hotels
        </header>
        <div class="panel-body">
            <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">
                        <a href="{{route('admin.hotels.create')}}" id="editable-sample_new" class="btn btn-primary">
                            Add New <i class="icon-plus"></i>
                        </a>
                    </div>
                    <div class="btn-group pull-right">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Save as PDF</a></li>
                            <li><a href="#">Export to Excel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>City</th>
                        <th>Manager</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($hotels->isEmpty())
                        <tr><td colspan="4">No data</td></tr>
                    @else
                        @foreach($hotels as $hotel)
                            <tr class="">
                                <td>{{$hotel->name}}</td>
                                <td>{{$hotel->city}}</td>
                                <td>{{$hotel->user->name}}</td>
                                <td><a class="edit" href="{{route('admin.hotels.edit',$hotel->slug)}}">Edit</a></td>
                                <td><a class="delete" href="#" onclick="event.preventDefault();
                                       document.getElementById('del-form').submit()">Delete
                                    {!! Form::open(['method'=>'delete','id'=>'del-form','hidden','route'=>['hotels.destroy',$hotel->slug]]) !!}
                                    {!! Form::close() !!}</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- page end-->

@endsection
@push('js')
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>
@endpush
