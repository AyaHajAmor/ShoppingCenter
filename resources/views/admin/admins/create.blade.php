@extends('admin.layouts.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('admin')]) !!}
     <div class="form-group">
        {!! Form::label('name','Admin Name') !!}
        {!! Form::text('name',old('name'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('email','Admin Email') !!}
        {!! Form::email('email',old('email'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('password','Admin Passwords') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
     </div>
     {!! Form::submit(trans('admin.create_admin'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
  
  
@endsection