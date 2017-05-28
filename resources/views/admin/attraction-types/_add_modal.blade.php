<div class="modal fade" id="newAttractionType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Attraction Type</h4>
            </div>
            <div class="modal-body">

               {!! Form::open(['method'=>'post','action'=>'AttractionTypesController@store']) !!}
                <!--Name-->
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name',null, ['class' => 'form-control ','placeholder'=>'Name']) !!}
                </div>
                   <!--description-->
                   <div class="form-group">
                       {!! Form::label('description', 'Description') !!}
                       {!! Form::textarea('description',null, ['class' => 'form-control ','placeholder'=>'Description']) !!}
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