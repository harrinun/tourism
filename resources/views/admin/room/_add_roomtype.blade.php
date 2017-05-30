<div class="modal fade" id="newRoomType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Room Type</h4>
            </div>
            <div class="modal-body">

            {!! Form::open(['method'=>'post','action'=>'RoomTypesController@store']) !!}
            <!--Name-->
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name',null, ['class' => 'form-control ','placeholder'=>'Name']) !!}
                </div>
                <!--description-->
                <div class="form-group">
                    {!! Form::label('no_of_persons', 'No. of Persons') !!}
                    {!! Form::number('no_of_persons',null, ['class' => 'form-control ','placeholder'=>'Number of Persons allowed']) !!}
                </div>


                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success" type="submit">Save changes</button>
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>