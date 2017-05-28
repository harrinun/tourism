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
                        <button id="editable-sample_new" class="btn btn-success " data-toggle="modal" href="#newAttractionType">
                            Add New <i class="icon-plus"></i>
                        </button>
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
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($attractionTypes->isEmpty())
                        <tr><td colspan="4">No data</td></tr>
                    @else
                        @foreach($attractionTypes as $attractionType)
                            <tr class="">
                                <td>{{$attractionType->name}}</td>
                                <td><a class="edit" href="{{route('admin.attraction-types.edit',$attractionType->id)}}">Edit</a></td>
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
@include('admin.attraction-types._add_modal')
@endsection
@push('js')
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>
@endpush
