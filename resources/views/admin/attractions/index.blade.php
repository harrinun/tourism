@extends('layouts.admin')

@section('content')
    <!-- page start-->
    <section class="panel">
        <header class="panel-heading">
            Editable Table
        </header>
        <div class="panel-body">
            <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">
                        <a href="{{route('admin.attractions.create')}}" id="editable-sample_new" class="btn btn-success">
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
                        <th>Type</th>
                        <th>Manager</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($attractions->isEmpty())
                        <tr><td colspan="4">No data</td></tr>
                    @else
                        @foreach($attractions as $attraction)
                            <tr class="">
                                <td>{{$attraction->name}}</td>
                                <td>{{$attraction->location}}</td>
                                <td>{{$attraction->owner->name}}</td>
                                <td><a class="edit" href="{{route('admin.attractions.edit',$attraction->slug)}}">Edit</a></td>
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
