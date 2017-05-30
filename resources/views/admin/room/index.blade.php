@extends('layouts.admin')

@section('content')
    <!-- page start-->
    <section class="panel">
        <header class="panel-heading">
            Rooms
        </header>
        <div class="panel-body">
            <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">
                        <a id="editable-sample_new" class="btn btn-success " href="{{route('admin.rooms.create')}}">
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
                        </ul>oom
                    </div>
                </div>
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                    <thead>
                    <tr>
                        <th>Hotel</th>
                        <th>Room Type</th>
                        <th>No of Rooms</th>
                        <th>Price Per Night</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($rooms->isEmpty())
                        <tr><td colspan="4">No data</td></tr>
                    @else
                        @foreach($rooms as $room)
                            <tr class="">
                                <td>{{$room->hotel->name}}</td>
                                <td>{{$room->roomType->name}}</td>
                                <td>{{$room->no_of_rooms}}</td>
                                <td>{{$room->price_per_night}}</td>
                                <td><a class="edit" href="{{route('admin.rooms.edit',$room->id)}}">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
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
