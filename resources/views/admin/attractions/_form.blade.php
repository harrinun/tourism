<!--Name-->
<div class="form-group">
    {!! Form::label('name', 'Name',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name',null, ['class' => 'form-control ','placeholder'=>'Name']) !!}
    </div>
</div>

<!--Category-->
<div class="form-group">
    {!! Form::label('attraction_type_id', 'Type',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('attraction_type_id',$select['attractionType'],null, ['class' => 'form-control ','placeholder'=>'Type']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('location', 'Location',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('location',null, ['class' => 'form-control ','placeholder'=>'Location']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('region', 'Region',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('region',null, ['class' => 'form-control ','placeholder'=>'City']) !!}
    </div>
</div>


<div class="form-group">
    {!! Form::label('Description', 'Description',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('Description',null, ['class' => 'form-control ','rows'=>3,'placeholder'=>'Description']) !!}
    </div>
</div>


{!! Form::submit($buttonText,['class'=>'btn btn-primary btn-wide pull-right ' ])!!}
