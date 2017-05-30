

<!--Category-->
<div class="form-group">
    {!! Form::label('hotel_id', 'Type',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('hotel_id',$select['hotels'],null, ['class' => 'form-control ','data-placeholder'=>'Hotel']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('room_type_id', 'Type',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('room_type_id',$select['room_type'],null, ['class' => 'form-control ','placeholder'=>'Type']) !!}
    </div>
</div>

<!--no of rooms-->
<div class="form-group">
    {!! Form::label('no_of_rooms', 'No of Rooms',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::number('no_of_rooms',null, ['class' => 'form-control ','placeholder'=>'No of Rooms']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('price_per_night', 'Price Per Night',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('price_per_night',null, ['class' => 'form-control ','placeholder'=>'Location']) !!}
    </div>
</div>



{!! Form::submit($buttonText,['class'=>'btn btn-primary btn-wide pull-right ' ])!!}
