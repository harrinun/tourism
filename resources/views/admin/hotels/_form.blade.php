<!--Name-->
<div class="form-group">
    {!! Form::label('name', 'Name',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name',null, ['class' => 'form-control ','placeholder'=>'Name']) !!}
    </div>
</div>

<!--Parent-->
<div class="form-group">
    {!! Form::label('parent_id', 'Parent Hotel',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('parent_id',['1'=>'Main'],null, ['class' => 'form-control select','placeholder'=>'Parent Hotel']) !!}
    </div>
</div>

<!--Category-->
<div class="form-group">
    {!! Form::label('categories[]', 'Category',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('categories[]',$select['category_list'],null, ['class' => 'form-control ','multiple','placeholder'=>'Category']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('phone_number', 'Phone Number',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone_number',null, ['class' => 'form-control ','placeholder'=>'Phone']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('city', 'City',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('city',null, ['class' => 'form-control ','placeholder'=>'City']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('suburb', 'Suburb',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('suburb',null, ['class' => 'form-control ','placeholder'=>'Surburb']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('address', 'address',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('address',null, ['class' => 'form-control ','rows'=>3,'placeholder'=>'Postal Adress']) !!}
    </div>
</div>


{!! Form::submit($buttonText,['class'=>'btn btn-primary btn-wide pull-right ' ])!!}
